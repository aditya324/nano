    <style>
        .color {
            background-color: #727272
        }
    </style>


    <footer class="color text-white pt-12 pb-8 ">
        <div class="container mx-auto px-6">

            <!-- Top Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

                <!-- Column 1 -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Procedures</h3>
                    <ul class="space-y-2 text-sm text-gray-200">
                        <li><a href="{{ route('procedures.show', 'cath-lab') }}" class="hover:text-white">Cath Lab</a></li>
                        <li><a href="{{ route('procedures.show', 'cesarean-section') }}" class="hover:text-white">Cesarean Section</a></li>
                        <li><a href="{{ route('procedures.show', 'appendectomy') }}" class="hover:text-white">Appendectomy</a></li>
                        <li><a href="{{ route('procedures.show', 'knee-replacement-surgery') }}" class="hover:text-white">Knee Replacement</a></li>
                        <li><a href="{{ route('procedures.show', 'hip-replacement-surgery') }}" class="hover:text-white">Hip Replacement</a></li>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Specialities</h3>
                    <ul class="space-y-2 text-sm text-gray-200">
                        <li><a href="{{ route('specialities.show', 'bone-joint-care') }}" class="hover:text-white">Bone & Joint Care</a></li>
                        <li><a href="{{ route('specialities.show', 'child-care-paediatrics') }}" class="hover:text-white">Child Care</a></li>
                       
                        <li><a href="{{ route('specialities.show', 'lung-care') }}" class="hover:text-white">Lung Care</a></li>
                        <li><a href="{{ route('specialities.show', 'nephrology') }}" class="hover:text-white">Kidney Care</a></li>
                        <li><a href="{{ route('specialities.show', 'urology') }}" class="hover:text-white">Urology Care</a></li>
                     
                    </ul>
                </div>

                <!-- Column 3 (Accreditations) -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Medical accreditations</h3>
                    <div class="flex items-center gap-6">
                         <img loading="lazy" decoding="async" src="{{ asset('assets/logo/nabh.png') }}" alt="NABH Accredited"
                            class="h-24 object-contain">
                         <img loading="lazy" decoding="async" src="{{ asset('assets/logo/nabl.png') }}" alt="NABL Certified" class="h-24 object-contain">
                    </div>
                </div>

                <!-- Column 4 -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Corporate</h3>
                    <ul class="space-y-2 text-sm text-gray-200">
                        <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                        <li><a href="{{ route('news') }}" class="hover:text-white">News & Media Relations</a></li>
                        <li><a href="{{ route('careers') }}" class="hover:text-white">Careers</a></li>
                        <li><a href="{{ route('second.opinion') }}" class="hover:text-white">Second Opinion</a></li>
                    </ul>
                </div>

            </div>

            <!-- Social Row -->
            <div class="mt-6">
                <p class="text-sm font-medium mb-3">Follow us on</p>
                <div class="flex gap-3">
                    <a href="https://www.instagram.com/nanohospitals/?hl=en" target="_blank"
                        class="w-8 h-8 flex items-center justify-center rounded-full   hover:bg-red-500 hover:text-white transition">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://www.facebook.com/nanohospitalss/" target="_blank"
                        class="w-8 h-8 flex items-center justify-center rounded-full  hover:bg-red-500 hover:bg-orange-400 hover:text-white transition">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="https://x.com/hospitalsnano/status/1459732571391152133" target="_blank"
                        class="w-8 h-8 flex items-center justify-center rounded-full  hover:bg-red-500 hover:bg-orange-400 hover:text-white transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/@nanohospitals" target="_blank"
                        class="w-8 h-8 flex items-center justify-center rounded-full  hover:bg-red-500 hover:bg-orange-400 hover:text-white transition">
                        <i class="fab fa-youtube text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/nanohospitals/?originalSubdomain=in" target="_blank"
                        class="w-8 h-8 flex items-center justify-center rounded-full  hover:bg-red-500 hover:bg-orange-400 hover:text-white transition">
                        <i class="fa-brands fa-linkedin-in text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Made with love -->
            <p class="mt-8 pt-6  border-gray-600 text-center text-sm text-gray-300">
                Made with <span class="text-red-400">♥</span> by <a href="https://sunrisedigital.co.in/" class="font-medium text-white">Sunrise Digital Media</a>
            </p>
        </div>
    </footer>
</body>

</html>
