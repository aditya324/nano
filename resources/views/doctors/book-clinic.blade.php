@extends('layouts.app')

@section('title', 'Book Clinic Visit | ' . $doctor->name . ' | ' . $doctor->speciality->name . ' | Nano Hospitals')
@section('robots', 'noindex, follow')

@section('meta_description', 'Book an in-clinic appointment with ' . $doctor->name . ' at Nano Hospitals.')

@section('content')
@php
    $imgSrc = $doctorImage;
@endphp

<section class="w-full bg-[#E6E6E6] relative overflow-hidden py-16">
    <div class="container mx-auto px-4 sm:px-6 xl:px-8 relative z-10">
        <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-start">

            <div class="w-full xl:w-auto flex flex-col items-center xl:items-start shrink-0">
                <div class="w-[260px] sm:w-[300px] xl:w-[340px] h-[320px] sm:h-[360px] xl:h-[400px] rounded-3xl overflow-hidden shadow-2xl mt-12">
                    <img
                        src="{{ $imgSrc }}"
                        alt="{{ $doctor->name }}"
                        class="w-full h-full object-cover object-top"
                    />
                </div>
            </div>

            <div class="flex-1 w-full">
                <div class="mb-8">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">{{ $doctor->name }}</h2>
                    <p class="text-base text-gray-500 mt-2 font-medium">{{ $doctor->designation }}</p>
                    <div class="flex items-center gap-3 mt-4">
                        <div class="h-[2px] w-12 bg-red-500 rounded-full"></div>
                        <div class="h-[2px] w-4 bg-red-300 rounded-full"></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-5 py-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m0-6l-9-5"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide">Qualification</p>
                        </div>
                        <p class="text-sm font-medium text-gray-800">{{ $doctor->qualification }}</p>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-5 py-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-7 h-7 rounded-lg bg-violet-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide">Speciality</p>
                        </div>
                        <p class="text-sm font-medium text-gray-800">{{ $doctor->speciality->name }}</p>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-5 py-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-7 h-7 rounded-lg bg-amber-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide">Experience</p>
                        </div>
                        <p class="text-sm font-medium text-gray-800">{{ $doctor->experience_years }} Years</p>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-5 py-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-7 h-7 rounded-lg bg-emerald-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide">Location</p>
                        </div>
                        <p class="text-sm font-medium text-gray-800">{{ $doctor->location }}</p>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-5 py-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-7 h-7 rounded-lg bg-rose-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide">KMC Registration</p>
                        </div>
                        <p class="text-sm font-medium text-gray-800 tracking-wide">{{ $doctor->kmc_number }}</p>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-sm border border-white rounded-2xl px-6 py-5 shadow-sm mb-8">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-7 h-7 rounded-lg bg-rose-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wide">About Doctor</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-relaxed">{{ $doctor->about }}</p>
                </div>

                @include('doctors.partials.book-clinic-slots')
            </div>
        </div>
    </div>
</section>

@if($relatedDoctors->count())
<section class="w-full py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 xl:px-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-10 text-center">
            Related Doctors – {{ $doctor->speciality->name }}
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-28 mt-32">
            @foreach($relatedDoctors as $relatedDoctor)
                <x-democard :doctor="$relatedDoctor" />
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
