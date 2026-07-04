@extends('layouts.app')

@section('title', 'Why Nano Hospitals | Trusted Multispeciality Care in Bangalore')
@section('meta_description', 'Discover why patients choose Nano Hospitals in Bangalore — expert doctors, advanced facilities, patient-first care, and multispeciality treatment at BG Road and Uttarahalli.')

@push('styles')


@endpush

@section('content')
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <img src="./assets/banners/why-nano-banner.png" class="w-full" alt="Why Nano Hospitals — trusted multispeciality healthcare in Bangalore">

 <section class="w-full bg-gray-100 py-20">
    <div class="container mx-auto px-6">

      <h1 class="sr-only">Why Choose Nano Hospitals</h1>

      <!-- Heading -->
      <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-6">
        Leading Healthcare Experts
      </h2>

      <!-- Description -->
      <p
        class="max-w-4xl mx-auto text-center text-gray-500 leading-relaxed
             text-sm md:text-base">
        At <span class="text-red-500 font-medium">Nano Hospitals</span>, we work with top clinicians
        who are leaders in their specialties. Our doctor-led model ensures high clinical autonomy,
        enabling experts to focus on delivering advanced, patient-first care. With a strong culture
        of teamwork and multispecialty collaboration, we provide seamless, high-quality treatment,
        especially for complex cases. Experience trusted, integrated clinical excellence at
        Nano Hospitals.
      </p>
      <section class="w-full  py-20">
        <div class="container mx-auto px-6">

          <div class="relative">

            <!-- Swiper -->
            <div class="swiper healthcareSwiper">
              <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="relative rounded-3xl overflow-hidden">
                    <img src="./assets/slider.png" alt="Patient Success Story" class="w-full h-[320px]  object-cover" />

                    <div class="absolute "></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                      <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                        ▶
                      </div>
                    </div>

                    <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                      Patient Success Story<br />Deepak Kumar
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="relative rounded-3xl overflow-hidden">
                    <img src="./assets/slider2.png" alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                    <div class="absolute"></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                      <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                        ▶
                      </div>
                    </div>

                    <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                      From Risk to Recovery: A Surgical Miracle<br />Nano Hospitals
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="relative rounded-3xl overflow-hidden">
                    <img src="./assets/slider3.png" alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                    <div class="absolute "></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                      <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                        ▶
                      </div>
                    </div>

                    <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                      Patient Success Story<br />Preeti Jadhav
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="relative rounded-3xl overflow-hidden">
                    <img src="./assets/slider4.png" alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                    <div class="absolute "></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                      <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                        ▶
                      </div>
                    </div>

                    <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                      Patient Success Story<br />Preeti Jadhav
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="relative rounded-3xl overflow-hidden">
                    <img src="./assets/slider5.png" alt="Patient Success Story" class="w-full h-[320px]  object-cover" />
                    <div class="absolute "></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                      <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                        ▶
                      </div>
                    </div>

                    <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                      Patient Success Story<br />Preeti Jadhav
                    </div>
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

    </div>


  </section>


    <section class="w-full bg-[#e9e9e9] py-20">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-4">
        Latest High-end Facilities
      </h2>

      <!-- Description -->
      <p class="max-w-4xl mx-auto text-center text-gray-500 text-sm md:text-base leading-relaxed mb-14">
        Nano Hospitals, Hulimavu and Uttarahalli, are equipped with
        <span class="text-red-500 font-medium">
          advanced OTs, ICUs, NICUs, and imaging systems
        </span>,
        supported by modern facilities and technology. Strict infection-control
        protocols and dedicated AHUs ensure a safe, precise, and comfortable
        environment for doctors and patients alike.
      </p>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Card 1 -->
        <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

          <!-- Image (top only rounded) -->
          <img
            src="./assets/slider.png"
            alt="CT & MRI Scans"
            class="w-full h-[220px] object-cover block rounded-t-3xl" />

          <!-- Bottom content -->
          <div class="py-6">
            <p class="text-gray-600 font-semibold text-lg">
              CT & MRI Scans
            </p>
          </div>

        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

          <!-- Image (top only rounded) -->
          <img
            src="./assets/slider.png"
            alt="CT & MRI Scans"
            class="w-full h-[220px] object-cover block rounded-t-3xl" />

          <!-- Bottom content -->
          <div class="py-6">
            <p class="text-gray-600 font-semibold text-lg">
              CT & MRI Scans
            </p>
          </div>

        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

          <!-- Image (top only rounded) -->
          <img
            src="./assets/slider.png"
            alt="CT & MRI Scans"
            class="w-full h-[220px] object-cover block rounded-t-3xl" />

          <!-- Bottom content -->
          <div class="py-6">
            <p class="text-gray-600 font-semibold text-lg">
              CT & MRI Scans
            </p>
          </div>

        </div>

      </div>


    </div>
  </section>

  <section class="w-full bg-[#f4f4f4] py-20">
    <div class="container mx-auto px-6">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        <!-- LEFT CONTENT -->
        <div class="max-w-xl space-y-6">

          <h2 class="text-2xl md:text-3xl font-semibold text-gray-600 text-center">
            Patient-First Care Team
          </h2>

          <p class="text-gray-500 leading-relaxed text-sm md:text-base">
            Nano Hospitals is committed to
            <span class="text-red-500 font-medium">
              providing compassionate, high-quality care
            </span>
            at our Hulimavu and Uttarahalli centres. With top-notch standards
            across all specialties, we ensure every patient experiences
            exceptional hospitality, feels safe, supported, and truly cared
            for, with the doctor-patient relationship at the heart of
            everything we do.
          </p>

        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative rounded-xl">

          <div class="rounded-3xl overflow-hidden ">
            <img
              src="./assets/patient-care.webp"
              alt="Patient First Care"
              class="w-full h-[360px] object-cover block " />
          </div>

        </div>



      </div>
    </div>
  </section>
 <section class="w-full bg-[#f4f4f4] py-20">
    <div class="container mx-auto px-6">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        <!-- LEFT CONTENT -->


        <!-- RIGHT IMAGE -->
        <div class="relative rounded-3xl">

          <div class="rounded-3xl overflow-hidden ">
            <img
              src="./assets/trusted-quality-care.webp"
              alt="Patient First Care"
              class="w-full h-[360px] object-cover block  " />
          </div>

        </div>

        <div class="max-w-xl space-y-6">

          <h2 class="text-2xl md:text-3xl font-semibold text-gray-600 text-center">
            Trusted Quality Care
          </h2>

          <p class="text-gray-500 leading-relaxed text-sm md:text-base">
            Nano Hospitals is committed to
            <span class="text-red-500 font-medium">
              providing compassionate, high-quality care
            </span>
            at our Hulimavu and Uttarahalli centres. With top-notch standards
            across all specialties, we ensure every patient experiences
            exceptional hospitality, feels safe, supported, and truly cared
            for, with the doctor-patient relationship at the heart of
            everything we do.
          </p>

        </div>

      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    new Swiper(".healthcareSwiper", {
      slidesPerView: 1.2,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
      },
      slidesPerView: "auto",
      loop: true,
      coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 200,
        modifier: 1,
        slideShadows: true,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        768: {
          slidesPerView: 2.2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

@endsection