@props(['doctor', 'preferredFacilityKey' => null])

@php
$defaultImage = asset('assets/images/doctor-default.webp');

$photoPath = $doctor->photo ? public_path('storage/'.$doctor->photo) : null;

$imgSrc = ($photoPath && file_exists($photoPath))
    ? asset('storage/'.$doctor->photo)
    : $defaultImage;

$profileUrl = route('doctors.show',$doctor->slug);

$doctorLocationLabel = match (strtolower(trim((string) ($doctor->location ?? '')))) {
    'both' => 'Uttarahalli & BG Road',
    'uttarahalli' => 'Uttarahalli',
    'hulimavu' => 'BG Road',
    default => $doctor->location,
};

$facilityLocations = [
    'uttarahalli' => [
        'facilityId' => (string) config('services.karexpert.appointment_facilities.uttarahalli'),
        'slotFacilityId' => (string) config('services.karexpert.slot_facilities.uttarahalli'),
    ],
    'hulimavu' => [
        'facilityId' => (string) config('services.karexpert.appointment_facilities.hulimavu'),
        'slotFacilityId' => (string) config('services.karexpert.slot_facilities.hulimavu'),
    ],
];

$doctorFacilityKeys = match (strtolower(trim((string) ($doctor->location ?? '')))) {
    'both' => ['uttarahalli', 'hulimavu'],
    'uttarahalli' => ['uttarahalli'],
    'hulimavu' => ['hulimavu'],
    default => array_keys($facilityLocations),
};

$visibleFacilityLocations = array_intersect_key(
    $facilityLocations,
    array_flip($doctorFacilityKeys)
);

if ($visibleFacilityLocations === []) {
    $visibleFacilityLocations = $facilityLocations;
}

$initialFacilityKey = array_key_first($visibleFacilityLocations) ?: 'uttarahalli';

if ($preferredFacilityKey && array_key_exists($preferredFacilityKey, $visibleFacilityLocations)) {
    $initialFacilityKey = $preferredFacilityKey;
}
@endphp


<div class="doctor-card bg-white border border-gray-200 rounded-2xl p-5 sm:p-6
            flex flex-col sm:flex-row sm:items-center flex-wrap gap-5 sm:gap-6
            hover:shadow-lg hover:border-red-200 transition-all duration-300">

    <!-- DOCTOR IMAGE -->
    <div class="flex-shrink-0 flex justify-center sm:block">

        <div class="w-36 h-36 sm:w-36 sm:h-36 rounded-md overflow-hidden border border-gray-200 shadow-sm">

            <img
                src="{{ $imgSrc }}"
                alt="{{ $doctor->name }}"
                class="w-full h-full object-cover"
                loading="lazy"
                onerror="this.onerror=null; this.src='{{ $defaultImage }}';">

        </div>

    </div>


    <!-- DOCTOR INFO -->
    <div class="flex-1 text-center sm:text-left">

        <a href="{{ $profileUrl }}" class="text-base sm:text-lg font-semibold text-gray-900 leading-tight hover:text-red-500 transition">
            {{ $doctor->name }}
        </a>

        <span class="inline-block mt-2 text-xs bg-red-50 text-red-600 px-3 py-1 rounded-full font-medium">
            {{ optional($doctor->speciality)->name }}
        </span>

        <p class="text-sm text-gray-600 mt-3">
            {{ $doctor->qualification }}
        </p>

        <p class="text-xs text-gray-400 mt-1">
            Registration: {{ $doctor->kmc_number }}
        </p>

        <p class="text-sm text-gray-700 mt-2 font-medium">
            {{ $doctor->designation }}
        </p>


        <p class="text-sm text-gray-700 mt-2 font-medium">
            {{ $doctorLocationLabel }}
        </p>

    </div>


    <!-- ACTION AREA -->
    <div class="flex flex-col gap-3 w-full sm:w-44">

        <button type="button"
            data-track="book-appointment"
            data-open-inline-slots
            class="w-full bg-red-500 text-white text-sm font-medium text-center py-2.5 rounded-lg
                   hover:bg-red-600 transition">

            Book Appointment

        </button>

        {{-- <a href="{{ $profileUrl }}"
           class="w-full border border-red-500 text-red-500 text-sm font-medium text-center py-2.5 rounded-lg
                  hover:bg-red-50 transition">

            View Profile

        </a> --}}

    </div>

    <div
        class="doctor-inline-slots hidden w-full mt-1 border-t border-gray-100 pt-5"
        data-practitioner-id="{{ $doctor->practitioner_id }}"
        data-checkout-url="{{ route('doctors.book-clinic.checkout', $doctor) }}"
        data-facilities='@json($visibleFacilityLocations)'
        data-initial-location="{{ $initialFacilityKey }}"
        data-doctor-name="{{ $doctor->name }}"
    >
        <p class="text-center text-base mb-4">
            Book an appointment for <span class="font-semibold">Consultation</span>
        </p>
        @if(count($visibleFacilityLocations) > 1)
            <div class="mb-4 flex flex-wrap justify-center gap-2 doctor-inline-location-tabs">
                @foreach($visibleFacilityLocations as $key => $location)
                    <button
                        type="button"
                        data-location-key="{{ $key }}"
                        data-facility-id="{{ $location['facilityId'] }}"
                        data-slot-facility-id="{{ $location['slotFacilityId'] }}"
                        class="doctor-inline-location-tab rounded-full border px-4 py-1.5 text-xs font-semibold transition {{ $key === $initialFacilityKey ? 'border-red-500 bg-red-500 text-white' : 'border-gray-300 bg-white text-gray-600 hover:border-red-300' }}"
                    >
                        {{ $key === 'uttarahalli' ? 'Uttarahalli' : 'BG Road' }}
                    </button>
                @endforeach
            </div>
        @endif
        <div class="flex items-center gap-2 sm:gap-4">
            <button type="button" data-date-prev class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-500 hover:border-red-400 hover:text-red-500 disabled:opacity-40" aria-label="Previous dates">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <div data-date-tabs class="flex flex-1 min-w-0 divide-x divide-gray-200 overflow-hidden rounded-lg border border-gray-200"></div>
            <button type="button" data-date-next class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-500 hover:border-red-400 hover:text-red-500" aria-label="Next dates">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
        <div data-slots-loading class="hidden py-8 text-center text-sm text-gray-500">Loading available slots...</div>
        <div data-slots-empty class="hidden py-8 text-center text-sm text-gray-500">No slots available for this date.</div>
        <div data-slots-error class="hidden mt-4 rounded-lg bg-red-50 border border-red-100 px-4 py-3 text-sm text-red-700"></div>
        <div data-slots-area class="mt-4 hidden space-y-6"></div>
    </div>

</div>

@include('doctors.partials.doctor-inline-slots-script')
