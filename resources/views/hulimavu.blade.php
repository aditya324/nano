@extends('layouts.app')

@section('title', 'Best Multispeciality Hospital in BG Road | Nano Hospitals BG Road')
@section('meta_description',
    'Nano Hospitals is one of the best multispeciality hospitals in BG Road offering 24/7
    emergency care, maternity, orthopedic, and advanced medical services in BG Road.')
@section('meta_keywords', 'multispeciality hospital, best hospital in BG Road, best hospital in India')

@push('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%);
        }



        /* Base state for all slides */
        .healthcareSwiper .swiper-slide {
            transition: all 0.4s ease;
        }

        /* Blur side slides */
        .healthcareSwiper .swiper-slide-prev img,
        .healthcareSwiper .swiper-slide-next img {
            filter: blur(3px);
            opacity: 0.5;
            transform: scale(0.95);
        }

        /* Active (center) slide */
        .healthcareSwiper .swiper-slide-active img {
            filter: blur(0);
            opacity: 1;
            transform: scale(1);
        }

        /* Optional: subtle overlay for side slides */
        .healthcareSwiper .swiper-slide-prev::after,
        .healthcareSwiper .swiper-slide-next::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
            pointer-events: none;
        }

        /* Remove overlay for active slide */
        .healthcareSwiper .swiper-slide-active::after {
            background: transparent;
        }

        .healthcareSwiper .swiper-slide {
            transition: all 0.4s ease;
        }

        /* Blur ALL non-active slides */
        .healthcareSwiper .swiper-slide:not(.swiper-slide-active) img {
            filter: blur(3px);
            opacity: 0.45;
            transform: scale(0.95);
        }

        /* Active (center) slide */
        .healthcareSwiper .swiper-slide-active img {
            filter: blur(0);
            opacity: 1;
            transform: scale(1);
        }
    </style>
    <style>
        /* Hide default swiper arrows */
        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none !important;
        }
    </style>
@endpush

@section('content')



    <section class="relative w-full h-[300px] sm:h-[360px] md:h-[420px] lg:h-[465px] overflow-hidden">

        <!-- Background Image -->
        <img src="./assets/Frame (2).webp" alt="Nano Hospital Building" class="absolute inset-0 w-full h-full" />

        <!-- Dark overlay for readability -->


        <!-- Logo -->
        <div class="absolute top-4 left-4 sm:top-6 sm:left-6 md:left-16 z-20">
            <img src="./assets/logo/logo.png" alt="Nano Hospitals" class="h-12 sm:h-14 md:h-20 lg:h-20 w-auto" />
        </div>

        <!-- Location Info Card -->
        <div
            class="
    absolute z-20 bg-white
    rounded-2xl border border-gray-200
    shadow-lg
    p-5 sm:p-6 md:p-7
    w-[94%] sm:w-[90%] md:w-auto
    max-w-full sm:max-w-xl md:max-w-3xl
    left-1/2 -translate-x-1/2
    md:left-20 md:translate-x-0
    bottom-4 sm:bottom-6
