@extends('layouts.app')

@section('title', 'Best Multispeciality Hospital in Bangalore | Nano Hospitals BG Road & Uttarahalli')
@section('meta_description', 'Best multispeciality hospital in Bangalore with 24x7 emergency care, NABH-accredited treatment, and expert specialists at BG Road and Uttarahalli for cardiology, orthopaedics, neurology, maternity, and cancer care.')

@section('canonical', rtrim(url('/'), '/').'/')

@push('head')
<meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />



<meta property="og:type" content="website" />
<meta property="og:site_name" content="Nano Hospitals" />
@section('twitter_title', 'Best Multispeciality Hospital in Bangalore | Nano Hospitals')
@section('twitter_description', 'Advanced multispeciality care in Bangalore with 24x7 emergency, top specialists, and NABH-accredited treatment at BG Road & Uttarahalli.')
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:image" content="{{ url('/assets/images/og-image.jpg') }}" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Nano Hospitals Bangalore" />
<meta name="twitter:description" content="Nano Hospitals provides advanced healthcare services in Bangalore with expert doctors, modern facilities, and patient-focused care." />
<meta name="twitter:url" content="{{ url('/') }}" />
<meta name="twitter:site" content="@nanohospitals" />
<meta name="twitter:creator" content="@nanohospitals" />
<meta name="twitter:image" content="{{ url('/assets/images/og-image.jpg') }}" />
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments);
            };
        })(window, document, 'clarity', 'script', 'su1jk02xgu');
    </script>
    <script async src="https://www.clarity.ms/tag/su1jk02xgu"></script>
    <meta name="Generator" content="Drupal 10 (https://www.drupal.org)" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    @php
        $siteUrl = rtrim(url('/'), '/');
        $nanoPageSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Hospital', 'MedicalOrganization'],
            '@id' => $siteUrl . '/#organization',
            'name' => 'Nano Hospitals',
            'url' => $siteUrl . '/',
            'logo' => $siteUrl . '/assets/logo/logo.png',
            'description' => 'Best multispeciality hospital in Bangalore offering cashless advanced medical care, 24x7 emergency services, top specialists, and NABH-accredited treatment.',
            'telephone' => '+91XXXXXXXXXX', // ← replace with real number
            'sameAs' => [
                'https://www.facebook.com/nanohospitalss/',
                'https://www.instagram.com/nanohospitals/',
                'https://youtube.com/@nanohospitals',
                'https://linkedin.com/company/nanohospitals',
                'https://x.com/HospitalsNano',
            ],
        ],
        [
            '@type' => ['Hospital', 'LocalBusiness'],
            '@id' => $siteUrl . '/bg-road#location',
            'name' => 'Nano Hospitals - BG Road',
            'parentOrganization' => ['@id' => $siteUrl . '/#organization'],
            'url' => $siteUrl . '/bg-road',
            'telephone' => '+91XXXXXXXXXX', // ← replace
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'BG Road', // ← replace with full address
                'addressLocality' => 'Bengaluru',
                'addressRegion' => 'Karnataka',
                'postalCode' => '560076', // ← confirm
                'addressCountry' => 'IN',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '12.8916',  // ← confirm from Google Maps
                'longitude' => '77.5979',
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens' => '00:00',
                'closes' => '23:59',
            ],
            'priceRange' => '₹₹',
        ],
        [
            '@type' => ['Hospital', 'LocalBusiness'],
            '@id' => $siteUrl . '/uttarahalli#location',
            'name' => 'Nano Hospitals - Uttarahalli',
            'parentOrganization' => ['@id' => $siteUrl . '/#organization'],
            'url' => $siteUrl . '/uttarahalli',
            'telephone' => '+91XXXXXXXXXX', // ← replace
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Uttarahalli', // ← replace with full address
                'addressLocality' => 'Bengaluru',
                'addressRegion' => 'Karnataka',
                'postalCode' => '560061', // ← confirm
                'addressCountry' => 'IN',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '12.8785',  // ← confirm from Google Maps
                'longitude' => '77.5497',
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens' => '00:00',
                'closes' => '23:59',
            ],
            'priceRange' => '₹₹',
        ],
    ],
];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($nanoPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

    @push('styles')
        <style>
            .orbit-ring {
                animation: rotate 30s linear infinite;
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .feature-card {
                transition: all 0.3s ease;
            }

            .feature-card:hover {
                transform: translateY(-5px);
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

    @php
$schema = [
    "@context" => "https://schema.org",
    "@graph" => [

        [
            "@type" => "Hospital",
            "@id" => url('/') . '#BG Road',
            "name" => "Nano Hospitals - BG Road",
            "url" => url('/'),
            "logo" => asset('logo.png'),
            "image" => asset('assets/hulimavu.webp'),
            "telephone" => "+91-8767200300",
            "priceRange" => "$$",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "VJJ6+93H, 79, Sir M. Visvesvaraya Rd, Hulimavu, Bengaluru, Karnataka 560076",
                "addressLocality" => "Hulimavu",
                "addressRegion" => "Karnataka",
                "postalCode" => "560076",
                "addressCountry" => "IN"
            ]
        ],

        [
            "@type" => "Hospital",
            "@id" => url('/') . '#uttarahalli',
            "name" => "Nano Hospitals - Uttarahalli",
            "url" => url('/'),
            "logo" => asset('logo.png'),
            "image" => asset('default-og.jpg'),
            "telephone" => "+91-8929500500",
            "priceRange" => "$$",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "12/1A, Uttarahalli Main Rd, Bengaluru, Karnataka 560061",
                "addressLocality" => "Uttarahalli",
                "addressRegion" => "Karnataka",
                "postalCode" => "560061",
                "addressCountry" => "IN"
            ]
        ]

    ]
];
@endphp

@push('schema')
<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')


    


    <!-- JAVASCRIPT -->
    <script>
        const toggle = document.getElementById('socialToggle');
        const dropdown = document.getElementById('socialDropdown');

        toggle.addEventListener('click', function(e) {
            e.stopPropagation();

            const isClosed = dropdown.classList.contains('opacity-0');

            dropdown.classList.toggle('opacity-0');
            dropdown.classList.toggle('translate-x-6');
            dropdown.classList.toggle('scale-95');
            dropdown.classList.toggle('pointer-events-none');

            // Grow when open, shrink when closed
            if (isClosed) {
                toggle.classList.add('scale-110');
            } else {
                toggle.classList.remove('scale-110');
            }
        });

        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target) && e.target !== toggle) {
                dropdown.classList.add('opacity-0', 'translate-x-6', 'scale-95', 'pointer-events-none');
                toggle.classList.remove('scale-110');
            }
        });
    </script>





    {{-- <section class="w-full hidden md:block ">
        <div class="relative w-full mx-auto h-auto bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/blur.jpg');">


            


            <div
                class="relative z-20 px-4 lg:px-0 flex flex-col lg:flex-row items-center lg:items-start max-w-[1400px] mx-auto">


                <div class="w-full lg:w-1/2 text-center lg:text-left flex flex-col justify-center h-full mt-10">
                    <p class="text-xl sm:text-2xl md:text-3xl text-[#555555] font-semibold uppercase mb-1">
                        World-Class Doctors
                    </p>

                    <h2
                        class="text-2xl sm:text-3xl md:text-3xl xl:text-4xl font-extrabold text-red-600 drop-shadow-lg leading-tight mb-1">
                        COMPLETE HEALTH CHECKUPS
                    </h2>

                    <p class="text-xl sm:text-2xl md:text-3xl font-semibold text-red-600 mb-6">
                        Total Peace of Mind
                    </p>
                </div>


                <div class="w-full lg:w-1/2 flex items-end h-full">
                    <img loading="lazy" decoding="async" src="./assets/banners/family-home (2).png"
                        class="w-full max-w-[420px] md:max-w-[520px] lg:max-w-[617px] h-auto object-contain" alt="Family">
                </div>

            </div>
        </div>
    </section> --}}

    <section class="w-full">
        <div class="swiper mySwiper h-fit">

            <div class="swiper-wrapper">

                <a href="{{ route('packages.show', 'basic-health-package') }}"
                    class="swiper-slide flex items-center justify-center">
                    <img loading="eager" decoding="async" fetchpriority="high" src="{{ asset('assets/banners/banner1.webp') }}" alt="Banner 1"
                        class="w-full h-auto object-contain">
                </a>

                <a href="{{ route('specialities.index') }}" class="swiper-slide flex items-center justify-center">
                    <img loading="lazy" decoding="async" src="{{ asset('assets/banners/banner2.webp') }}" alt="Banner 2"
                        class="w-full h-auto object-contain">
                </a>

                <div class="swiper-slide flex items-center justify-center">
                    <img loading="lazy" decoding="async" src="{{ asset('assets/banners/banner3.webp') }}" alt="Banner 3"
                        class="w-full h-auto object-contain">
                </div>

            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next hidden md:flex"></div>
            <div class="swiper-button-prev hidden md:flex"></div>

        </div>
    </section>








    {{-- <section class="w-full md:hidden">
        <div class="relative w-full bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/blur.jpg');">

            <p class="text-lg uppercase font-semibold text-[#666] text-center">
                World-Class Doctors
            </p>

            <h2 class="text-lg font-extrabold text-red-400 leading-tight mt-1 text-center">
                COMPLETE HEALTH CHECKUPS
            </h2>

            <p class="text-base font-semibold text-red-400 mt-0.5 text-center">
                Total Peace of Mind
            </p>

            <div class="relative z-10 h-full px-4 flex items-center justify-between">
                <div class="flex justify-end items-end w-full">
                    <img loading="lazy" decoding="async" src="./assets/banners/family-home (2).png" alt="Family" class="h-full w-[398px] object-contain">
                </div>
            </div>

        </div>
    </section> --}}


    <section class="w-full py-6 bg-[#F6F6F6] hidden md:block">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 gap-x-5">


                <button type="button"
                    data-open-appointment-modal
                    data-track="book-appointment"
                    class="group bg-[#FF4B4B] rounded-2xl p-6 flex justify-between items-center w-full text-left
                shadow-lg
                hover:-translate-y-2 hover:shadow-2xl
                transition-all duration-300 ease-out">

                    <div>
                        <h3 class="text-white text-xl font-semibold">
                            Book An Appointment
                        </h3>
                        <p class="text-white/90 text-sm mt-1">
                            Your health, just one step away
                        </p>
                    </div>

                    <div class="w-12 h-12 flex items-center justify-center">
                        <img loading="lazy" decoding="async" src="./assets/icons/book-appointment (2).png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </button>

                <!-- Doctors -->

                <a href="/doctors">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Doctors</h3>
                            <p class="text-sm mt-1">
                                Top Experts for your Health
                            </p>
                        </div>

                        <img loading="lazy" decoding="async" src="./assets/icons/doctor.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

                <!-- Specialities -->
                <a href="/specialities"
                    class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                    <div>
                        <h3 class="text-lg font-semibold">Specialities</h3>
                        <p class="text-sm mt-1">
                            Expert care across every Specialty
                        </p>
                    </div>

                    <img loading="lazy" decoding="async" src="./assets/icons/specialities.png" alt=""
                        class="group-hover:scale-110 transition-transform duration-300">
                </a>

                <!-- Procedures -->
                <a href="/procedures">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Procedures</h3>
                            <p class="text-sm mt-1">
                                Safe, Proven Medical Procedures
                            </p>
                        </div>

                        <img loading="lazy" decoding="async" src="./assets/icons/procedures.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

                <!-- Conditions -->
                <a href="/conditions">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Conditions</h3>
                            <p class="text-sm mt-1">
                                Health Conditions and Ailments we Treat
                            </p>
                        </div>

                        <img loading="lazy" decoding="async" src="./assets/icons/stethescope.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

                <!-- Health Packages -->
                <a href="/health-packages">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Health Packages</h3>
                            <p class="text-sm mt-1">
                                Health Conditions we Treat
                            </p>
                        </div>

                        <img loading="lazy" decoding="async" src="./assets/icons/health-packages.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

            </div>
        </div>
    </section>
    <section class="md:hidden w-full px-4 py-6 bg-white">
        <div class="flex flex-col gap-4 max-w-md mx-auto">

            <!-- Book Appointment -->
            <button type="button"
                data-open-appointment-modal
                data-track="book-appointment"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              bg-[#FF4B4B] text-white font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img loading="lazy" decoding="async" src="./assets/icons/book-appointment (2).png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300  w-10 h-10">
                Book Appointments
            </button>

            <!-- Our Hospitals -->
            <!-- <a href="/hospitals"
                                                                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                                                                <img loading="lazy" decoding="async"
                                                                  src="./assets/icons/doctor.png"
                                                                  alt=""
                                                                  class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                                                                Conditions
                                                              </a> -->


            <!-- Doctors -->
            <a href="doctors"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img loading="lazy" decoding="async" src="./assets/icons/doctor.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Doctors
            </a>

            <!-- Specialities -->
            <a href="/specialities"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img loading="lazy" decoding="async" src="./assets/icons/specialities.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Specialities
            </a>



            <!-- Facilities -->
            <a href="/procedures"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img loading="lazy" decoding="async" src="./assets/icons/procedures.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                procedures
            </a>

            <!-- Second Opinion -->
            <a href="/health-packages"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img loading="lazy" decoding="async" src="./assets/icons/health-packages.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Health Package
            </a>

        </div>
    </section>


    <div class="hidden md:block">
        <section class=" flex items-center justify-center p-4  mt-10">
            <div class="max-w-5xl w-full ">

                <div class="text-center mb-8">
                    <h1 class="text-4xl md:text-3xl font-bold mb-3">
                        {{-- <span class="text-red-500">Nano.</span> --}}
                        <span class="text-[#737373]"> Best Multispeciality Hospital in Bangalore</span>
                    </h1>
                    <p class="font-semibold text-[#737373] text-lg mb-1 ">World Class Infrastructure</p>
                    <a href="/why-nano"
                        class="inline-flex items-center gap-2 text-red-500 mt-2 hover:gap-3 transition-all">
                        See How It Works
                        <svg class="w-5 h-5 bg-red-500 text-white rounded-full p-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>


                <div class="relative w-full mx-auto" style="height: 600px; max-width: 700px;">

                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                        <div class="w-[450px] h-[450px] rounded-full overflow-hidden shadow-2xl border-8 border-white">

                            <img  decoding="async" loading="eager" id="centerImage" src="./assets/banners/uttarahalli-circle.webp"
                                alt="Hospital" class="w-full h-full object-cover transition-opacity duration-500">
                        </div>
                    </div>


                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
                        style="width: 560px; height: 560px;">
                        <svg class="w-full h-full" viewBox="0 0 560 560">
                            <circle cx="280" cy="280" r="275" fill="none" stroke="#d1d5db"
                                stroke-width="2" stroke-dasharray="10,10" />
                        </svg>
                    </div>

                    <div class="absolute left-1/2 -translate-x-1/2 z-20" style="top: 5px;">
                        <div class="flex flex-col items-center">
                            <button onclick="changeFeature(0)"
                                class="orb w-12 h-12 rounded-full bg-red-500 border-4 border-red-500 shadow-lg hover:scale-110 transition-all duration-300"></button>

                        </div>
                    </div>

                    <div class="absolute z-20" style="right: 50px; top: 50%; transform: translateY(-50%);">
                        <button onclick="changeFeature(1)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute left-16 top-1/2 -translate-y-1/2 text-left w-36">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1 ">Care Across <br>Branches</h3>
                            <a href="/doctors"
                                class="inline-flex items-center gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Explore Doctors
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="right: 130px; bottom: 80px;">
                        <button onclick="changeFeature(2)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute left-16 top-1/2 -translate-y-1/2 text-left w-32">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Latest high-end Facilities</h3>
                            <a href="/health-facilities"
                                class="inline-flex items-center gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                View Facilities
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="left: 130px; bottom: 80px;">
                        <button onclick="changeFeature(3)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute right-16 top-1/2 -translate-y-1/2 text-right w-32">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Patient-First<br>Care Team</h3>
                            <a href="/patient-testimonials"
                                class="inline-flex items-center justify-end gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Read Patient Stories
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="left: 50px; top: 50%; transform: translateY(-50%);">
                        <button onclick="changeFeature(4)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute right-16 top-1/2 -translate-y-1/2 text-right w-36">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Trusted Quality<br>Care</h3>
                            <a href="/why-nano"
                                class="inline-flex items-center justify-end gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Learn More
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>





        </section>
    </div>


    <!-- MOBILE ONLY -->
    <section class="md:hidden px-4 py-6 bg-white">

        <!-- ITEM 1 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(0)"
                class="w-full flex justify-between items-center py-4 text-[#737373] font-medium text-sm">
                World Class Infrastructure
                <span id="icon-0" class="text-xl">˄</span>
            </button>

            <div id="content-0" class="pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img loading="lazy" alt="World Class Infrastructure" decoding="async" src="./assets/banners/patients-choice.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="/why-nano" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Why Choose Us
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(1)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Care Across Branches
                <span id="icon-1" class="text-xl">˅</span>
            </button>

            <div id="content-1" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img loading="lazy" decoding="async" src="./assets/hulimavu (1).webp" alt="Care Across Branches" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="/doctors" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Explore Doctors
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(2)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Latest high-end Facilities
                <span id="icon-2" class="text-xl">˅</span>
            </button>

            <div id="content-2" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img loading="lazy" decoding="async" alt="Latest high-end Facilities" src="./assets/banners/high-end.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="/health-facilities" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Explore Facilities
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(3)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Patient-First Care Team
                <span id="icon-3" class="text-xl">˅</span>
            </button>

            <div id="content-3" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img loading="lazy" alt="Patient-First Care Team" decoding="async" src="./assets/banners/patient-first.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="/why-nano" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Why Choose Us
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 5 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(4)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Trusted Quality Care
                <span id="icon-4" class="text-xl">˅</span>
            </button>

            <div id="content-4" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img loading="lazy" decoding="async" alt="Trusted Quality Care" src="./assets/banners/trusted-quality-care.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="/why-nano" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Why Choose Us
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section class="w-full py-10">

        <!-- HEADING -->
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-semibold text-[#737373]">
                Nano Centers of
                <span class="text-red-500 font-semibold">Excellence</span>
            </h2>

            <!-- TABS -->
            <div class="flex justify-center flex-wrap gap-24 mt-6 border-b border-gray-200">

                <!-- SPECIALITIES (ACTIVE) -->
                <button class="tab-btn relative text-xl  pb-4 text-red-500 font-semibold hover:text-red-500 transition"
                    data-target="specialities">
                    Specialities

                    <!-- underline -->
                    <span
                        class="absolute left-1/2 -translate-x-1/2 bottom-0
             w-32 h-[2px] bg-red-500 rounded-full">
                    </span>
                </button>

                <!-- PROCEDURES -->
                <button class="tab-btn relative text-xl  pb-4 text-gray-500 font-semibold hover:text-red-500 transition"
                    data-target="procedures">
                    Procedures
                </button>

                <!-- CONDITIONS -->
                <button class="tab-btn relative text-xl  pb-4 text-gray-500 font-semibold hover:text-red-500 transition"
                    data-target="conditions">
                    Conditions
                </button>

            </div>


        </div>

        <!-- ================= SPECIALITIES ================= -->
        <div id="specialities"
            class="tab-content show flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-28">
            <!-- 1. Anaesthesia -->
            <a href="/specialities/bone-joint-care"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Bone & Joint Care" src="./assets/specialities/bone-and-joint.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Bone &<br />Joint Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Bone & Joint Care" src="./assets/specialities/bone-and-joint.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Bone & Joint Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['bone-joint-care'] ?? 'Advanced diagnosis and treatment for bone, joint and musculoskeletal disorders.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 2. Invasive & Non-Invasive Cardiology -->
            <a href="/specialities/child-care-paediatrics"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Child Care" src="./assets/specialities/child-care.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Child<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Child Care" src="./assets/specialities/child-care.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Child Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['child-care-paediatrics'] ?? 'Compassionate pediatric care focused on the health, growth, and well-being of children.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 3. Cardiac Thoracic Surgery -->
            <a href="/specialities/women-care-obstetrics"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Women's Care" src="./assets/specialities/women-care-removebg-preview.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Women’s<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Women's Care" src="./assets/specialities/women-care-removebg-preview.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Women’s Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['women-care-obstetrics'] ?? 'Comprehensive healthcare services addressing women’s health needs across all life stages.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 4. Critical Care Medicine -->
            <a href="/specialities/general-medicine"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="General Medicine" src="./assets/specialities/general-medicine.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        General<br />Medicine
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="General Medicine" src="./assets/specialities/general-medicine.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">General Medicine</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['general-medicine'] ?? 'Expert physician care for diagnosis, treatment, and prevention of common and complex adult health conditions.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 5. Dermatology -->
            <a href="/specialities/brain-care"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" src="./assets/specialities/braincare.png"
                    alt="Brain Care"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Brain<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" src="./assets/specialities/braincare.png"
                        alt="Brain Care"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Brain Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['brain-care'] ?? 'Specialised neurology care for stroke, epilepsy, migraine, neuropathy, and other brain and nervous system conditions.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>

            <a href="/specialities"
                class="w-full flex justify-center items-center font-semibold gap-2 text-red-500 font-medium">
                <h3>View all Specialities</h3>

            </a>
        </div>

        <!-- ================= PROCEDURES ================= -->
        <div id="procedures"
            class="tab-content hidden flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-28">

            <a href="/procedures/knee-replacement-surgery"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" src="./assets/specialities/knee.webp" class="absolute left-18 top-1/2 -translate-y-1/2 h-[150px] object-contain z-10
                transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" alt="Knee Replacement Surgery" />
                    class="absolute left-15 top-1/2 -translate-y-1/2 h-[120px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/7 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Knee Replacement <br> Surgery
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" src="./assets/specialities/knee.webp"
                        alt="Knee Replacement Surgery" class="absolute right-18 top-1/10 -translate-y-1/10 h-[160px]
                    object-contain opacity-40 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold text-center mb-2"> Knee Replacement <br> Surgery</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['knee-replacement-surgery'] ?? 'Comprehensive orthopedic care focused on restoring knee function, relieving pain, and improving mobility.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>

            <a href="{{ route('procedures.show', 'hip-replacement-surgery') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Hip Replacement Surgery" src="./assets/specialities/bone-and-joint.webp"
                    class="absolute left-18 top-1/2 -translate-y-1/2 h-[150px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-10 top-1/10 -translate-y-1/10 z-10
                  transition-opacity duration-300 group-hover:opacity-0 ">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Hip Replacement Surgery
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Hip Replacement Surgery" src="./assets/specialities/bone-and-joint.webp"
                        class="absolute right-12 top-1/2 -translate-y-1/2 h-[150px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 text-center">Hip Replacement Surgery</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['hip-replacement-surgery'] ?? 'Advanced hip replacement care to relieve severe hip pain, restore joint movement, and help you return to daily activity.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>
            <a href="{{ route('procedures.show', 'spinal-surgery') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Spinal Surgery" src="{{ asset('assets/specialities/spinal-surgery.webp') }}"
                    class="absolute left-22 top-1/2 -translate-y-1/2 h-[120px] object-contain z-10
              transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-14 top-1/10 -translate-y-1/10 z-10
              transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Spinal Surgery
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Spinal Surgery" src="{{ asset('assets/specialities/spinal-surgery.webp') }}"
                        class="absolute right-12 top-1/2 -translate-y-1/2 h-[150px]
                object-contain opacity-30 pointer-events-none
                filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Spinal Surgery</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['spinal-surgery'] ?? 'Surgical care for herniated discs, spinal stenosis, and related spine conditions to relieve pain and improve mobility.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>

            <a href="{{ route('procedures.show', 'cesarean-section') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Cesarean Section" src="{{ asset('assets/specialities/cesarean-section.webp') }}"
                    class="absolute left-18 top-1/2 -translate-y-1/2 h-[120px] object-contain z-10
              transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-14 top-1/10 -translate-y-1/10 z-10
              transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Cesarean Section
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Cesarean Section" src="{{ asset('assets/specialities/cesarean-section.webp') }}"
                        class="absolute right-12 top-1/2 -translate-y-1/2 h-[150px]
                object-contain opacity-30 pointer-events-none
                filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Cesarean Section</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['cesarean-section'] ?? 'Safe C-section delivery with experienced obstetricians and advanced maternity care for mother and baby.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>
            <a href="{{ route('procedures.show', 'kidney-surgery') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Kidney Surgery" src="{{ asset('assets/specialities/kidney-procedure.webp') }}"
                    class="absolute left-18 top-1/2 -translate-y-1/2 h-[120px] object-contain z-10
          transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-14 top-1/10 -translate-y-1/10 z-10
          transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Kidney Surgery
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Kidney Surgery" src="{{ asset('assets/specialities/kidney-procedure.webp') }}"
                        class="absolute right-12 top-1/2 -translate-y-1/2 h-[120px]
            object-contain opacity-30 pointer-events-none
            filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 text-center">Kidney Surgery</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['kidney-surgery'] ?? 'Specialised kidney surgery for stones, cysts, tumours, and other urological conditions requiring precise operative care.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>

            <a href="{{ route('procedures.index') }}"
                class="w-full flex justify-center items-center font-semibold gap-2 text-red-500 font-medium mt-4">
                <h3>View all Procedures</h3>
            </a>
        </div>

        <!-- ================= CONDITIONS ================= -->
        <div id="conditions"
            class="tab-content hidden flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-28">

            <a href="{{ route('conditions.show', 'heart-disease') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" alt="Heart Disease" src="{{ asset('assets/specialities/heart-disease.webp') }}"
                    class="absolute left-18 top-1/2 -translate-y-1/2 h-[100px] object-contain z-10
          transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-14 top-1/10 -translate-y-1/10 z-10
          transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Heart Disease
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" alt="Heart Disease" src="{{ asset('assets/specialities/heart-disease.webp') }}"
                        class="absolute right-12 top-1/2 -translate-y-1/2 h-[100px]
            object-contain opacity-30 pointer-events-none
            filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 text-center">Heart Disease</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['heart-disease'] ?? 'Advanced cardiac care for coronary artery disease and related heart conditions, focused on stronger long-term heart health.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>

            <a href="{{ route('conditions.show', 'osteoarthritis') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/osteoarthritis.webp') }}"
                    alt="Osteoarthritis"
                    class="absolute left-18 top-1/2 -translate-y-1/2 h-[100px] object-contain z-10
      transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-14 top-1/10 -translate-y-1/10 z-10
      transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Osteoarthritis
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/osteoarthritis.webp') }}"
                        alt="Osteoarthritis" class="absolute right-12 top-1/2 -translate-y-1/2 h-[100px]
        object-contain opacity-30 pointer-events-none
        filter brightness-200 saturate-0" />
                    
                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 text-center">Osteoarthritis</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['osteoarthritis'] ?? 'Orthopedic care for joint pain and cartilage wear, with treatment options to relieve pain and restore everyday mobility.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>
            <a href="{{ route('conditions.show', 'gallstones') }}"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/gallstones.webp') }}"
                    alt="Gallstones" class="absolute left-18 top-1/2 -translate-y-1/2 h-[100px] object-contain z-10
      transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-18 top-1/10 -translate-y-1/10 z-10
      transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                        Gallstones
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/gallstones.webp') }}"
                        alt="Gallstones" class="absolute right-12 top-1/2 -translate-y-1/2 h-[100px]
        object-contain opacity-30 pointer-events-none
        filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 text-center">Gallstones</h3>
                            <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['gallstones'] ?? 'Expert gastrointestinal care for gallstones, abdominal pain, and related bile duct problems with lasting relief in mind.' }}</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a>
            <a href="{{ route('conditions.show', 'back-and-neck-pain') }}"
            class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

            <div class="absolute inset-0 bg-cover bg-no-repeat"
                style="background-image: url('./assets/background/Frame 134.png');"></div>

            <!-- Default -->
            <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/neck-and-back-pain.webp') }}"  class="absolute left-18 top-1/2 -translate-y-1/2 h-[100px] object-contain z-10
            transition-all duration-300 group-hover:opacity-0 group-hover:scale-95"  alt="Back and Neck Pain" />
               

            <div
                class="absolute left-5 top-1/10 -translate-y-1/10 z-10
  transition-opacity duration-300 group-hover:opacity-0">
                <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                    Back and Neck Pain
                </h3>
            </div>

            <!-- Hover -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                <div class="absolute inset-0 bg-red-600/80"></div>

                <img loading="lazy" decoding="async" class="absolute right-12 top-1/2 -translate-y-1/2 h-[100px]
                object-contain opacity-30 pointer-events-none
                filter brightness-200 saturate-0" src="{{ asset('assets/specialities/neck-and-back-pain.webp') }}" alt="Back and Neck Pain" />
                     

                <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4 text-center">Back and Neck Pain</h3>
                        <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['back-and-neck-pain'] ?? 'Spine specialist care for chronic back and neck pain, focused on personalised relief and faster return to comfort.' }}</p>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium">Read More</span>
                        <span
                            class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                    </div>
                </div>
            </div>

        </a>
        <a href="{{ route('conditions.show', 'hypertension-high-blood-pressure') }}"
        class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

        <div class="absolute inset-0 bg-cover bg-no-repeat"
            style="background-image: url('./assets/background/Frame 134.png');"></div>

        <!-- Default -->
        <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/hypertension.webp') }}" class="absolute left-18 top-1/2 -translate-y-1/2 h-[120px] object-contain z-10
        transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" alt="Hypertension" />
            

        <div
            class="absolute left-18 top-1/10 -translate-y-1/10 z-10
