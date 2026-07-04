@php
    $slotDateFormatted = \Carbon\Carbon::parse($checkout['slot_date'])->format('M j, Y');
    $displayTime = $checkout['display_time'];
@endphp

<div class="book-clinic-summary w-full max-w-sm">
    <div class="rounded-lg border border-gray-200 bg-white shadow-sm overflow-hidden">
        <div class="border-b border-gray-100 px-5 py-4">
            <div class="flex items-center gap-3">
                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-red-50 text-red-500">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </span>
                <p class="text-sm font-semibold text-gray-800">In-clinic Appointment</p>
            </div>
            <div class="mt-4 grid grid-cols-2 gap-3 text-sm text-gray-600">
                <div class="flex items-start gap-2">
                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>On {{ $slotDateFormatted }}</span>
                </div>
                <div class="flex items-start gap-2">
                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>At {{ $displayTime }}</span>
                </div>
            </div>
            <a href="{{ route('doctors.book-clinic', $doctor) }}" class="mt-3 inline-block text-sm font-medium text-red-500 hover:text-red-600">
                Change Date &amp; Time
            </a>
        </div>

        <div class="border-b border-gray-100 px-5 py-4">
            <div class="flex gap-3">
                <img src="{{ $doctorImage }}" alt="{{ $doctor->name }}" class="h-16 w-16 rounded-lg object-cover object-top border border-gray-100" />
                <div class="min-w-0">
                    <p class="font-semibold text-gray-900">{{ $doctor->name }}</p>
                    <p class="mt-0.5 text-xs text-gray-500 leading-snug">{{ $doctor->qualification }}</p>
                    <p class="mt-1 text-sm text-gray-600">{{ $doctor->speciality->name }}</p>
                </div>
            </div>
        </div>

        <div class="px-5 py-4">
            <div class="flex gap-3">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="Nano Hospitals" class="h-12 w-12 object-contain shrink-0" />
                <div class="min-w-0">
                    <p class="font-semibold text-gray-900">{{ $location['shortLabel'] }}</p>
                    <p class="mt-1 text-xs text-gray-500 leading-relaxed">{{ $location['address'] }}</p>
                    <a href="{{ $location['directionsUrl'] }}" target="_blank" rel="noopener" class="mt-2 inline-block text-sm font-medium text-red-500 hover:text-red-600">
                        Get Directions
                    </a>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('doctors.show', $doctor) }}" class="mt-4 inline-block text-sm font-medium text-red-500 hover:text-red-600">
        Go back to doctor profile
    </a>
</div>