">

            <!-- Share Location Button -->
            <div class="absolute right-5 top-5">
                <button id="openShareModal"
                    class="bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-md flex items-center gap-2 shadow-md transition">
                    Share Location
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 8a3 3 0 10-2.83-4H12a3 3 0 00-2.83 4M6 12v6a2 2 0 002 2h8a2 2 0 002-2v-6M6 12h12" />
                    </svg>
                </button>
            </div>

            <!-- Location Title Row -->
            <div class="flex items-start gap-3 mb-2">
                <!-- Location Icon -->
                <div class="text-red-500 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4s-3 1.567-3 3.5S10.343 11 12 11z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 22s8-4.438 8-11.5S15.314 2 12 2 4 5.938 4 10.5 12 22 12 22z" />
                    </svg>
                </div>

                <!-- Title + Address -->
                <div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">
                        BG Road
                    </h3>
                    <p class="text-sm sm:text-base text-gray-500 leading-relaxed mt-1">
                        VJJ6+93H, 79, Sir M. Visvesvaraya Rd,<br>
                        near Arekere Saibaba Temple, Nyanappana Halli,<br>
                        DLF City Road, Hulimavu, Bengaluru, Karnataka 560076
                    </p>
                </div>
            </div>

            <!-- Phone Row -->
            <div class="flex items-center gap-3 mt-4">
                <div class="text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h2l3 7-1.5 1.5a11 11 0 005 5L13 17l7 3v2a1 1 0 01-1 1A16 16 0 013 5z" />
                    </svg>
                </div>
                <a href="tel:+9108929500500" class="text-red-500 font-semibold text-base sm:text-lg">
                    +91 089295 00500
                </a>
            </div>

        </div>

    </section>



    <section class="w-full bg-[#f5f5f5] py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

                <!-- LEFT: Title + Button -->
                <div>
                    <h3 class="text-lg font-semibold text-[#616161]">
                        Nano Hospitals, BG Road
                    </h3>

                    <a href="https://www.google.com/maps/dir/?api=1&destination=Nano+Hospitals+Hulimavu+Bangalore"
                        target="_blank"
                        class="inline-flex items-center gap-2 mt-4
          bg-white text-red-500 text-lg font-medium
          px-6 py-4 rounded-md
          hover:bg-red-600 transition">
                        Get Directions
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- RIGHT: Description -->
                <div class="md:col-span-2 text-sm text-gray-600 leading-relaxed">
                    <p>
                        Nano Hospitals Bannerghatta Road is one of the leading multispeciality hospitals in South Bangalore,
                        delivering comprehensive healthcare with advanced medical technology and experienced specialists.
                        Conveniently located near Hulimavu, Arekere, and Meenakshi Mall, we provide 24/7 emergency care,
                        advanced diagnostics, minimally invasive surgeries, ICU facilities, and personalized treatment for
                        patients of all ages.
                    </p>

                    <!-- Hidden extra content -->
                    <p class="more-text hidden mt-2">
                        Whether you need preventive health check-ups, specialized consultations, emergency treatment, or
                        complex surgeries, our expert medical team is committed to delivering quality healthcare with
                        compassion.
                    </p>

                    <button type="button"
                        class="read-more-btn inline-flex items-center gap-1 mt-2 text-red-500 font-medium text-sm hover:underline">
                        <span class="btn-text">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 transition-transform duration-200 arrow-icon"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>




            </div>
        </div>
    </section>


    <section class="relative w-full h-[969px] overflow-hidden">
        <!-- Background Image -->
        <img src="./assets/hulimavu.webp" alt="Uttarahalli 360 View" class="w-full h-full object-cover" />

        <!-- Overlay Button -->
        <div class="absolute inset-0 flex items-center justify-center">
            <a href="https://www.google.com/maps/place/Nano+Hospitals/@12.8810281,77.6101601,3a,75y,79.54h,108.05t/data=!3m8!1e1!3m6!1sCIHM0ogKEICAgID4-aaVvwE!2e10!3e11!6shttps:%2F%2Flh3.googleusercontent.com%2Fgpms-cs-s%2FAPRy3c9Gm2A7KUa2IG0dUEI73YzvMIPWzM-sW_XIA-Om1b1XJbd4-2k-1APjwLjtSmyBv_xowwNTZN_dolnkkvDjORyzgr-GXWk1RMztCNVovSdNs5cnJMm5M8-YtuBNkwRzzRFlSlSb%3Dw900-h600-k-no-pi-18.046415066368098-ya175.64226826125417-ro0-fo100!7i5376!8i2688!4m18!1m8!3m7!1s0x3bae14d5afa3d07d:0x80394a2cfa5d2528!2sNano+Hospitals!8m2!3d12.8809415!4d77.6102487!10e1!16s%2Fg%2F11s_zm93xh!3m8!1s0x3bae14d5afa3d07d:0x80394a2cfa5d2528!8m2!3d12.8809415!4d77.6102487!10e5!14m1!1BCgIgARICCAI!16s%2Fg%2F11s_zm93xh?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" rel="noopener noreferrer"
                class="bg-white text-red-500 font-semibold
             px-8 py-3 rounded-full shadow-lg
             hover:bg-red-500 hover:text-white
             transition duration-300 text-sm md:text-base">
                Click here for 360° View
            </a>
        </div>
    </section>







    <section class="w-full  py-10">
        <h2 class="text-center text-2xl font-semibold text-neutral-500 mb-14">
            Nano Hospitals, BG Road Tour
        </h2>
        <div class="container mx-auto px-6">

            <div class="relative">

                <!-- Swiper -->















                <div class="swiper healthcareSwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h48m30s534.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />

                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Deepak Kumar
                                                                </div> -->
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h50m04s962.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute"></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    From Risk to Recovery: A Surgical Miracle<br />Nano Hospitals
                                                                </div> -->
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m04s040.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m41s691.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m49s397.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m27s246.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m34s931.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m41s452.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m07s646.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m21s991.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m37s210.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h54m13s003.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative rounded-3xl overflow-hidden">
                                <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h54m52s344.webp"
                                    alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                                <div class="absolute "></div>

                                <!-- <div class="absolute inset-0 flex items-center justify-center">
                                                                    <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                                        ▶
                                                                    </div>
                                                                </div>

                                                                <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                                                    Patient Success Story<br />Preeti Jadhav
                                                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->
                <div class="swiper-button-prev !text-gray-400"></div>
                <div class="swiper-button-next !text-gray-400"></div>

            </div>
        </div>
    </section>


    <section class="w-full  py-10">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-neutral-500 mb-14">
                Healthcare Facilities at Nano, BG Road
            </h2>

            <!-- Description -->


            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img src="./assets/uttarahalli/dialysis (1).webp" alt="24×7 Dialysis"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Dialysis
                        </p>
                    </div>

                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img src="./assets/uttarahalli/ambulance.webp" alt="24×7 Emergency Services"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Emergency Services
                        </p>
                    </div>

                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img src="./assets/uttarahalli/pharmacy.webp" alt="24×7 Pharmacy"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Pharmacy
                        </p>
                    </div>

                </div>

            </div>

            <a href="./health-facilities" class="view-all flex justify-center  gap-3 mt-12 text-red-500">
                <h3>View all Health Care Facilities</h3>
                <span class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">
                    →
                </span>
            </a>
        </div>
    </section>



    <section class="w-full bg-white py-10">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-neutral-500 mb-14">
                Nano Hospitals Near You
            </h2>

            <!-- Cards Wrapper -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
                    <!-- Image -->
                    <div class="h-[320px] overflow-hidden">
                        <img src="./assets/uttarahalli.webp" alt="Nano Hospital Uttarahalli"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-8 text-center space-y-4">
                        <!-- Location -->
                        <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
                            <span>📍</span>
                            <span>Uttarahalli, Bengaluru</span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
                            Nano Hospitals,<br />Uttarahalli, Bengaluru
                        </h3>

                        <!-- CTA -->
                        <a href="./uttarahalli" class="inline-flex items-center gap-3 text-red-500 font-medium group">
                            Know More
                            <span
                                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
     transition-transform group-hover:translate-x-1">
                                →
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
                    <!-- Image -->
                    <div class="h-[320px] overflow-hidden">
                        <img src="./assets/hulimavu.webp" alt="Nano Hospital BG Road"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-8 text-center space-y-4">
                        <!-- Location -->
                        <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
                            <span>📍</span>
                            <span>BG Road, Bengaluru</span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
                            Nano Hospitals,<br />BG Road, Bengaluru
                        </h3>

                        <!-- CTA -->
                        <a href="{{ route('bg-road') }}"
                            class="inline-flex items-center gap-3 text-red-500 font-medium group">
                            Know More
                            <span
                                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
     transition-transform group-hover:translate-x-1">
                                →
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faqs" class="w-full  py-10">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-center text-2xl font-semibold text-neutral-500 mb-10">
                Frequently Asked Questions
            </h2>
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Why is Nano Hospitals considered one of the best hospitals in Bannerghatta Road?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Nano Hospitals Bannerghatta Road provides comprehensive healthcare with experienced specialists,
                        advanced diagnostics, modern operation theatres, 24/7 emergency care, and patient-focused treatment.
                        We serve patients from Bannerghatta Road, Hulimavu, Arekere, Gottigere, and nearby areas.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        What medical specialties are available at Nano Hospitals Bannerghatta Road?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        We offer expert care in Cardiology, Orthopedics, Neurology, Urology, General Medicine, Pediatrics,
                        Gynecology, Gastroenterology, Nephrology, Pulmonology, ENT, Dermatology, Physiotherapy, and more.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Does Nano Hospitals Bannerghatta Road provide 24/7 emergency care?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Yes. Our emergency department operates 24 hours a day with emergency physicians, ICU support,
                        ambulance services, and advanced diagnostic facilities to handle medical emergencies promptly.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Where is Nano Hospitals Bannerghatta Road located?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Nano Hospitals is conveniently located on Bannerghatta Road near Hulimavu, Arekere Saibaba Temple,
                        and DLF City Road, making it easily accessible for patients across South Bengaluru.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Do you provide cashless insurance facilities?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Yes. We work with major health insurance providers and government healthcare schemes. Our team
                        assists patients with cashless hospitalization, subject to policy eligibility.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        How can I book an appointment at Nano Hospitals Bannerghatta Road?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Appointments can be booked through our website, by calling our hospital, or by visiting the hospital
                        directly. Walk-in consultations are also available for many specialties.
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Which areas do you serve near Bannerghatta Road?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        We serve patients from Hulimavu, Arekere, Gottigere, JP Nagar, BTM Layout, Begur, Electronic City,
                        Meenakshi Mall area, and other nearby locations.
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Are specialist doctors available every day?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Our hospital has experienced specialists across multiple departments. Doctor availability may vary
                        by specialty, so we recommend checking the consultation schedule before your visit.
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Does Nano Hospitals offer health check-up packages?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Yes. We offer preventive health check-up packages for individuals, families, senior citizens,
                        corporate employees, and people managing chronic health conditions. </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        Does Nano Hospitals offer health check-up packages?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Yes. We offer preventive health check-up packages for individuals, families, senior citizens,
                        corporate employees, and people managing chronic health conditions. </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        What diagnostic services are available?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Our hospital provides advanced diagnostic services, including laboratory tests, CT scans, MRI scans,
                        ultrasound, ECG, X-ray, and other essential investigations. </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-5 bg-white">
                    <button
                        class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                        What diagnostic services are available?
                        <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                    </button>
                    <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                        Our hospital provides advanced diagnostic services, including laboratory tests, CT scans, MRI scans,
                        ultrasound, ECG, X-ray, and other essential investigations. </div>
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg p-5 bg-white">
                <button class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                    Why should I choose Nano Hospitals instead of another hospital in Bannerghatta Road?
                    <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                </button>
                <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                    Patients choose Nano Hospitals for experienced doctors, advanced medical technology, emergency care,
                    comprehensive specialties, patient-centric care, and convenient access from South Bengaluru.
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 bg-white">
                <button class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                    Do you treat international or out-of-town patients?
                    <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                </button>
                <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                    Yes. We welcome patients from across Karnataka and other states and assist with appointment scheduling
                    and treatment planning.
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 bg-white">
                <button class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                    What types of surgeries are performed?
                    <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                </button>
                <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                    Our specialists perform orthopedic, general, urology, gynecology, gastroenterology, laparoscopic, and
                    other advanced surgical procedures based on individual patient needs.
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 bg-white">
                <button class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                    Is parking available at Nano Hospitals Bannerghatta Road?
                    <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                </button>
                <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                    Yes. Parking facilities are available for patients and visitors, making hospital access more convenient.
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 bg-white">
                <button class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                    How do I reach Nano Hospitals Bannerghatta Road?
                    <span class="text-red-600 text-xl shrink-0 ml-4">+</span>
                </button>
                <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                    Nano Hospitals is located on Bannerghatta Road near Hulimavu Bus Terminus and Arekere, with easy access by BMTC buses, cabs, and private vehicles.
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="w-full bg-white py-0">
        <div id="shareModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40">

            <div class="bg-white rounded-2xl w-[380px] p-6 relative shadow-xl">
                <!-- Close -->
                <button id="closeShareModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">
                    ×
                </button>

                <h3 class="text-center text-lg font-semibold text-gray-700 mb-5">
                    Share Profile Via
                </h3>

                <div class="flex justify-center gap-4">

                    <!-- Copy Link -->
                    <button id="copyLink"
                        class="w-11 h-11 rounded-full bg-gray-700 flex items-center justify-center hover:scale-105 transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M10 13a5 5 0 007.07 0l1.41-1.41a5 5 0 00-7.07-7.07L10 5m4 6a5 5 0 01-7.07 0L5.5 9.5a5 5 0 017.07-7.07L14 3" />
                        </svg>
                    </button>

                    <!-- Facebook -->
                    <a id="fbShare" target="_blank"
                        class="w-11 h-11 rounded-full bg-blue-600 flex items-center justify-center hover:scale-105 transition">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V11h2.3l-.4 3h-1.9v7A10 10 0 0022 12" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a id="liShare" target="_blank"
                        class="w-11 h-11 rounded-full bg-blue-700 flex items-center justify-center hover:scale-105 transition">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.4 20.4h-3.5v-5.4c0-1.3 0-3-1.8-3s-2 1.4-2 2.9v5.5H9.6V9h3.4v1.6h.1c.5-.9 1.6-1.8 3.4-1.8 3.6 0 4.3 2.4 4.3 5.4v6.2zM5.3 7.4a2 2 0 110-4 2 2 0 010 4zM7 20.4H3.6V9H7v11.4z" />
                        </svg>
                    </a>

                    <!-- X / Twitter -->
                    <a id="xShare" target="_blank"
                        class="w-11 h-11 rounded-full bg-black flex items-center justify-center hover:scale-105 transition">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.9 2H22l-7.4 8.5L23 22h-6.6l-5.2-6.5L5.7 22H2l7.9-9.1L1 2h6.8l4.7 5.9L18.9 2z" />
                        </svg>
                    </a>

                    <!-- WhatsApp -->
                    <!-- WhatsApp -->
                    <a id="waShare" target="_blank"
                        class="w-11 h-11 rounded-full bg-green-500 flex items-center justify-center hover:scale-105 transition">

                        <i class="fab fa-whatsapp text-white text-lg"></i>

                    </a>


                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".healthcareSwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 80,
                depth: 200,
                modifier: 1,
                slideShadows: false, // recommended since we're using blur
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 2.2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    <script>
        document.addEventListener("click", function(e) {
            const btn = e.target.closest(".read-more-btn");
            if (!btn) return;

            const container = btn.closest("div");
            const moreText = container.querySelector(".more-text");
            const btnText = btn.querySelector(".btn-text");
            const arrow = btn.querySelector(".arrow-icon");

            moreText.classList.toggle("hidden");

            const expanded = !moreText.classList.contains("hidden");
            btnText.textContent = expanded ? "Read less" : "Read more";
            arrow.classList.toggle("rotate-90", expanded);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const openBtn = document.getElementById('openShareModal');
            const closeBtn = document.getElementById('closeShareModal');
            const modal = document.getElementById('shareModal');

            if (!openBtn || !closeBtn || !modal) return;

            const pageUrl = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Check out this hospital location");

            // Safely set links ONLY if element exists
            const wa = document.getElementById('waShare');
            const fb = document.getElementById('fbShare');
            const li = document.getElementById('liShare');
            const x = document.getElementById('xShare');
            const copyBtn = document.getElementById('copyLink');

            if (wa) wa.href = `https://wa.me/?text=${text}%20${pageUrl}`;
            if (fb) fb.href = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
            if (li) li.href = `https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}`;
            if (x) x.href = `https://twitter.com/intent/tweet?text=${text}&url=${pageUrl}`;

            // Open modal
            openBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });

            // Close modal
            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            // Close when clicking outside modal box
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });

            // Copy link
            if (copyBtn) {
                copyBtn.addEventListener('click', () => {
                    navigator.clipboard.writeText(window.location.href);
                    alert("Link copied to clipboard!");
                });
            }
        });
    </script>

    <script>
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const ans = btn.parentElement.querySelector('.faq-answer');
                const icon = btn.querySelector('span');
                ans.classList.toggle('hidden');
                icon.textContent = ans.classList.contains('hidden') ? '+' : '−';
            });
        });
    </script>


@endsection
