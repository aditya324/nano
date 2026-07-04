<?php

namespace App\View\Components;

use App\Models\Speciality;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class AppointmentBookingModal extends Component
{
    public Collection $specialities;

    public Collection $featuredSpecialities;

    public function __construct()
    {
        $this->specialities = Speciality::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name', 'slug']);

        $featuredNames = [
            'Orthopedics (Bone & Joint Care)',
            'Cardiology(heart care)',
            'General Surgery',
            'Gynaecology (Women care)',
            'ENT (Ear, Nose & Throat)',
            'Gastroenterology',
            'Dermatology',
            'Paediatrics  (child-care)',
        ];

        $this->featuredSpecialities = $this->specialities
            ->whereIn('name', $featuredNames)
            ->values();

        if ($this->featuredSpecialities->isEmpty()) {
            $this->featuredSpecialities = $this->specialities->take(8);
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.appointment-booking-modal');
    }
}
