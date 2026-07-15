<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use App\Services\ContentCache;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    private function facilityLocations(): array
    {
        return [
            'uttarahalli' => [
                'label' => 'Nano Hospitals, Uttarahalli',
                'shortLabel' => 'Nano Hospitals',
                'address' => '12/1A, Uttarahalli Main Rd, near Bharat Petrol Bunk, Simhadri layout, Uttarahalli Hobli, Bengaluru, Karnataka 560061',
                'directionsUrl' => 'https://www.google.com/maps/dir/?api=1&destination=Nano+Hospitals+Uttarahalli+Bangalore',
                'facilityId' => (string) config('services.karexpert.appointment_facilities.uttarahalli'),
                'slotFacilityId' => (string) config('services.karexpert.slot_facilities.uttarahalli'),
            ],
            'hulimavu' => [
                'label' => 'Nano Hospitals, BG Road',
                'shortLabel' => 'Nano Hospitals',
                'address' => '79, Sir M Visveswaraya Road, DLF City Road, Nyanappana Halli, Hulimavu, Bengaluru, Karnataka 560076',
                'directionsUrl' => 'https://www.google.com/maps/dir/?api=1&destination=Nano+Hospitals+BG+Road+Bangalore',
                'facilityId' => (string) config('services.karexpert.appointment_facilities.hulimavu'),
                'slotFacilityId' => (string) config('services.karexpert.slot_facilities.hulimavu'),
            ],
        ];
    }

    private function doctorImageSrc(Doctor $doctor): string
    {
        $defaultImage = asset('assets/images/doctor-default.webp');
        $photoPath = $doctor->photo ? public_path('storage/' . $doctor->photo) : null;

        return ($photoPath && file_exists($photoPath))
            ? asset('storage/' . $doctor->photo)
            : $defaultImage;
    }

    private function doctorShowPayload(Request $request, Doctor $doctor): array
    {
        $doctor->load('speciality');

        $relatedDoctors = $this->relatedDoctors($doctor);

        $timezone = (string) config('services.karexpert.timezone', 'Asia/Kolkata');
        $slotDate = Carbon::parse($request->query('slot_date', now($timezone)->toDateString()), $timezone)->startOfDay();

        return [
            'doctor' => $doctor,
            'relatedDoctors' => $relatedDoctors,
            'slotDate' => $slotDate,
            'facilityLocations' => $this->facilityLocations(),
        ];
    }

    private function bookClinicPayload(Request $request, Doctor $doctor): array
    {
        $doctor->load('speciality');
        $timezone = (string) config('services.karexpert.timezone', 'Asia/Kolkata');
        $slotDate = Carbon::parse($request->query('slot_date', now($timezone)->toDateString()), $timezone)->startOfDay();

        $relatedDoctors = $this->relatedDoctors($doctor);

        return [
            'doctor' => $doctor,
            'relatedDoctors' => $relatedDoctors,
            'slotDate' => $slotDate,
            'facilityLocations' => $this->facilityLocations(),
            'doctorImage' => $this->doctorImageSrc($doctor),
        ];
    }

    private function relatedDoctors(Doctor $doctor)
    {
        return $this->contentCache->remember(
            'doctors:related:'.$doctor->speciality_id.':exclude:'.$doctor->id,
            ContentCache::TTL_SHORT,
            fn () => Doctor::with('speciality')
                ->where('speciality_id', $doctor->speciality_id)
                ->where('id', '!=', $doctor->id)
                ->latest()
                ->take(4)
                ->get()
        );
    }

    public function index(Request $request)
    {
        return view('doctors.index', $this->filteredDoctorsPayload($request));
    }

    public function bookAppointment(Request $request)
    {
        return view('doctors.book-appointment', $this->filteredDoctorsPayload($request));
    }

    private function filteredDoctorsPayload(Request $request): array
    {
        $query = Doctor::with('speciality');

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->location) {
            $locations = $request->location;

            $query->where(function ($q) use ($locations) {
                $q->whereIn('location', $locations);

                if (in_array('Uttarahalli', $locations) || in_array('Hulimavu', $locations)) {
                    $q->orWhere('location', 'Both');
                }
            });
        }

        if ($request->specialty) {
            $query->whereHas('speciality', function ($q) use ($request) {
                $q->whereIn('name', $request->specialty);
            });
        }

        $doctors = $query->paginate(10);
        $specialities = $this->contentCache->remember(
            'specialities:active',
            ContentCache::TTL_MEDIUM,
            fn () => Speciality::query()
                ->where('is_active', true)
                ->orderBy('name')
                ->get()
        );
        $branches = config('hospitals.branches', []);
        $selectedBranch = collect((array) $request->location)->first();
        $selectedSpecialty = collect((array) $request->specialty)->first();
        $facilityLocations = $this->facilityLocations();

        return compact(
            'doctors',
            'specialities',
            'branches',
            'selectedBranch',
            'selectedSpecialty',
            'facilityLocations',
        );
    }

    public function show(Request $request, Doctor $doctor)
    {
        return view('doctors.show', $this->doctorShowPayload($request, $doctor));
    }

    public function showSlotFirst(Request $request, Doctor $doctor)
    {
        return view('doctors.show', array_merge(
            $this->doctorShowPayload($request, $doctor),
            ['bookingFlowVariant' => 'slot_first_scroll']
        ));
    }

    public function bookClinic(Request $request, Doctor $doctor)
    {
        return view('doctors.book-clinic', $this->bookClinicPayload($request, $doctor));
    }

    public function bookClinicCheckout(Request $request, Doctor $doctor)
    {
        $validated = $request->validate([
            'location' => ['required', 'string', 'in:uttarahalli,hulimavu'],
            'slot_date' => ['required', 'date'],
            'slot_start_time' => ['required', 'integer'],
            'display_time' => ['required', 'string', 'max:50'],
            'doctor_id' => ['nullable', 'string', 'max:255'],
        ]);

        return view('doctors.book-clinic-checkout', array_merge(
            $this->bookClinicPayload($request, $doctor),
            [
                'checkout' => $validated,
                'locationKey' => $validated['location'],
                'location' => $this->facilityLocations()[$validated['location']],
            ],
        ));
    }
}