transition-opacity duration-300 group-hover:opacity-0">
            <h3 class="text-red-500 font-semibold text-xl leading-snug text-center">
                Hypertension
            </h3>
        </div>

        <!-- Hover -->
        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
            <div class="absolute inset-0 bg-red-600/80"></div>

            <img loading="lazy" decoding="async" src="{{ asset('assets/specialities/hypertension.webp') }}"
                alt="Hypertension" class="absolute right-12 top-1/2 -translate-y-1/2 h-[120px]
object-contain opacity-30 pointer-events-none
filter brightness-200 saturate-0" />

            <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-center">Hypertension</h3>
                    <p class="text-sm leading-relaxed opacity-95">{{ $homeTeasers['hypertension-high-blood-pressure'] ?? 'Personalised high blood pressure care to protect your heart, kidneys, and long-term cardiovascular health.' }}</p>
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium">Read More</span>
                    <span
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                </div>
            </div>
        </div>

    </a>

            <a href="{{ route('conditions.index') }}"
                class="w-full flex justify-center items-center font-semibold gap-2 text-red-500   mb-9">
            <div class="flex items-center gap-2">
                <h3>View all Conditions</h3>
                <span
                    class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
            </div>
            </a>
        </div>

    </section>

    <section class="w-full py-10 bg-[#f9f9f9]">
        <div class="max-w-4xl mx-auto text-center mb-10">
            <h2 class="text-2xl font-semibold text-[#737373]">
                Latest Health
                <span class="text-red-500 font-semibold">Articles</span>
            </h2>
            <p class="mt-3 text-sm text-gray-500 max-w-2xl mx-auto">
                Expert health insights, treatment guides, and wellness tips from our medical team.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-y-10 gap-10 mt-6 md:px-28">
            @forelse ($latestBlogs as $blog)
                <a href="{{ route('blogs.show', $blog->slug) }}"
                    class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer bg-white">

                    <div class="absolute inset-0 bg-cover bg-no-repeat"
                        style="background-image: url('./assets/background/Frame 134.png');"></div>

                    @if($blog->featured_image)
                        <img loading="lazy" decoding="async"
                            src="{{ asset('storage/' . $blog->featured_image) }}"
                            alt="{{ $blog->title }}"
                            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 h-[200px] w-[200px] object-cover rounded-xl z-10
                            transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />
                    @endif

                    <div class="absolute inset-x-0 bottom-0 p-5 z-10
                        transition-opacity duration-300 group-hover:opacity-0">
                        <h3 class="text-red-500 font-semibold text-base leading-snug line-clamp-3">
                            {{ $blog->title }}
                        </h3>
                    </div>

                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                        <div class="absolute inset-0 bg-red-600/80"></div>

                        <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-semibold mb-4 line-clamp-3">{{ $blog->title }}</h3>
                                <p class="text-sm leading-relaxed opacity-95 line-clamp-4">
                                    {{ $blog->excerpt ?? 'Read our latest health article from Nano Hospitals.' }}
                                </p>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium">Read Article</span>
                                <span class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p class="text-center text-gray-500 w-full">Health articles coming soon.</p>
            @endforelse
        </div>

        <div class="flex justify-center mt-10">
            <a href="{{ route('blogs.index') }}"
                class="inline-flex items-center gap-2 font-semibold text-red-500 hover:text-red-600 transition">
                View All Articles
                <span class="w-8 h-8 flex items-center justify-center rounded-full border border-red-500 text-sm">→</span>
            </a>
        </div>
    </section>

    <section class="w-full py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <h2 class="text-2xl font-semibold text-[#737373]">Featured Doctors</h2>
                <p class="mt-3 text-sm text-gray-500 max-w-2xl">
                    Meet our experienced specialists dedicated to compassionate and advanced care.
                </p>
            </div>

            <div class="mt-32 grid grid-cols-1 gap-y-36 md:grid-cols-2 md:gap-x-8 lg:grid-cols-4">
                @forelse ($featuredDoctors as $doctor)
                    <x-democard :doctor="$doctor" />
                @empty
                    <p class="col-span-full text-center text-gray-500">Doctors will be listed here shortly.</p>
                @endforelse
            </div>

            <div class="mt-10 flex justify-center">
                <a href="{{ route('doctors.index') }}"
                    class="inline-flex items-center gap-2 rounded-full   px-6 py-3 text-sm font-semibold text-red-500 transition  ">
                    View all Doctors
                    <span class="text-base leading-none">→</span>
                </a>
            </div>
        </div>
    </section>

    <section class="w-full py-20 bg-[#f9f9f9]">
        <div class="container mx-auto px-4">

            <!-- Section Heading -->
            <h2 class="text-center text-2xl font-semibold text-[#737373] mb-14">
                Our Medical Services
            </h2>

            <!-- MAIN GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

                <!-- LEFT CARD (Tall) -->
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img  decoding="async" loading="lazy" alt="Health Checkups" src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Health Checkups
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                take charge of your well being with a health experience customized for you
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="/doctors" class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Explore Doctors
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img  decoding="async" loading="lazy" src="./assets/icons/stethescope.png" alt="">
                        </div>
                    </div>
                </div>

                <!-- CENTER COLUMN (2 STACKED CARDS) -->
                <div class="grid grid-rows-2 gap-10 lg:px-10">

                    <!-- Center Card Top -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-6 flex flex-col justify-between px-10">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                24/7 Emergency Care
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Round-the-clock emergency treatment when every second counts
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="{{ route('specialities.show', 'emergency-critical-care') }}"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Explore Emergency Care
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img  decoding="async" loading="lazy" src="./assets/icons/syren.png" alt="">
                        </div>
                    </div>

                    <!-- Center Card Bottom -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-6 flex flex-col justify-between lg:px-10">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Specialized Surgical Care
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Expert-led surgeries using modern techniques for faster recovery
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="/specialities"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Explore Specialties
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img  decoding="async" loading="lazy" src="./assets/icons/knife (2).png" alt="">
                        </div>
                    </div>

                </div>

                <!-- RIGHT CARD (Tall) -->
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img loading="lazy" decoding="async" loading="lazy" alt="Second Opinion" src="./assets/second-opineon.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Second Opinion
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Confirm diagnosis and take informed decision about your treatment plan
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="/second-opinion"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Request a Second Opinion
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/msg.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-16 md:py-20 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">
                <div class="relative h-full">
                    <img src="{{ asset('assets/banners/about-banner.webp') }}" alt="Nano Hospitals Bangalore"
                        class="w-full h-full min-h-[320px] md:min-h-[460px] object-cover rounded-2xl shadow-md">
                    <div
                        class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 border border-white/70">
                        <p class="text-sm md:text-base font-semibold text-[#2a2a2a]">BG Road & Uttarahalli Branches</p>
                        <p class="text-xs md:text-sm text-[#555]">Trusted multispeciality care across Bangalore</p>
                    </div>
                </div>

                <div class="bg-white border border-[#f0e6e6] rounded-2xl p-6 md:p-8 shadow-md">
                    <p class="text-xs md:text-sm font-semibold tracking-[0.16em] text-red-500 uppercase mb-3">Trusted
                        Healthcare in
                        Bangalore</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#1f1f1f] leading-tight mb-3">
                        Comprehensive Care, Closer to You
                    </h2>
                    <p class="text-base md:text-lg text-[#4b4b4b] leading-7 mb-5">
                        Nano Hospitals delivers reliable multispeciality healthcare with experienced doctors, modern
                        infrastructure, and patient-first treatment.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1.5 rounded-full bg-red-50 text-red-600 text-sm font-medium">24/7 Emergency</span>
                        <span class="px-3 py-1.5 rounded-full bg-red-50 text-red-600 text-sm font-medium">Maternity Care</span>
                        <span class="px-3 py-1.5 rounded-full bg-red-50 text-red-600 text-sm font-medium">Orthopedics</span>
                        <span class="px-3 py-1.5 rounded-full bg-red-50 text-red-600 text-sm font-medium">Pediatrics</span>
                    </div>
                    <button type="button"
                        data-open-appointment-modal
                        data-track="book-appointment"
                        class="inline-flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white font-medium px-5 py-3 rounded-xl transition-colors">
                        Book Appointment
                        <span aria-hidden="true">→</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="relative w-full bg-[#E7484E] overflow-hidden h-fit">
        <!-- dotted pattern -->
        <div
            class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.25)_1px,transparent_1px)] bg-[size:14px_14px] opacity-40">
        </div>

        <div class="relative container mx-auto px-6 py-16 lg:py-20 flex flex-col lg:flex-row items-center gap-10">

            <!-- LEFT CONTENT -->
            <div class="w-full lg:w-1/2 text-white space-y-4">
                <p class="text-xl tracking-wide font-semibold">
                    Nano Care Beyond Boundaries
                </p>

                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-semibold leading-tight">
                    Fostering health with <br>
                    cutting-edge medical <br>
                    services trusted <br>
                    internationally
                </h2>

                <a href="/international-patients"
                    class="inline-block mt-6 bg-white text-[#E7484E] font-medium px-6 py-3 rounded-full hover:bg-gray-100 transition">
                    Enquire Now
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <img loading="lazy" decoding="async" src="./assets/banners/map.png" alt="Global Healthcare Network"
                    class="max-w-full h-auto object-contain" />
            </div>

        </div>
    </section>

    <section class="w-full py-24 bg-white">
        <div class="container mx-auto px-4">

            <h2 class="text-center text-2xl font-semibold text-gray-600 mb-14">
                Patient Stories
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-center">

                <!-- LEFT SMALL -->
                <div class="space-y-6">
                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-video-id="2SjtTbdp-Y8">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/testimonail.webp"
                            alt="Patient Story" class="w-full h-44 object-cover transition duration-300 group-hover:scale-105" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LEFT COLUMN -->
                <div class="space-y-6">

                    <!-- External YouTube -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer group"
                        onclick="window.open('https://www.youtube.com/watch?v=D4NR17CShi4','_blank')">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/Frame.webp"
                            alt="Patient Story" class="w-full h-44 object-cover transition duration-300 group-hover:scale-105" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-video-id="8Y2jnTcGaXQ">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/Frame (15).webp"
                            alt="Patient Story" class="w-full h-44 object-cover transition duration-300 group-hover:scale-105" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- CENTER LARGE -->
                <div class="video-card relative rounded-3xl overflow-hidden cursor-pointer group"
                    data-instagram-url="https://www.instagram.com/reel/DQOIgt8E2Yq/">

                    <img loading="lazy" decoding="async" src="./assets/testimonials/Frame (14).webp"
                        alt="Patient Story" class="w-full h-[450px] object-cover transition duration-300 group-hover:scale-105" />

                    <div class="absolute inset-0 bg-black/30"></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="space-y-6">

                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-instagram-url="https://www.instagram.com/reel/CrpafHty-Pz/">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/Frame (16).webp"
                            alt="Patient Story" class="w-full h-56 object-cover transition duration-300 group-hover:scale-105" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- YouTube Modal -->
                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-video-id="H-uw003ra-M">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/Frame (18).webp"
                            class="w-full h-44 object-cover transition duration-300 group-hover:scale-105" alt="Patient Story" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT MOST -->
                <div>
                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-instagram-url="https://www.instagram.com/reel/DLmn0CySkY2/">

                        <img loading="lazy" decoding="async" src="./assets/testimonials/Frame (19).webp"
                            alt="Patient Story" class="w-full h-56 object-cover transition duration-300 group-hover:scale-105" />

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center shadow-xl transition duration-300 group-hover:scale-110 group-hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-14 flex justify-center">
            <a href="/patient-testimonials" class="flex items-center gap-2 text-red-500 font-medium">
                View All Patient Stories
                <span class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">
                    →
                </span>
            </a>
        </div>
    </section>



    <section class="w-full py-20 ">
        <h3 class="text-center text-2xl font-semibold text-gray-600 mb-14">
            Notable Faces. Nano Care.
        </h3>

        <div class="flex justify-center gap-10   flex-wrap ">
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img loading="lazy" decoding="async" loading="lazy" class="w-full" src="./assets/actor.png" alt="Aasif Kshathriya">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Aasif Kshathriya</div>
                    <p class="text-[#737373] text-base">
                        Indian Film Actor, Director & Writer </p>
                    <p class="text-[#737373] text-base mt-5">
                        Nano Hospital feels like home. Dr. Mohan, Anand, Mahima, and the emergency team provide
                        compassionate care with a healing touch. I vouch for Nano Hospitals. </p>
                </div>

            </div>
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img loading="lazy" decoding="async" loading="lazy" class="w-full" src="./assets/actor2.png" alt="Shwetha Srinivasa">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Shwetha Srinivasa</div>
                    <p class="text-[#737373] text-base">
                        Kannada Film Actor</p>
                    <p class="text-[#737373] text-base mt-5">
                        After my hand treatment with Dr. Mohan, I feel pain-free, confident, and truly cared for — forever
                        grateful.</p>
                </div>

            </div>
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img loading="lazy" decoding="async" loading="lazy" class="w-full" src="./assets/actor-3.png" alt="Aniish Tejeshwar">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Aniish Tejeshwar</div>
                    <p class="text-[#737373] text-base">
                        Kannada Film Actor </p>
                    <p class="text-[#737373] text-base mt-5">
                        Grateful to experience care that’s honest, attentive, and truly human — Nano Hospital stands out.
                    </p>
                </div>

            </div>
        </div>

    </section>



    <section class="w-full py-28 lg:mt-20 relative overflow-hidden">

        <!-- Dotted Background -->
        <div
            class="absolute inset-0
             bg-[#f5f5f5]
             bg-[radial-gradient(circle,_#bdbdbd_1px,_transparent_1px)]
             [background-size:22px_22px]">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-3xl font-semibold text-[#737373] mb-14">
                Awards & Recognition
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-16 justify-items-center">


                <div
                    class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Times Health Excellence</p>
                        <p class="text-red-500 font-medium">
                            Excellence in Tertiary Care Hospital
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Radio City Business Titans</p>
                        <p class="text-red-500 font-medium">
                            Best Healthcare Facility
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div>

                <!-- Card 3 -->
                {{-- <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Radio City Business Titans</p>
                        <p class="text-red-500 font-medium">
                            Best Healthcare Facility
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img loading="lazy" decoding="async" src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div> --}}

            </div>
        </div>
    </section>
    <section    id="stats-section" class="w-full py-28">
        <div class="container mx-auto px-6">

            <h2 class="text-center text-2xl md:text-3xl font-semibold text-[#737373] mb-12">
                Nano Hospitals at a Glance
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-400 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/stethescope.png" class="mx-auto h-12" alt="">

                        <div class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="12">12
                        </div>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Years</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">of Medical Experience</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-500 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/doctor.png" class="mx-auto h-12" alt="">

                        <div class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="150"
                            data-suffix="+">150</div>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Medical Specialists</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">Caring for You</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-500 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/knife (2).png" class="mx-auto h-12" alt="">

                        <p class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="30000"
                            data-suffix="+">30000</p>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Surgeries</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">Performed</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-500 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/smile.png" class="mx-auto h-12" alt="">

                        <p class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="800000"
                            data-suffix="+">800000</p>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Happy</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">Patients</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-500 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/speciality.webp" class="mx-auto h-12" alt="">

                        <p class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="30"
                            data-suffix="+">30</p>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Specialities</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">
                            Expert care across every Specialty
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden 
                            hover:bg-red-500 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">

                    <div
                        class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] 
                                [background-size:12px_12px] opacity-60 group-hover:opacity-20">
                    </div>

                    <div class="relative z-10 space-y-4">
                        <img loading="lazy" decoding="async" loading="lazy" src="./assets/icons/doctors.webp" class="mx-auto h-12" alt="">

                        <p class="counter text-4xl font-bold text-red-500 group-hover:text-white" data-target="150"
                            data-suffix="+">150</p>

                        <p class="text-red-500 text-xl font-medium group-hover:text-white">Doctors</p>
                        <p class="text-gray-400 text-xl group-hover:text-white">Here to Heal</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="w-full  py-24">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-14">
                Nano Hospitals Near You
            </h2>

            <!-- Cards Wrapper -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
                    <!-- Image -->
                    <div class="h-[320px] overflow-hidden">
                        <img loading="lazy" decoding="async" src="./assets/uttarahalli.webp" alt="Nano Hospital Uttarahalli"
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
                        <a href="/uttarahalli" class="inline-flex items-center gap-3 text-gray-500 font-medium group">
                            Visit Uttarahalli Location
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
                        <img loading="lazy" decoding="async" src="./assets/hulimavu.webp" alt="Nano Hospital Hulimavu"
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
                        <a href="{{ route('bg-road') }}" class="inline-flex items-center gap-3 text-gray-500 font-medium group">
                            Visit BG Road Location
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

   
    <section class="py-16 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4">
      
          <!-- Heading -->
          <div class="text-center mb-10">
            <span class="inline-flex items-center gap-2 bg-red-50 text-red-500 text-sm font-semibold px-4 py-2 rounded-full">
              <span class="w-2 h-2 rounded-full bg-red-500"></span>
              Trusted Network
            </span>
            <h2 class="text-4xl font-bold text-gray-900 mt-4">
              Cashless Insurance & TPA Partners
            </h2>
      
            <p class="mt-4 text-gray-600 text-lg max-w-3xl mx-auto">
              Nano Diagnostics provides cashless insurance facilities with multiple
              insurance and TPA providers across our branches.
            </p>
          </div>
      
          <!-- Tabs -->
          <div class="flex flex-wrap justify-center gap-4 mb-10" role="tablist" aria-label="Insurance partners by branch">
            <button
              type="button"
              id="uttarahalliTab"
              role="tab"
              aria-selected="true"
              aria-controls="uttarahalliContent"
              onclick="showInsuranceTab('uttarahalli')"
              class="insurance-tab active-tab px-7 py-3 rounded-xl font-semibold transition-all duration-300 shadow-sm hover:shadow-md bg-red-500 text-white"
            >
              Uttarahalli Branch
            </button>
      
            <button
              type="button"
              id="bgroadTab"
              role="tab"
              aria-selected="false"
              aria-controls="bgroadContent"
              onclick="showInsuranceTab('bgroad')"
              class="insurance-tab px-7 py-3 rounded-xl font-semibold transition-all duration-300 shadow-sm hover:shadow-md bg-white border border-gray-300 text-gray-700"
            >
              BG Road Branch
            </button>
          </div>
      
          <!-- Uttarahalli Content -->
          <div
            id="uttarahalliContent"
            role="tabpanel"
            aria-labelledby="uttarahalliTab"
            data-insurance-panel="uttarahalli"
            class="insurance-content bg-white rounded-2xl shadow-lg border border-gray-200 p-8"
          >
      
            <div class="flex items-center justify-between mb-8">
              <h3 class="text-2xl font-bold text-red-500">
                Uttarahalli Branch Insurance Partners
              </h3>
      
              <span data-partner-count class="bg-red-100 text-red-500 text-sm font-semibold px-4 py-2 rounded-full">
                25 Partners
              </span>
            </div>
      
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&_.insurance-card]:rounded-xl [&_.insurance-card]:border [&_.insurance-card]:border-gray-200 [&_.insurance-card]:bg-gray-50 [&_.insurance-card]:px-4 [&_.insurance-card]:py-3 [&_.insurance-card]:text-sm [&_.insurance-card]:font-semibold [&_.insurance-card]:text-gray-700 [&_.insurance-card]:shadow-sm [&_.insurance-card]:transition [&_.insurance-card]:duration-200 [&_.insurance-card]:hover:-translate-y-0.5 [&_.insurance-card]:hover:bg-red-50 [&_.insurance-card]:hover:border-red-200 [&_.insurance-card]:hover:text-red-500">
      
              <div class="insurance-card">HERITAGE INSURANCE</div>
              <div class="insurance-card">UNIVERSAL SOMPO INSURANCE</div>
              <div class="insurance-card">NEW INDIA INSURANCE</div>
              <div class="insurance-card">NATIONAL INSURANCE</div>
              <div class="insurance-card">FHPL INSURANCE</div>
              <div class="insurance-card">GHPL INSURANCE</div>
              <div class="insurance-card">HEALTH INSURANCE TPA</div>
              <div class="insurance-card">HITPA INSURANCE</div>
              <div class="insurance-card">MD INDIA INSURANCE</div>
              <div class="insurance-card">MEDIASSIST TPA</div>
              <div class="insurance-card">MEDSAVE INSURANCE</div>
              <div class="insurance-card">PARAMOUNT INSURANCE</div>
              <div class="insurance-card">RAKSHA TPA INSURANCE</div>
              <div class="insurance-card">SAFEWAY TPA INSURANCE</div>
              <div class="insurance-card">VIDAL INSURANCE</div>
              <div class="insurance-card">VIPUL INSURANCE</div>
              <div class="insurance-card">HDFC ERGO INSURANCE</div>
              <div class="insurance-card">ACKO INSURANCE</div>
              <div class="insurance-card">BAJAJ INSURANCE</div>
              <div class="insurance-card">GO DIGI INSURANCE</div>
              <div class="insurance-card">AKNA INSURANCE</div>
              <div class="insurance-card">VOLO INSURANCE</div>
              <div class="insurance-card">ADITHYA BIRLA</div>
              <div class="insurance-card">RELIANCE GENERAL INSURANCE</div>
              <div class="insurance-card">ICICI LOMBARD</div>
      
            </div>
          </div>
      
          <!-- BG Road Content -->
          <div
            id="bgroadContent"
            role="tabpanel"
            aria-labelledby="bgroadTab"
            data-insurance-panel="bgroad"
            hidden
            class="insurance-content bg-white rounded-2xl shadow-lg border border-gray-200 p-8"
          >
      
            <div class="flex items-center justify-between mb-8">
              <h3 class="text-2xl font-bold text-red-500">
                BG Road Branch Insurance Partners
              </h3>
      
              <span data-partner-count class="bg-red-100 text-red-500 text-sm font-semibold px-4 py-2 rounded-full">
                26 Partners
              </span>
            </div>
      
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&_.insurance-card]:rounded-xl [&_.insurance-card]:border [&_.insurance-card]:border-gray-200 [&_.insurance-card]:bg-gray-50 [&_.insurance-card]:px-4 [&_.insurance-card]:py-3 [&_.insurance-card]:text-sm [&_.insurance-card]:font-semibold [&_.insurance-card]:text-gray-700 [&_.insurance-card]:shadow-sm [&_.insurance-card]:transition [&_.insurance-card]:duration-200 [&_.insurance-card]:hover:-translate-y-0.5 [&_.insurance-card]:hover:bg-red-50 [&_.insurance-card]:hover:border-red-200 [&_.insurance-card]:hover:text-red-500">
      
              <div class="insurance-card">STAR INSURANCE</div>
              <div class="insurance-card">HERITAGE INSURANCE</div>
              <div class="insurance-card">HAPPY INSURANCE</div>
              <div class="insurance-card">UNIVERSAL SOMPO INSURANCE</div>
              <div class="insurance-card">MEDICARE HEALTH TPA INSURANCE</div>
              <div class="insurance-card">UIIC INSURANCE</div>
              <div class="insurance-card">NEW INDIA INSURANCE</div>
              <div class="insurance-card">NATIONAL INDIA INSURANCE</div>
              <div class="insurance-card">ORIENTAL INSURANCE</div>
              <div class="insurance-card">EMEDITEK INSURANCE</div>
              <div class="insurance-card">FHPL INSURANCE</div>
              <div class="insurance-card">GHPL INSURANCE</div>
              <div class="insurance-card">HEALTH INSURANCE TPA INSURANCE</div>
              <div class="insurance-card">HITPA INSURANCE</div>
              <div class="insurance-card">MD INDIA INSURANCE</div>
              <div class="insurance-card">MEDIASSIST INSURANCE</div>
              <div class="insurance-card">MEDSAVE INSURANCE</div>
              <div class="insurance-card">PARAMOUNT INSURANCE</div>
              <div class="insurance-card">RAKSHA TPA INSURANCE</div>
              <div class="insurance-card">SAFEWAY TPA INSURANCE</div>
              <div class="insurance-card">VIDAL HEALTH INSURANCE</div>
              <div class="insurance-card">VIPUL MEDCORP INSURANCE</div>
              <div class="insurance-card">ICICI LOMBARD INSURANCE</div>
              <div class="insurance-card">HDFC ERGO INSURANCE</div>
              <div class="insurance-card">NIVABUPA INSURANCE</div>
              <div class="insurance-card">MAXBUPA INSURANCE</div>
      
            </div>
          </div>
      
        </div>
      </section>
    <!-- Instagram Video Modal -->
    <!-- Video Modal -->
    <!-- Video Modal -->
    <div id="instaVideoModal" class="fixed inset-0 hidden z-50 bg-black/70 flex items-center justify-center">

        <div class="relative bg-white rounded-xl max-w-md w-[90%] p-2">
            <button id="instaCloseBtn" class="absolute -top-3 -right-3 bg-black text-white w-8 h-8 rounded-full">
                ✕
            </button>
            <div id="instaEmbed"></div>
        </div>
    </div>



    <div id="videoModal" class="fixed inset-0 hidden z-50 bg-black/70 flex items-center justify-center">

        <div class="relative bg-white rounded-xl max-w-3xl w-[90%] p-2">
            <button id="closeModal" class="absolute -top-3 -right-3 bg-black text-white w-8 h-8 rounded-full">
                ✕
            </button>

            <iframe id="youtubePlayer" width="100%" height="450" frameborder="0"
                allow="autoplay; encrypted-media; fullscreen" allowfullscreen
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>
    </div>


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
    
                <a id="shareLinkedin" target="_blank" class="flex flex-col items-center text-red-500 hover:scale-110 transition">
                    <i class="fab fa-linkedin text-3xl text-red-500"></i>
                    <span class="text-xs mt-1">LinkedIn</span>
                </a>
    
                <a id="shareX" target="_blank" class="flex flex-col items-center text-black hover:scale-110 transition">
                    <i class="fab fa-x-twitter text-3xl text-black"></i>
                    <span class="text-xs mt-1">X</span>
                </a>
    
            </div>
        </div>
    </div>
    
    
    <style>
        .insurance-content[hidden] {
            display: none !important;
        }
    </style>
    <script>
        function showInsuranceTab(branch) {
            const panels = {
                uttarahalli: document.getElementById("uttarahalliContent"),
                bgroad: document.getElementById("bgroadContent"),
            };
            const tabs = {
                uttarahalli: document.getElementById("uttarahalliTab"),
                bgroad: document.getElementById("bgroadTab"),
            };

            if (!panels.uttarahalli || !panels.bgroad || !tabs.uttarahalli || !tabs.bgroad) return;

            const activeTabClasses = ["bg-red-500", "text-white"];
            const inactiveTabClasses = ["bg-white", "border", "border-gray-300", "text-gray-700"];
            const activeBranch = branch === "bgroad" ? "bgroad" : "uttarahalli";

            Object.keys(panels).forEach((key) => {
                const isActive = key === activeBranch;
                const panel = panels[key];
                const tab = tabs[key];

                // Native hidden attribute uses display:none !important in the stylesheet
                panel.hidden = !isActive;
                panel.setAttribute("aria-hidden", String(!isActive));

                tab.setAttribute("aria-selected", String(isActive));
                tab.classList.toggle("active-tab", isActive);

                if (isActive) {
                    tab.classList.remove(...inactiveTabClasses);
                    tab.classList.add(...activeTabClasses);
                } else {
                    tab.classList.remove(...activeTabClasses);
                    tab.classList.add(...inactiveTabClasses);
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("[data-insurance-panel]").forEach((panel) => {
                const count = panel.querySelectorAll(".insurance-card").length;
                const badge = panel.querySelector("[data-partner-count]");
                if (badge) {
                    badge.textContent = count + " Partner" + (count === 1 ? "" : "s");
                }
            });

            showInsuranceTab("uttarahalli");
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        
            const modal = document.getElementById("shareModal");
            const closeBtn = document.getElementById("closeShareModal");
        
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
    

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const ytModal = document.getElementById('videoModal');
            const ytPlayer = document.getElementById('youtubePlayer');
            const ytClose = document.getElementById('closeModal');

            const instaModal = document.getElementById('instaVideoModal');
            const instaEmbed = document.getElementById('instaEmbed');
            const instaClose = document.getElementById('instaCloseBtn');

            document.querySelectorAll('.video-card').forEach(card => {
                card.addEventListener('click', () => {

                    /* ---------- YOUTUBE ---------- */
                    if (card.dataset.videoId) {
                        const videoId = card.dataset.videoId;

                        ytPlayer.src =
                            `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;


                        ytModal.classList.remove('hidden');
                        return;
                    }

                    /* ---------- INSTAGRAM ---------- */
                    if (card.dataset.instagramUrl) {
                        const url = card.dataset.instagramUrl;

                        // Extract reel ID safely
                        const match = url.match(/reel\/([^/?]+)/);
                        if (!match) return;

                        const reelId = match[1];

                        instaEmbed.innerHTML = `
                    <iframe
                        src="https://www.instagram.com/reel/${reelId}/embed"
                        width="100%"
                        height="500"
                        frameborder="0"
                        scrolling="no"
                        allowfullscreen>
                    </iframe>
                `;

                        instaModal.classList.remove('hidden');
                    }
                });
            });

            /* ---------- CLOSE YOUTUBE ---------- */
            ytClose.addEventListener('click', closeYT);
            ytModal.addEventListener('click', e => {
                if (e.target === ytModal) closeYT();
            });

            function closeYT() {
                ytModal.classList.add('hidden');
                ytPlayer.src = ''; // stop video
            }

            /* ---------- CLOSE INSTAGRAM ---------- */
            instaClose.addEventListener('click', closeInsta);
            instaModal.addEventListener('click', e => {
                if (e.target === instaModal) closeInsta();
            });

            function closeInsta() {
                instaModal.classList.add('hidden');
                instaEmbed.innerHTML = ''; // reset iframe
            }

        });
    </script>

    <script>
        const features = [{
                title: "World Class Infrastructure",
                image: "./assets/banners/uttarahalli-circle.webp"
            },
            {
                title: "Care Across Branches",
                image: "./assets/hulimavu (1).webp"
            },
            {
                title: "Latest high-end Facilities",
                image: "./assets/banners/high-end.webp"
            },
            {
                title: "Patient-First Care Team",
                image: "./assets/banners/patient-first.webp"
            },
            {
                title: "Trusted Quality Care",
                image: "./assets/banners/trusted-quality-care.webp"
            }
        ];

        function changeFeature(index) {
            const centerImage = document.getElementById('centerImage');
            const orbs = document.querySelectorAll('.orb');

            // Fade out
            centerImage.style.opacity = '0';

            setTimeout(() => {
                centerImage.src = features[index].image;
                centerImage.alt = features[index].title;
                centerImage.style.opacity = '1';
            }, 250);

            // Update orbs
            orbs.forEach((orb, i) => {
                if (i === index) {
                    orb.classList.remove('bg-white', 'border-gray-300', 'w-10', 'h-10');
                    orb.classList.add('bg-red-500', 'border-red-500', 'w-10', 'h-10');
                } else {
                    orb.classList.remove('bg-red-500', 'border-red-500', 'w-10', 'h-10');
                    orb.classList.add('bg-white', 'border-gray-300', 'w-10', 'h-10');
                }
            });
        }
    </script>

    <script>
        const tabs = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                const target = tab.dataset.target;

                // reset tabs
                tabs.forEach(t => {
                    t.classList.remove("text-red-500", "font-medium");
                    t.classList.add("text-gray-500");
                    const underline = t.querySelector("span");
                    if (underline) underline.remove();
                });

                // hide contents
                contents.forEach(c => c.classList.add("hidden"));

                // activate tab
                tab.classList.remove("text-gray-500");
                tab.classList.add("text-red-500", "font-medium");

                const underline = document.createElement("span");
                underline.className =
                    "absolute left-0 -bottom-[1px] w-full h-[2px] bg-red-500 rounded-full";
                tab.appendChild(underline);

                // show content
                document.getElementById(target).classList.remove("hidden");
            });
        });
    </script>

    <script>
        function toggleAccordion(index) {
            const contents = document.querySelectorAll('[id^="content-"]');
            const icons = document.querySelectorAll('[id^="icon-"]');

            contents.forEach((el, i) => {
                if (i === index) {
                    el.classList.toggle('hidden');
                    icons[i].textContent = el.classList.contains('hidden') ? '˅' : '˄';
                } else {
                    el.classList.add('hidden');
                    icons[i].textContent = '˅';
                }
            });
        }
    </script>


    <script>
        const counters = document.querySelectorAll(".counter");
        const section = document.getElementById("stats-section");
        let hasAnimated = false;

        const startCounters = () => {
            if (hasAnimated) return;
            hasAnimated = true;

            counters.forEach(counter => {
                const target = +counter.dataset.target;
                const suffix = counter.dataset.suffix || "";
                let current = 0;

                const duration = 1500; // animation time in ms
                const increment = target / (duration / 16);

                const updateCounter = () => {
                    current += increment;

                    if (current >= target) {
                        counter.innerText = target + suffix;
                    } else {
                        counter.innerText = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    }
                };

                updateCounter();
            });
        };

        const observer = new IntersectionObserver(
            entries => {
                if (entries[0].isIntersecting) {
                    startCounters();
                    observer.disconnect();
                }
            }, {
                threshold: 0.4
            }
        );

        observer.observe(section);
    </script>


   


@endsection
