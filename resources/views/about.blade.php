@extends('layouts.app')

@section('title', 'About Us | Nano Hospitals BG Road & Uttarahalli')
@section('meta_description',
    'Learn about Nano Hospitals, one of the best multispeciality hospitals in Bangalore offering 24/7 emergency care, maternity, orthopedic, and advanced medical services in Bangalore.')
@section('meta_keywords',
    'about us, Nano Hospitals, multispeciality hospital, best hospital in Bangalore, best hospital in India')


@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .about-banner {
            background-image: url('{{ asset('assets/banners/about-banner.webp') }}');
        }

        /* Uttarahalli-style carousel: blur side slides */
        .aboutVideoSwiper .swiper-slide {
            transition: all 0.4s ease;
        }

        .aboutVideoSwiper .swiper-slide:not(.swiper-slide-active) img {
            filter: blur(3px);
            opacity: 0.45;
            transform: scale(0.95);
        }

        .aboutVideoSwiper .swiper-slide-active img {
            filter: blur(0);
            opacity: 1;
            transform: scale(1);
        }

        .aboutVideoSwiper .swiper-slide-prev::after,
        .aboutVideoSwiper .swiper-slide-next::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
            pointer-events: none;
        }

        .aboutVideoSwiper .swiper-slide-active::after {
            background: transparent;
        }

        .aboutVideoSwiper .swiper-button-next,
        .aboutVideoSwiper .swiper-button-prev {
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%);
        }

        .aboutVideoSwiper .swiper-button-next::after,
        .aboutVideoSwiper .swiper-button-prev::after {
            display: none !important;
        }

        .aboutVideoSwiper .swiper-button-prev,
        .aboutVideoSwiper .swiper-button-next {
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            color: #374151;
            z-index: 10;
        }

        .aboutVideoSwiper .swiper-button-prev {
            left: 8px;
        }

        .aboutVideoSwiper .swiper-button-next {
            right: 8px;
        }

        .aboutVideoSwiper .swiper-button-prev:hover,
        .aboutVideoSwiper .swiper-button-next:hover {
            background: white;
            color: #dc2626;
        }


        .swiper,
        .swiper-wrapper,
        .swiper-slide {
            height: auto !important;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #6b7280 !important;
        }

        /* Normal (inactive) bullets */
        .swiper-pagination-bullet {
            background-color: #f87171 !important;
            /* Tailwind red-400 */
            opacity: 0.5;
            /* slightly faded */
        }

        /* Active bullet */
        .swiper-pagination-bullet-active {
            background-color: #dc2626 !important;
            /* Tailwind red-600 */
            opacity: 1;
        }
    </style>
@endpush
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

