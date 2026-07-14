@extends('layouts.app')

@section('title', 'News and Media at Nano Hospitals')
@section('meta_description', 'News and media at Nano Hospitals. We are committed to providing the latest news and media coverage about our hospitals and services.')
@section('meta_keywords', 'news, media, Nano Hospitals, news and media, media coverage')

@push('styles')
@endpush

@section('content')


    {{-- Banner: click opens social media modal --}}
    <button type="button" id="newsBannerBtn" class="w-full block cursor-pointer border-0 p-0 bg-transparent" aria-label="Follow us on social media">
        <img src="{{ asset('assets/banners/news-media-banner.webp') }}" class="w-full" alt="News & Media - Follow us on social media">
    </button>

    {{-- Social Media Modal (same links & icons as footer) --}}
    <div id="socialMediaModal" class="fixed inset-0 z-[60] hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl max-w-sm w-full p-8 relative">
            <button type="button" id="closeSocialModal" class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center rounded-full text-gray-500 hover:bg-gray-100 hover:text-red-500 transition" aria-label="Close">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Follow us on</h3>
            <p class="text-sm text-gray-500 mb-6">Stay connected with Nano Hospitals</p>
            <div class="flex flex-nowrap gap-3 justify-center overflow-x-auto">
                <a href="https://www.instagram.com/nanohospitalsofficial?igsh=MTdlb2VkYmptaHl2" target="_blank" rel="noopener"
                   class="w-14 h-14 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.facebook.com/nanohospitalss/" target="_blank" rel="noopener"
                   class="w-14 h-14 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="https://x.com/hospitalsnano/status/1459732571391152133" target="_blank" rel="noopener"
                   class="w-14 h-14 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition">
                    <i class="fa-brands fa-x-twitter text-xl"></i>
                </a>
                <a href="https://www.youtube.com/@nanohospitals" target="_blank" rel="noopener"
                   class="w-14 h-14 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/company/nanohospitals/?originalSubdomain=in" target="_blank" rel="noopener"
                   class="w-14 h-14 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition">
                    <i class="fa-brands fa-linkedin-in text-xl"></i>
                </a>
            </div>
        </div>
    </div>
    <section class="w-full py-20 bg-[#f9f9f9]">
        <div class="container mx-auto px-4">

            <!-- Section Heading -->
            <h1 class="text-center text-2xl font-semibold text-[#737373] mb-14">
                Featured News & Media Articles
            </h1>

            <!-- MAIN GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/hpl.webp" alt="News" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                The Hospital Premier League (HPL) Season 3 brings...
                            </h3>

                        </div>


                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/sunil-shetty2.webp" alt="Nano Hospitals: Excellence in Tertiary Care, Recognized in Bangalore!" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                Nano Hospitals: Excellence in Tertiary Care, Recognized in Bangalore!
                            </h3>

                        </div>


                    </div>
                </div>
                {{-- <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/biopsy.webp" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                A biopsy is a medical test where a small sample..
                            </h3>

                        </div>


                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    {{-- <section class="w-full py-12 relative bg-white container mx-auto">

   
        <div class="swiper storySwiper px-16">
            <div class="swiper-wrapper">

      
                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 1.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 2.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 3.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 4.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 5.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

  
        <div class="swiper-button-prev !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

        <div class="swiper-button-next !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

    </section> --}}


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var bannerBtn = document.getElementById("newsBannerBtn");
            var modal = document.getElementById("socialMediaModal");
            var closeBtn = document.getElementById("closeSocialModal");
            if (bannerBtn && modal && closeBtn) {
                bannerBtn.addEventListener("click", function () {
                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                });
                closeBtn.addEventListener("click", function () {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                });
                modal.addEventListener("click", function (e) {
                    if (e.target === modal) {
                        modal.classList.add("hidden");
                        modal.classList.remove("flex");
                    }
                });
                document.addEventListener("keydown", function (e) {
                    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                        modal.classList.add("hidden");
                        modal.classList.remove("flex");
                    }
                });
            }
        });
    </script>
    <script>
        new Swiper(".storySwiper", {
            slidesPerView: "auto",
            spaceBetween: 24,
            loop: true,
            grabCursor: true,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });
    </script>

@endsection
