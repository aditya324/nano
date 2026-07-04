@props(['doctor'])

@php
$defaultImage = asset('assets/images/doctor-default.webp');

$photoPath = $doctor->photo ? public_path('storage/'.$doctor->photo) : null;

$imgSrc = ($photoPath && file_exists($photoPath))
    ? asset('storage/'.$doctor->photo)
    : $defaultImage;

$profileUrl = route('doctors.show',$doctor->slug);
@endphp


<div class="bg-white border border-gray-200 rounded-2xl p-5 sm:p-6
            flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-6
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

        <h3 class="text-base sm:text-lg font-semibold text-gray-900 leading-tight">
            {{ $doctor->name }}
        </h3>

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

    </div>


    <!-- ACTION AREA -->
    <div class="flex flex-col gap-3 w-full sm:w-44">

        <button type="button"
           data-open-appointment-modal
           class="w-full bg-red-500 text-white text-sm font-medium text-center py-2.5 rounded-lg
                  hover:bg-red-600 transition" data-track="book-appointment">

            Book Appointment

        </button>

        <a href="{{ $profileUrl }}"
           class="w-full border border-red-500 text-red-500 text-sm font-medium text-center py-2.5 rounded-lg
                  hover:bg-red-50 transition">

            View Profile

        </a>

    </div>

</div>