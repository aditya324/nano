@extends('layouts.app')

@section('robots', ($bookingFlowVariant ?? null) === 'slot_first_scroll' ? 'noindex, follow' : 'index, follow')

@section('title', $doctor->name . ' | ' . $doctor->speciality->name . ' | Nano Hospitals')

@section('meta_description', filled($doctor->meta_description)
    ? $doctor->meta_description
    : \Illuminate\Support\Str::limit(strip_tags($doctor->name . ' - Nano Hospitals doctor'), 155))
@section('og_image', filled($doctor->photo) ? asset('storage/' . $doctor->photo) : asset('assets/images/doctor-default.webp'))

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Physician',
    'name' => $doctor->name,
    'description' => filled($doctor->meta_description) ? $doctor->meta_description : strip_tags((string) ($doctor->about ?? '')),
    'image' => filled($doctor->photo) ? asset('storage/' . $doctor->photo) : asset('assets/images/doctor-default.webp'),
    'medicalSpecialty' => $doctor->speciality?->name,
    'worksFor' => [
        '@type' => 'Hospital',
        'name' => 'Nano Hospitals',
        'url' => config('app.url'),
    ],
    'url' => route('doctors.show', $doctor->slug),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('twitter_title', $doctor->name . ' | ' . $doctor->speciality->name . ' | Nano Hospitals')
@section('twitter_description', filled($doctor->meta_description) ? $doctor->meta_description : $doctor->name . ', ' . $doctor->speciality->name . ' specialist at Nano Hospitals Bangalore.')
@section('meta_keywords', 
    $doctor->name . ', ' . 
    $doctor->speciality->name . ', Nano Hospitals, Best Doctor'
)

@php
    $defaultImage = asset('assets/images/doctor-default.webp');
    $photoPath = $doctor->photo ? public_path('storage/' . $doctor->photo) : null;

    $imgSrc = ($photoPath && file_exists($photoPath))
        ? asset('storage/' . $doctor->photo)
        : $defaultImage;

    $doctorLocationLabel = match (strtolower(trim((string) ($doctor->location ?? '')))) {
        'both' => 'Uttarahalli & BG Road',
        'uttarahalli' => 'Uttarahalli',
        'hulimavu' => 'BG Road',
        default => $doctor->location,
    };
@endphp