@section('content')

    {{-- <section class="relative w-full min-h-[400px] flex items-center justify-center">
        <img src="{{ asset('assets/banners/about-banner2.webp') }}" alt="About Nano Hospitals"
            class="absolute inset-0 w-full h-full object-fill" />

       
    </section> --}}



    <section class="w-full">
        <div class="swiper mySwiper h-fit">

            <div class="swiper-wrapper">

                <div class="swiper-slide flex items-center justify-center">
                    <img src="{{ asset('assets/banners/about-banner2.webp') }}" alt="Banner 1"
                        class="w-full h-auto object-contain">
                </div>

                <div class="swiper-slide flex items-center justify-center">
                    <img src="{{ asset('assets/banners/about-banner3.webp') }}" alt="Banner 3"
                        class="w-full h-auto object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="{{ asset('assets/banners/about-banner4.png') }}" alt="Banner 4"
                        class="w-full h-auto object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="{{ asset('assets/banners/about-banner5.png') }}" alt="Banner 5"
                        class="w-full h-auto object-contain">
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next hidden md:flex"></div>
            <div class="swiper-button-prev hidden md:flex"></div>

        </div>
    </section>

    <section class="w-full bg-[#f5f5f5] py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

                <!-- LEFT: Title + Button -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 text-center">
                        Welcome to Nano Hospitals <br> Trusted Multispecialty Hospital in Bangalore
                    </h3>



                </div>

                <!-- RIGHT: Description -->
                <div class="md:col-span-2 text-sm text-gray-600 leading-relaxed">
                    <p>
                        We at Nano Hospitals recognize and firmly believe that the very essence
                        of caring and care delivery is rooted in the highly skilled and
                        committed professionals who work round the clock.
                    </p>

                    <!-- Hidden extra content -->
                    <p class="more-text hidden mt-2">
                        Our multidisciplinary teams combine clinical excellence with
                        compassionate care to ensure every patient receives personalized
                        attention. From advanced diagnostics to post-treatment recovery,
                        we focus on delivering safe, ethical, and effective healthcare
                        services that improve lives.
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

    {{-- Video Carousel (Uttarahalli style) --}}
    <section class="w-full py-10">
        <div class="container mx-auto px-6">

            <div class="relative">
                <div class="swiper aboutVideoSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="CdzNe3VsyNE?si=ZIgtoCGnOVLzjWiL">
                                <img src="{{ asset('assets/testimonials/welcome.webp') }}"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="ISseQbN-A88?si=aVD-L0Hl3zPvQDvF">
                                <img src="{{ asset('assets/testimonials/nano-hospitals.webp') }}"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals Uttarahalli" />
                                <div class="absolute inset-0   flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="1KYUcnizQVA?si=1w3STGhkmMdlGmea">
                                <img src="{{ asset('assets/testimonials/ten-years.webp') }}"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Welcome to Nano Hospital" />
                                <div class="absolute inset-0  flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="1KYUcnizQVA?si=1w3STGhkmMdlGmea">
                                <img src="{{ asset('assets/testimonials/ten-years.webp') }}"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Welcome to Nano Hospital" />
                                <div class="absolute inset-0  flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="GXKefwqDTto">
                                <img src="https://img.youtube.com/vi/GXKefwqDTto/hqdefault.jpg"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals short video 1" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="VJxHpabaTR4">
                                <img src="https://img.youtube.com/vi/VJxHpabaTR4/hqdefault.jpg"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals short video 2" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="Y5CD78Q1v9Q">
                                <img src="https://img.youtube.com/vi/Y5CD78Q1v9Q/hqdefault.jpg"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals short video 3" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="hf916NzLRFs">
                                <img src="https://img.youtube.com/vi/hf916NzLRFs/hqdefault.jpg"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals short video 4" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                                data-video-id="Tyrfc4YFISc">
                                <img src="https://img.youtube.com/vi/Tyrfc4YFISc/hqdefault.jpg"
                                    class="w-full h-[320px] object-cover transition duration-300 group-hover:scale-105"
                                    alt="Nano Hospitals short video 5" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-red-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white ml-0.5"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-prev flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <div class="swiper-button-next flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- YouTube Video Modal --}}
    <div id="aboutVideoModal" class="fixed inset-0 hidden z-50 bg-black/70 flex items-center justify-center">
        <div class="relative bg-white rounded-xl max-w-3xl w-[90%] p-2">
            <button id="aboutVideoModalClose"
                class="absolute -top-3 -right-3 bg-black text-white w-8 h-8 rounded-full hover:bg-gray-800 transition z-10">✕</button>
            <iframe id="aboutYoutubePlayer" width="100%" height="450" frameborder="0"
                allow="autoplay; encrypted-media; fullscreen" allowfullscreen
                referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </div>



    <section class="w-full overflow-hidden">

        <!-- ================= DESKTOP VERSION ================= -->
        <div class="hidden md:block">
            <img src="{{ asset('assets/banners/mission-banner.webp') }}" alt="Nano’s Promise To Every Patient"
                class="w-full h-auto object-cover">
        </div>


        <!-- ================= MOBILE VERSION ================= -->
        <section class="md:hidden px-4 py-8 bg-white">

            <h2 class="text-xl font-bold text-center mb-6">
                Nano’s Promise To Every Patient
            </h2>

            <!-- ================= OUR MISSION ================= -->
            <div class="border-b border-gray-300">
                <button onclick="toggleAccordion(0)"
                    class="w-full flex justify-between items-center py-4 text-gray-700 font-semibold text-sm">
                    Our Mission
                    <span id="icon-0" class="text-xl transition-transform duration-300 rotate-180">⌄</span>
                </button>

                <div id="content-0" class="overflow-hidden transition-all duration-300 max-h-[800px] pb-6">

                    <!-- Circular Image -->
                    <div class="flex justify-center my-6">
                        <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg border border-red-500">
                            <img src="{{ asset('assets/icons/accordian-icon.webp') }}"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Text -->
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To continuously endeavor to work together to ensure the delivery of exceptional quality, safe compassionate and affordable healthcare.
                    </li>
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To strive hard to provide par-excellence patient experience
                    </li>
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To create opportunities to find innovative, sustainable and self serving healthcare
                    </li>
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To adopt the technological advances in the healthcare delivery.
                    </li>

                </div>
            </div>


            <!-- ================= OUR VISION ================= -->
            <div class="border-b border-gray-300">
                <button onclick="toggleAccordion(1)"
                    class="w-full flex justify-between items-center py-4 text-gray-700 font-semibold text-sm">
                    Our Vision
                    <span id="icon-1" class="text-xl transition-transform duration-300">⌄</span>
                </button>

                <div id="content-1" class="overflow-hidden transition-all duration-300 max-h-0 pb-0">

                    <div class="flex justify-center my-6">
                        <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg border border-red-500">
                            <img src="{{ asset('assets/icons/accordian-icon.webp') }}"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To be a preferred and class leader in our facilities, services patient experience, expert insights
                    </li>
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To introduce innovative and cutting edge advanced technologies and <br>services in varying medical sub specialties
                    </li>
                    <li class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        To initiate a cultural shift in the way healthcare is delivered moving from a standard ‘reactive’ approach to ‘proactive’ personalized and targeted approach.
                    </li>

                </div>
            </div>


            <!-- ================= OUR PHILOSOPHY ================= -->
            <div class="border-b border-gray-300">
                <button onclick="toggleAccordion(2)"
                    class="w-full flex justify-between items-center py-4 text-gray-700 font-semibold text-sm">
                    Our Philosophy of Care
                    <span id="icon-2" class="text-xl transition-transform duration-300">⌄</span>
                </button>

                <div id="content-2" class="overflow-hidden transition-all duration-300 max-h-0 pb-0">

                    <div class="flex justify-center my-6">
                        <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg border border-red-500">
                            <img src="{{ asset('assets/icons/accordian-icon.webp') }}"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        We combine Advanced Medical Expertise with Compassion and Collaboration
                        to deliver Personalized, Patient-centered healthcare in Bangalore.
                    </p>

                </div>
            </div>


            <!-- ================= OUR COMMITMENT ================= -->
            <div class="border-b border-gray-300">
                <button onclick="toggleAccordion(3)"
                    class="w-full flex justify-between items-center py-4 text-gray-700 font-semibold text-sm">
                    Our Commitment
                    <span id="icon-3" class="text-xl transition-transform duration-300">⌄</span>
                </button>

                <div id="content-3" class="overflow-hidden transition-all duration-300 max-h-0 pb-0">

                    <div class="flex justify-center my-6">
                        <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg border border-red-500">
                            <img src="{{ asset('assets/icons/accordian-icon.webp') }}"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm leading-relaxed text-center px-2">
                        We are committed to Delivering safe, ethical, and compassionate care
                        with the highest standards of quality.
                    </p>

                </div>
            </div>

        </section>



    </section>



    <section class="w-full bg-[#f2f2f2] py-16">
        <div class="container mx-auto px-6 lg:px-12">

            <!-- Section Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-700 mb-10">
                About Nano Hospitals
            </h2>

            <div class="grid lg:grid-cols-2 gap-10 items-center">

                <!-- Left Image Box -->
                <div class="w-full">
                    <div class="bg-gray-300 rounded-2xl h-[300px] md:h-[500px] shadow-inner overflow-hidden">
                        <img src="{{ asset('assets/giffs/about-giff.gif') }}" alt="Nano Hospitals"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Content Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 space-y-5">

                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Nano Hospitals is recognized as one of the most trusted and affordable hospitals in Bangalore,
                        offering complete multispecialty healthcare services under one roof. With over
                        <strong>25 years of commitment to excellence</strong>, we have built a reputation for clinical
                        expertise,
                        ethical medical practices, and patient-focused care.
                    </p>

                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Our facilities in BG Road and Uttarahalli are equipped with state-of-the-art infrastructure,
                        advanced operation theatres, modern diagnostic laboratories, fully equipped intensive care units
                        (ICU),
                        24/7 emergency services, and comprehensive inpatient and outpatient departments.
                    </p>

                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Our team of highly experienced doctors in Bangalore, supported by skilled nurses and trained
                        healthcare
                        professionals, follows a multidisciplinary approach to treatment.
                    </p>

                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        We combine evidence-based medicine, advanced diagnostic tools, and innovative treatment techniques
                        to
                        deliver superior clinical outcomes.
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-wrap gap-4 pt-4">

                        <a href="#"
                            class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full text-sm font-medium shadow-md transition">
                            Contact Us
                        </a>

                        <a href="{{ route('specialities.index') }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded-full text-sm font-medium transition">
                            Our Specialties
                        </a>

                        <a href="{{ route('doctors.index') }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded-full text-sm font-medium transition">
                            Our Doctors
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <img src="{{ asset('assets/banners/aboutcontact.webp') }}" alt="" class="w-full h-auto object-cover">



    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


        <script>
            new Swiper(".mySwiper", {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Read more
                document.addEventListener("click", function(e) {
                    const btn = e.target.closest(".read-more-btn");
                    if (!btn) return;
                    const container = btn.closest("div");
                    const moreText = container?.querySelector(".more-text");
                    const btnText = btn.querySelector(".btn-text");
                    const arrow = btn.querySelector(".arrow-icon");
                    if (!moreText) return;
                    moreText.classList.toggle("hidden");
                    const expanded = !moreText.classList.contains("hidden");
                    btnText.textContent = expanded ? "Read less" : "Read more";
                    arrow.classList.toggle("rotate-90", expanded);
                });

                // Video carousel (Uttarahalli style: coverflow, blur sides, autoplay)
                new Swiper(".aboutVideoSwiper", {
                    effect: "coverflow",

                    centeredSlides: true,
                    loop: true,

                    allowTouchMove: true,
                    slideToClickedSlide: true,
                    watchSlidesProgress: true,

                    preventClicks: false,
                    preventClicksPropagation: false,

                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },

                    coverflowEffect: {
                        rotate: 0,
                        stretch: 80,
                        depth: 200,
                        modifier: 1,
                        slideShadows: false,
                    },

                    navigation: {
                        nextEl: ".aboutVideoSwiper .swiper-button-next",
                        prevEl: ".aboutVideoSwiper .swiper-button-prev",
                    },

                    breakpoints: {
                        0: {
                            slidesPerView: 1.2
                        },
                        768: {
                            slidesPerView: 2.2
                        },
                        1024: {
                            slidesPerView: 3
                        },
                    },
                });

                // YouTube modal
                const ytModal = document.getElementById("aboutVideoModal");
                const ytPlayer = document.getElementById("aboutYoutubePlayer");
                const ytClose = document.getElementById("aboutVideoModalClose");
                document.querySelectorAll(".video-card").forEach(function(card) {
                    card.addEventListener("click", function() {
                        const videoId = this.dataset.videoId;
                        if (!videoId) return;
                        ytPlayer.src = "https://www.youtube.com/embed/" + videoId +
                            "?autoplay=1&rel=0&modestbranding=1&playsinline=1";
                        ytModal.classList.remove("hidden");
                        ytModal.classList.add("flex");
                    });
                });

                function closeYT() {
                    ytModal.classList.add("hidden");
                    ytModal.classList.remove("flex");
                    ytPlayer.src = "";
                }
                if (ytClose) ytClose.addEventListener("click", closeYT);
                ytModal.addEventListener("click", function(e) {
                    if (e.target === ytModal) closeYT();
                });
                document.addEventListener("keydown", function(e) {
                    if (e.key === "Escape") closeYT();
                });
            });



            document.addEventListener("DOMContentLoaded", function() {

                const buttons = document.querySelectorAll(".accordion-btn");

                buttons.forEach(button => {
                    button.addEventListener("click", function() {

                        const content = this.nextElementSibling;
                        const icon = this.querySelector(".accordion-icon");

                        // Close all other accordions
                        document.querySelectorAll(".accordion-content").forEach(item => {
                            if (item !== content) {
                                item.style.maxHeight = null;
                            }
                        });

                        document.querySelectorAll(".accordion-icon").forEach(i => {
                            if (i !== icon) {
                                i.textContent = "+";
                            }
                        });

                        // Toggle current
                        if (content.style.maxHeight) {
                            content.style.maxHeight = null;
                            icon.textContent = "+";
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                            icon.textContent = "−";
                        }
                    });
                });

            });



            function toggleAccordion(index) {

                const total = 4;

                for (let i = 0; i < total; i++) {

                    const content = document.getElementById("content-" + i);
                    const icon = document.getElementById("icon-" + i);

                    if (i === index) {

                        if (content.style.maxHeight && content.style.maxHeight !== "0px") {
                            content.style.maxHeight = "0px";
                            content.style.paddingBottom = "0px";
                            icon.classList.remove("rotate-180");
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                            content.style.paddingBottom = "1.5rem";
                            icon.classList.add("rotate-180");
                        }

                    } else {
                        content.style.maxHeight = "0px";
                        content.style.paddingBottom = "0px";
                        icon.classList.remove("rotate-180");
                    }
                }
            }
        </script>
    @endpush

@endsection
