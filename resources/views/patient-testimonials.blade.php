@extends('layouts.app')

@section('title', 'Patient Testimonials at Nano Hospitals')
@section('meta_description', 'Patient testimonials at Nano Hospitals. We are proud to share the stories of our patients who have received exceptional care from our hospitals.')
@section('meta_keywords', 'patient testimonials, Nano Hospitals, patient stories, patient experiences')

@push('styles')
@endpush

@section('content')


    <section class="relative w-full bg-white overflow-hidden py-20">
        <!-- Decorative Background Image -->
        <img src="./assets/banners/envato-labs-image-edit (27) 5.png" alt=""
            class="absolute right-0 top-1/2 -translate-y-1/2
           w-[500px] lg:w-[900px] xl:w-[1300px]
           opacity-80 pointer-events-none select-none" />

        <div class="relative container mx-auto px-6 xl:px-12">
            <!-- Section Heading -->
            <h1 class="text-[22px] md:text-[26px] font-semibold text-[#FA424A] mb-14 text-center underline">
                Patient Testimonials
            </h1>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-24">

                <!-- OUR MISSION -->
                <div class="relative">
                    <!-- Icon -->
                    <div class="flex  justify-between">
                        <h3 class="text-lg font-semibold text-[#FA424A] mb-4">
                            Our Mission
                        </h3>
                        <img src="./assets/icons/target.png" alt="Vision" class="w-20 h-20 mr-20" />
                    </div>

                    <!-- List -->
                    <ul class="space-y-3 text-base font-semibold text-gray-600 leading-relaxed list-disc pl-5">
                        <li>
                            To continuously endeavor to work together to ensure the delivery of
                            exceptional quality, safe compassionate and affordable healthcare.
                        </li>
                        <li>
                            To strive hard to provide par-excellence patient experience.
                        </li>
                        <li>
                            To create opportunities to find innovative, sustainable and
                            self-serving healthcare.
                        </li>
                        <li>
                            To adapt the technological advances in healthcare delivery.
                        </li>
                    </ul>
                </div>

                <!-- OUR VISION -->
                <div class="relative">
                    <!-- Vertical Divider -->
                    <span class="hidden lg:block absolute -left-12 top-2 h-[85%] w-px bg-[#FA424A]/40">
                    </span>

                    <!-- Icon -->
                    <div class="mb-5">

                    </div>

                    <!-- Heading -->
                    <div class="flex  justify-between">
                        <h3 class="text-[16px] font-semibold text-[#FA424A] mb-4">
                            Our Vision
                        </h3>
                        <img src="./assets/icons/eye.png" alt="Vision" class="w-20 h-20 mr-20" />
                    </div>
                    <!-- List -->
                    <ul class="space-y-3 text-base font-semibold text-gray-600 leading-relaxed list-disc pl-5">
                        <li>
                            To be a preferred and class leader in our facilities, services,
                            patient experience, expert insights.
                        </li>
                        <li>
                            To introduce innovative and cutting-edge advanced technologies
                            and services in varying medical sub-specialties.
                        </li>
                        <li>
                            To initiate a cultural shift in the way healthcare is delivered —
                            moving from standard reactive approach to proactive, personalized
                            and targeted care.
                        </li>
                    </ul>
                </div>

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

                        <img src="./assets/testimonials/testimonail.webp" alt="Testimonial"
                            class="w-full h-44 object-cover transition duration-300 group-hover:scale-105" />

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

                        <img src="./assets/testimonials/Frame.webp" 
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

                        <img src="./assets/testimonials/Frame (15).webp" 
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

                    <img src="./assets/testimonials/Frame (14).webp" alt="Patient Story"
                        class="w-full h-[450px] object-cover transition duration-300 group-hover:scale-105" />

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

                        <img src="./assets/testimonials/Frame (16).webp"
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

                        <img src="./assets/testimonials/Frame (18).webp"
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

                <!-- RIGHT MOST -->
                <div>
                    <div class="video-card relative rounded-2xl overflow-hidden cursor-pointer group"
                        data-instagram-url="https://www.instagram.com/reel/DLmn0CySkY2/">

                        <img src="./assets/testimonials/Frame (19).webp"
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




    <section class="w-full py-20 bg-white">
        <h3 class="text-center text-2xl font-semibold text-gray-600 mb-14">
            Notable Faces. Nano Care.
        </h3>

        <div class="flex justify-center gap-10   flex-wrap ">
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img class="w-full" src="./assets/actor.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Aasif Kshathriya</div>
                    <p class="text-gray-700 text-base">
                        Indian Film Actor, Director & Writer </p>
                    <p class="text-gray-700 text-base mt-5">
                        Nano Hospital feels like home. Dr. Mohan, Anand, Mahima, and the emergency team provide
                        compassionate care with a healing touch. I vouch for Nano Hospitals. </p>
                </div>

            </div>
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img class="w-full" src="./assets/actor2.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Shwetha Srinivasa</div>
                    <p class="text-gray-700 text-base">
                        Kannada Film Actor</p>
                    <p class="text-gray-700 text-base mt-5">
                        After my hand treatment with Dr. Mohan, I feel pain-free, confident, and truly cared for — forever
                        grateful.</p>
                </div>

            </div>
            <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
                <img class="w-full" src="./assets/actor-3.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-[#FA424A]">Aniish Tejeshwar</div>
                    <p class="text-gray-700 text-base">
                        Kannada Film Actor </p>
                    <p class="text-gray-700 text-base mt-5">
                        Grateful to experience care that’s honest, attentive, and truly human — Nano Hospital stands out.
                    </p>
                </div>

            </div>
        </div>

    </section>

    {{-- <section class="w-full py-20 bg-[#f9f9f9]">
        <div class="container mx-auto px-4">

     
            <h2 class="text-center text-2xl font-semibold text-gray-700 mb-14">
                International Patient Stories
            </h2>

    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

           
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#FA424A] mb-2">
                                video
                            </h3>
                            <p class="text-lg font-semibold text-gray-500 leading-relaxed">
                                Successfully operated on 98 year old Heart Bypass Patient - Dr Mohan | Nano Hospitals </p>
                        </div>

                        <div class="flex items-center gap-5">
                            <i class="fa-solid fa-location-dot text-red-700"></i>
                            <p class="text-[#FA424A] text-lg font-semibold">Uttarahalli</p>
                        </div>

                    </div>
                </div>


                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#FA424A] mb-2">
                                video
                            </h3>
                            <p class="text-lg font-semibold text-gray-500 leading-relaxed">
                                Successfully operated on 98 year old Heart Bypass Patient - Dr Mohan | Nano Hospitals </p>
                        </div>

                        <div class="flex items-center gap-5">
                            <i class="fa-solid fa-location-dot text-red-700"></i>
                            <p class="text-[#FA424A] text-lg font-semibold">Uttarahalli</p>
                        </div>

                    </div>
                </div>

         
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#FA424A] mb-2">
                                video
                            </h3>
                            <p class="text-lg font-semibold text-gray-500 leading-relaxed">
                                Successfully operated on 98 year old Heart Bypass Patient - Dr Mohan | Nano Hospitals </p>
                        </div>

                        <div class="flex items-center gap-5">
                            <i class="fa-solid fa-location-dot text-red-700"></i>
                            <p class="text-[#FA424A] text-lg font-semibold">Uttarahalli</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="w-full py-20 relative overflow-hidden">

        <!-- Dotted Background -->
        <div
            class="absolute inset-0
             bg-[#f5f5f5]
             bg-[radial-gradient(circle,_#bdbdbd_1px,_transparent_1px)]
             [background-size:22px_22px]">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-3xl font-semibold text-gray-700 mb-14">
                Employees Speak: Inside Life at Nano Hospitals
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 justify-items-center">

                <!-- Card 1 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img src="./assets/suhas-gowda.webp" alt="Basic Health Package" class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Administrative Staff
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals gives me structure, support, and purpose. It’s a workplace where people are
                            valued and quality care comes first
                        </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img src="./assets/arpita-barne.webp" alt="Basic Health Package" class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Dr Arpita Bharne
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals empowers me to focus on patient care with confidence and compassion </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img src="./assets/jhanvi.webp" alt="Basic Health Package" class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Ms Janhavi H S
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals supports nurses with teamwork, training, and respect </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

            </div>
        </div>
    </section>

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
                allow="autoplay; encrypted-media; fullscreen" allowfullscreen referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>
    </div>






    <script async src="https://www.instagram.com/embed.js"></script>
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




@endsection