@section('content')
<section class="w-full bg-[#f0f0f5] py-8 sm:py-10">
    <div class="container mx-auto px-4 sm:px-6 xl:px-8">
        <div class="flex flex-col lg:flex-row gap-6 xl:gap-8 items-start">

            {{-- LEFT: Doctor Info --}}
            <div class="flex-1 min-w-0 space-y-4">

                {{-- Profile Card --}}
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-5 sm:p-6">
                    <div class="flex flex-col sm:flex-row gap-5">
                        <div class="shrink-0 flex justify-center sm:justify-start">
                            <img
                                src="{{ $imgSrc }}"
                                alt="{{ $doctor->name }}"
                                class="w-28 h-28 sm:w-32 sm:h-32 rounded-lg object-cover object-top border border-gray-100"
                            />
                        </div>

                        <div class="flex-1 min-w-0 text-center sm:text-left">
                            <h1 class="text-xl sm:text-2xl font-bold text-gray-600 leading-tight">{{ $doctor->name }}</h1>
                            <p class="mt-1 text-sm text-gray-600">{{ $doctor->qualification }}</p>
                            <p class="mt-1 text-sm text-gray-500">{{ $doctor->designation }}</p>
                            <p class="mt-2 text-sm font-medium text-gray-700">
                                {{ $doctor->experience_years }} Years Experience Overall
                            </p>
                            <p class="mt-1 text-sm text-gray-600">{{ optional($doctor->speciality)->name }}</p>

                            <div class="mt-3 flex flex-wrap items-center justify-center sm:justify-start gap-3 text-xs sm:text-sm">
                                <span class="inline-flex items-center gap-1.5 text-emerald-700 font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    Medical Registration Verified
                                </span>
                                <span class="text-gray-400">|</span>
                                <span class="text-gray-600">{{ $doctorLocationLabel }}</span>
                            </div>
                        </div>
                    </div>

                    @if(filled($doctor->about))
                        <p class="mt-5 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-5">
                            {{ $doctor->about }}
                        </p>
                    @endif
                </div>

                {{-- Info Tabs --}}
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="flex border-b border-gray-200 overflow-x-auto">
                        <button type="button" class="doctor-info-tab px-5 py-3 text-sm font-semibold text-red-600 border-b-2 border-red-500 whitespace-nowrap" data-tab="info">
                            Info
                        </button>
                    </div>

                    <div id="doctorInfoTabContent" class="p-5 sm:p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-1">Qualification</p>
                                <p class="text-sm font-medium text-gray-800">{{ $doctor->qualification }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-1">Speciality</p>
                                <p class="text-sm font-medium text-gray-800">{{ $doctor->speciality->name }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-1">Experience</p>
                                <p class="text-sm font-medium text-gray-800">{{ $doctor->experience_years }} Years</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-1">Location</p>
                                <p class="text-sm font-medium text-gray-800">{{ $doctorLocationLabel }}</p>
                            </div>
                            <div class="sm:col-span-2">
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-1">KMC Registration</p>
                                <p class="text-sm font-medium text-gray-800">{{ $doctor->kmc_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Slot Sidebar --}}
            <aside class="w-full lg:w-[380px] xl:w-[400px] shrink-0 lg:sticky lg:top-24 self-start">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Pick a time slot</h2>
                @include('doctors.partials.book-clinic-slots', ['sidebar' => true, 'doctorLocationLabel' => $doctorLocationLabel])
            </aside>

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

<div id="shareModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl w-[90%] max-w-sm p-6 relative">
        <button id="closeShareModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
        <h3 class="text-lg font-semibold text-gray-900 mb-4 text-center">Share Profile</h3>
        <div class="grid grid-cols-4 gap-4 text-center">
            <a id="shareWhatsapp" target="_blank" class="flex flex-col items-center text-green-500 hover:scale-110 transition">
                <i class="fab fa-whatsapp text-3xl text-green-500"></i>
                <span class="text-xs mt-1">WhatsApp</span>
            </a>
            <a id="shareFacebook" target="_blank" class="flex flex-col items-center text-blue-600 hover:scale-110 transition">
                <i class="fab fa-facebook text-3xl text-blue-600"></i>
                <span class="text-xs mt-1">Facebook</span>
            </a>
            <a id="shareLinkedin" target="_blank" class="flex flex-col items-center text-blue-700 hover:scale-110 transition">
                <i class="fab fa-linkedin text-3xl text-blue-700"></i>
                <span class="text-xs mt-1">LinkedIn</span>
            </a>
            <a id="shareX" target="_blank" class="flex flex-col items-center text-black hover:scale-110 transition">
                <i class="fab fa-x-twitter text-3xl text-black"></i>
                <span class="text-xs mt-1">X</span>
            </a>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("shareModal");
    const closeBtn = document.getElementById("closeShareModal");
    if (!modal || !closeBtn) return;

    let shareName = "";
    let shareUrl = "";

    document.querySelectorAll(".shareBtn").forEach(button => {
        button.addEventListener("click", function () {
            shareName = this.dataset.name;
            shareUrl = this.dataset.url;
            const text = `Check out Dr. ${shareName}'s profile`;

            document.getElementById("shareWhatsapp").href =
                `https://wa.me/?text=${encodeURIComponent(text + " " + shareUrl)}`;
            document.getElementById("shareFacebook").href =
                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`;
            document.getElementById("shareLinkedin").href =
                `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`;
            document.getElementById("shareX").href =
                `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(shareUrl)}`;

            modal.classList.remove("hidden");
            modal.classList.add("flex");
        });
    });

    closeBtn.addEventListener("click", () => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }
    });
});
</script>
