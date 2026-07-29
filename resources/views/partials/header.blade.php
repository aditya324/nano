    @php
        $navBranches = config('hospitals.nav', [
            ['key' => 'bg-road', 'label' => 'BG Road', 'route' => 'bg-road'],
            ['key' => 'uttarahalli', 'label' => 'Uttarahalli', 'route' => 'uttarahalli'],
        ]);
        $currentNavBranch = collect($navBranches)->firstWhere('route', Route::currentRouteName());
        $currentBranchLabel = $currentNavBranch['label'] ?? null;
    @endphp

    <nav class="fixed top-0 left-0 w-full ">

        <!-- ================= TOP GREY BAR ================= -->
        <div class="hidden min-[1200px]:block w-full bg-[#e2e2e2]">
            <div class="max-w-[1400px] mx-auto px-6">
                <div class="flex items-center justify-center h-10  text-sm text-gray-600">
                    <ul class="hidden md:flex items-center gap-6">


                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('second.opinion') }}">Second Opinion</a></li>
                        <li><a href="{{ route('international.patients') }}">International Patients</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('news') }}">News & Awards</a></li>
                        <li class="relative group">
                            <a href="javascript:void(0)" class="flex items-center gap-1">
                                Health Corner
                                <span class="text-xs">▾</span>
                            </a>

                            <!-- Desktop Dropdown -->
                            <ul
                                class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md
           shadow-lg opacity-0 invisible
           group-hover:opacity-100 group-hover:visible
           transition-all duration-200 z-[9999]">
                                <li>
                                    <a href="{{ route('blogs.index') }}" class="block px-4 py-2 hover:bg-gray-100">
                                        Blogs
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('testimonials') }}" class="block px-4 py-2 hover:bg-gray-100">
                                        Patient Testimonials
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('doctor.videos') }}" class="block px-4 py-2 hover:bg-gray-100">
                                        Doctor Videos
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- ================= WHITE MAIN BAR ================= -->
        <div class="w-full bg-white ">
            <div class="max-w-[1500px] mx-auto px-6">
                <div class="flex items-center justify-center gap-10 h-[78px]">

                    <!-- LOGO -->
                    <div class="flex items-center gap-4">
                        <a href="/">
                             <img loading="lazy" decoding="async" src="{{ asset('assets/logo/logo.png') }}" alt="Nano Hospitals"
                                class="h-14 w-auto object-contain" />
                        </a>

                        <div class="relative inline-block lg:ml-10">
                            <!-- Trigger Button -->
                            <button id="hospitalDropdownBtn" type="button"
                                aria-haspopup="listbox"
                                aria-expanded="false"
                                aria-label="Pick branch"
                                class="border border-red-400 text-red-500 px-3 py-1.5 rounded-full text-xs font-medium
           flex items-center gap-1 whitespace-nowrap">
                                <span id="hospitalDropdownLabel">{{ $currentBranchLabel ?? 'Pick Branch' }}</span>
                                <span class="text-[10px]">▾</span>
                            </button>

                            <!-- Dropdown Menu — same branch list as mobile "Pick Hospital" -->
                            <div id="hospitalDropdownMenu"
                                role="listbox"
                                class="absolute left-0 mt-2 w-48
           bg-white border border-gray-200 rounded-lg shadow-lg
           hidden z-[9999]">
                                @foreach ($navBranches as $branch)
                                    <a href="{{ route($branch['route']) }}"
                                        role="option"
                                        @if ($currentBranchLabel === $branch['label']) aria-selected="true" @endif
                                        class="block px-4 py-2 text-sm {{ $currentBranchLabel === $branch['label'] ? 'bg-red-50 text-red-500 font-semibold' : 'text-gray-700 hover:bg-red-50 hover:text-red-500' }}">
                                        <div class="flex items-center gap-3">
                                            <img loading="lazy" decoding="async"
                                                src="{{ asset('assets/icons/Vector (4).png') }}"
                                                alt="" class="w-3 h-3 shrink-0">
                                            <span>{{ $branch['label'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <!-- MAIN MENU -->
                    <ul
                        class="hidden min-[1277px]:flex items-center gap-8 text-sm font-medium text-gray-800 whitespace-nowrap">

                        <li class="special relative">
                            <a href="#" class="hover:text-red-500">
                                Doctors
                                <span>▾</span>
                            </a>

                            <div class="mega mega-doctors">

                                <!-- COLUMN 1 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('doctors.show', 'dr-mohan-m-r') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Mohan M R</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-belehallli-pavan') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Belehallli Pavan</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-keshava-murthy-d') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Keshava Murthy D</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-prashanth-s-gorur') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Prashanth S Gorur</a></li>


                                </ul>

                                <!-- COLUMN 2 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('doctors.show', 'dr-suhas-raj-s') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Suhas Raj S</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-manish-pai') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Manish Pai</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-muruli-krishna') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Muruli Krishna</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-aparna-parvatikar') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Aparna Parvatikar</a></li>


                                </ul>

                                <!-- COLUMN 3 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('doctors.show', 'dr-arun-kumar-a') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Arun Kumar A</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-raghavendra-d-rao') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Raghavendra D Rao</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-sushmitha-k') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Sushmitha K</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-viresh-murgodi') }}">
                                            <i class="fa-solid fa-user-doctor"></i>Dr Viresh Murgodi</a></li>


                                </ul>

                                <!-- COLUMN 4 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('doctors.show', 'dr-subhash') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Subhash
                                        </a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-greeshma-g') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Greeshma G</a></li>

                                    <li><a href="{{ route('doctors.show', 'dr-hanumesh-a') }}">
                                            <i class="fa-solid fa-user-doctor"></i> Dr Hanumesh A</a></li>





                                    <li>
                                        <a href="{{ route('doctors.index') }}" class="text-red-500 font-semibold"
                                            style=" color:red; ">
                                            View All
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>



                        <li class="special relative">
                            <a href="#" id="specialToggle" class="hover:text-red-500">
                                Specialities
                                <span>▾</span>
                            </a>

                            <div class="mega mega-specialities">

                                <!-- COLUMN 1 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('specialities.show', 'bone-joint-care') }}">
                                            <i class="fa-solid fa-bone"></i> Bone & Joint Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'child-care-paediatrics') }}">
                                            <i class="fa-solid fa-baby"></i> Child Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'women-care-obstetrics') }}">
                                            <i class="fa-solid fa-person-dress"></i> Women Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'general-medicine') }}">
                                            <i class="fa-solid fa-stethoscope"></i> General Medicine</a></li>
                                </ul>

                                <!-- COLUMN 2 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('specialities.show', 'heart-care') }}">
                                            <i class="fa-regular fa-heart"></i> Heart Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'brain-care') }}">
                                            <i class="fa-solid fa-brain"></i> Brain Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'lung-care') }}">
                                            <i class="fa-solid fa-lungs"></i> Lung Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'nephrology') }}">
                                            <i class="fa-solid fa-hospital"></i> Kidney Care</a></li>
                                </ul>

                                <!-- COLUMN 3 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('specialities.show', 'urology') }}">
                                            <i class="fa-solid fa-toilet"></i> Urology Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'gastroenterology') }}">
                                            <i class="fa-solid fa-syringe"></i> Digestive Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'diabetology-endocrinology') }}">
                                            <i class="fa-solid fa-vial-circle-check"></i> Diabetes & Hormone Care</a>
                                    </li>

                                    <li><a href="{{ route('specialities.show', 'cancer-care') }}">
                                            <i class="fa-solid fa-ribbon"></i> Cancer Care</a></li>
                                </ul>

                                <!-- COLUMN 4 -->
                                <ul class="mega-col">
                                    <li><a href="{{ route('specialities.show', 'vascular-surgery') }}">
                                            <i class="fa-solid fa-wave-square"></i> Vascular Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'dermatology') }}">
                                            <i class="fa-solid fa-hand-dots"></i> Skin Care</a></li>

                                    <li><a href="{{ route('specialities.show', 'ent-ear-nose-throat') }}">
                                            <i class="fa-solid fa-ear-listen"></i> ENT Care</a></li>

                                    <!-- 4th item = View All -->
                                    <li>
                                        <a href="{{ route('specialities.index') }}" style=" color:red; "
                                            class="text-red-500 font-semibold">
                                            View All
                                        </a>
                                    </li>
                                </ul>

                            </div>




                        </li>

                        <li class="special relative facility-menu">
                            <a href="#" id="facilityToggle" class="hover:text-red-500"> Hospital Facilities
                                <span>▾</span></a>

                            <div class="mega mega-facilities" id="facilityMegaMenu" aria-hidden="true">
                                <ul class="mega-col">
                                    <li><a
                                            href="{{ route('health-facilities.show', 'twenty-four-seven-emergency') }}"><i
                                                class="fa-solid fa-truck-medical"></i> 24x7 Emergency</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'ct-scan') }}"><i
                                                class="fa-solid fa-x-ray"></i> CT Scan</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'mri-scan') }}"><i
                                                class="fa-solid fa-magnet"></i> MRI Scan</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'dialysis') }}"><i
                                                class="fa-solid fa-droplet"></i> 24x7 Dialysis</a></li>
                                </ul>

                                <ul class="mega-col">
                                    <li><a href="{{ route('health-facilities.show', '2d-echocardiography') }}"><i
                                                class="fa-solid fa-heart-pulse"></i> 2D Echocardiography</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'ncs') }}"><i
                                                class="fa-solid fa-flask-vial"></i>NCS</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'labour-room') }}"><i
                                                class="fa-solid fa-hospital-user"></i> Labour Suite</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'advanced-lab') }}"><i
                                                class="fa-solid fa-vials"></i> Advanced Lab</a></li>
                                </ul>

                                <ul class="mega-col">
                                    <li><a href="{{ route('health-facilities.show', 'eeg-services') }}"><i
                                                class="fa-solid fa-brain"></i> EEG</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'ecg-services') }}"><i
                                                class="fa-solid fa-heart-circle-check"></i> ECG</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'image-intensifier') }}"><i
                                                class="fa-solid fa-camera-rotate"></i> Image Intensifier</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'neonatal-resuscitation') }}"><i
                                                class="fa-solid fa-baby"></i> Neonatal Resuscitation</a></li>
                                </ul>

                                <ul class="mega-col">
                                    <li><a href="{{ route('health-facilities.show', 'pft') }}"><i
                                                class="fa-solid fa-lungs"></i> PFT</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'ultrasound') }}"><i
                                                class="fa-solid fa-wave-square"></i> Ultrasound</a></li>
                                    <li><a href="{{ route('health-facilities.show', 'stimwell') }}"><i
                                                class="fa-solid fa-bolt"></i> Stimwell</a></li>
                                    <li><a href="{{ route('health.facilities.index') }}" class="view-more"
                                            style=" color:red; "> View All </a></li>
                                </ul>
                            </div>
                        </li>

                <li class="special relative">
                    <a href="#" class="hover:text-red-500">
                        Procedures <span>▾</span>
                    </a>

                    <div class="mega mega-specialities mega-procedures">

                        <!-- COLUMN 1 -->
                        <ul class="mega-col procedure-col">
                            <li><a href="{{ route('procedures.show', 'cath-lab') }}"><i
                                        class="fa-solid fa-heart-pulse"></i> Cath Lab</a></li>
                            <li><a href="{{ route('procedures.show', 'cesarean-section') }}"><i
                                        class="fa-solid fa-baby"></i> Cesarean Section</a></li>
                            <li><a href="{{ route('procedures.show', 'appendectomy') }}"><i
                                        class="fa-solid fa-user-doctor"></i> Appendectomy</a></li>
                            <li><a href="{{ route('procedures.show', 'cholecystectomy') }}"><i
                                        class="fa-solid fa-procedures"></i> Cholecystectomy</a></li>
                        </ul>

                        <!-- COLUMN 2 -->
                        <ul class="mega-col procedure-col">
                            <li><a href="{{ route('procedures.show', 'knee-replacement-surgery') }}"><i
                                        class="fa-solid fa-bone"></i> Knee Replacement</a></li>
                            <li><a href="{{ route('procedures.show', 'hip-replacement-surgery') }}"><i
                                        class="fa-solid fa-bone"></i> Hip Replacement</a></li>
                            <li><a href="{{ route('procedures.show', 'hernia-repair-surgery') }}"><i
                                        class="fa-solid fa-bandage"></i> Hernia Repair</a></li>
                            <li><a href="{{ route('procedures.show', 'breast-surgery') }}"><i
                                        class="fa-solid fa-ribbon"></i> Breast Surgery</a></li>
                        </ul>

                        <!-- COLUMN 3 -->
                        <ul class="mega-col procedure-col">
                            <li><a href="{{ route('procedures.show', 'tonsillectomy') }}"><i
                                        class="fa-solid fa-head-side-cough"></i> Tonsillectomy</a></li>
                            <li><a href="{{ route('procedures.show', 'hysterectomy') }}"><i
                                        class="fa-solid fa-venus"></i> Hysterectomy</a></li>
                            <li><a href="{{ route('procedures.show', 'prostate-surgery') }}"><i
                                        class="fa-solid fa-mars"></i> Prostate Surgery</a></li>
                            <li><a href="{{ route('procedures.show', 'spinal-surgery') }}"><i
                                        class="fa-solid fa-user-injured"></i> Spinal Surgery</a></li>
                        </ul>

                        <!-- COLUMN 4 -->
                        <ul class="mega-col procedure-col">
                            <li><a href="{{ route('procedures.show', 'skin-surgery') }}"><i
                                        class="fa-solid fa-hand-holding-medical"></i> Skin Surgery</a></li>
                            <li><a href="{{ route('procedures.show', 'colorectal-surgery') }}"><i
                                        class="fa-solid fa-notes-medical"></i> Colorectal Surgery</a></li>
                            <li><a href="{{ route('procedures.show', 'liver-surgery') }}"><i
                                        class="fa-solid fa-user-doctor"></i> Liver Surgery</a></li>


                            <!-- VIEW ALL (INSIDE LAST COLUMN) -->
                            <li class="view-all">
                                <a href="{{ route('procedures.index') }}" class="view-more-btn "
                                    style=" color:red; ">View All
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>

                <li class="special relative">
                    <a href="#" class="hover:text-red-500">
                        Conditions <span>▾</span>
                    </a>

                    <div class="mega mega-specialities mega-conditions">

                        <!-- COLUMN 1 -->
                        <ul class="mega-col condition-col">
                            <li><a href="{{ route('conditions.show', 'hypertension-high-blood-pressure') }}">
                                    <i class="fa-solid fa-heart-pulse"></i> Hypertension</a></li>

                            <li><a href="{{ route('conditions.show', 'diabetes') }}">
                                    <i class="fa-solid fa-vial-circle-check"></i> Diabetes</a></li>

                            <li><a href="{{ route('conditions.show', 'heart-disease') }}">
                                    <i class="fa-solid fa-heart"></i> Heart Disease</a></li>

                            <li><a href="{{ route('conditions.show', 'stroke') }}">
                                    <i class="fa-solid fa-brain"></i> Stroke</a></li>
                        </ul>

                        <!-- COLUMN 2 -->
                        <ul class="mega-col condition-col">
                            <li><a href="{{ route('conditions.show', 'obesity') }}">
                                    <i class="fa-solid fa-weight-scale"></i> Obesity</a></li>

                            <li><a href="{{ route('conditions.show', 'osteoarthritis') }}">
                                    <i class="fa-solid fa-bone"></i> Osteoarthritis</a></li>

                            <li><a href="{{ route('conditions.show', 'back-and-neck-pain') }}">
                                    <i class="fa-solid fa-person-walking"></i> Back & Neck Pain</a></li>

                            <li><a href="{{ route('conditions.show', 'osteoporosis') }}">
                                    <i class="fa-solid fa-bone"></i> Osteoporosis</a></li>
                        </ul>

                        <!-- COLUMN 3 -->
                        <ul class="mega-col condition-col">
                            <li><a href="{{ route('conditions.show', 'asthma') }}">
                                    <i class="fa-solid fa-lungs"></i> Asthma</a></li>

                            <li><a href="{{ route('conditions.show', 'chronic-bronchitis') }}">
                                    <i class="fa-solid fa-lungs"></i> Chronic Bronchitis</a></li>

                            <li><a href="{{ route('conditions.show', 'acid-reflux') }}">
                                    <i class="fa-solid fa-fire"></i> Acid Reflux</a></li>

                            <li><a href="{{ route('conditions.show', 'gallstones') }}"><i
                                        class="fa-solid fa-circle-dot"></i> Gallstones</a></li>
                        </ul>

                        <!-- COLUMN 4 -->
                        <ul class="mega-col condition-col">
                            <li><a href="{{ route('conditions.show', 'endometriosis') }}">
                                    <i class="fa-solid fa-moon"></i>endometriosis</a></li>

                            <li><a href="{{ route('conditions.show', 'tuberculosis') }}">
                                    <i class="fa-solid fa-bacteria"></i> Tuberculosis</a></li>

                            <li><a href="{{ route('conditions.show', 'thyroid-disorders') }}"><i
                                        class="fa-solid fa-ribbon"></i>Thyroid Disorders</a></li>

                            <!-- 4th item = View More -->
                            <li>
                                <a href="{{ route('conditions.index') }}"
                                    class="view-more text-red-500 font-semibold text-lg">
                                    View All
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>


                {{-- <li class="special relative">
                    <a href="#" class="hover:text-red-500">
                        Health Packages<span>▾</span>
                    </a>

                    <div class="mega mega-specialities mega-packages">

                        <!-- COLUMN 1 -->
                        <ul class="mega-col condition-col">
                            <li>
                                <a href="./basic-package.php">
                                    <i class="fa-solid fa-clipboard-check"></i>
                                    Basic Health Package
                                </a>
                            </li>

                            <li>
                                <a href="./pre-employment.php">
                                    <i class="fa-solid fa-user-check"></i>
                                    Pre Employment Package
                                </a>
                            </li>

                            <li>
                                <a href="./master-health-package.php">
                                    <i class="fa-solid fa-file-medical"></i>
                                    Master Health Package
                                </a>
                            </li>
                        </ul>

                    
                        <ul class="mega-col condition-col">
                            <li>
                                <a href="./master-health-package.php">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Executive Health Package
                                </a>
                            </li>

                            <li>
                                <a href="./diabetic-health-package.php">
                                    <i class="fa-solid fa-vial-circle-check"></i>
                                    Diabetic Package
                                </a>
                            </li>

                            <li>
                                <a href="./diabetic-health-package.php">
                                    <i class="fa-solid fa-person-cane"></i>
                                    Senior Citizen Package
                                </a>
                            </li>
                        </ul>

             
                        <ul class="mega-col condition-col">
                            <li>
                                <a href="./master-health-package.php">
                                    <i class="fa-solid fa-heart-pulse"></i>
                                    Healthy Heart Package
                                </a>
                            </li>

                            <li>
                                <a href="./diabetic-health-package.php">
                                    <i class="fa-solid fa-vial-circle-check"></i>
                                    Diabetic Package
                                </a>
                            </li>

                            <li>
                                <a href="./diabetic-health-package.php">
                                    <i class="fa-solid fa-person-cane"></i>
                                    Senior Citizen Package
                                </a>
                            </li>
                        </ul>

                      
                        <ul class="mega-col condition-col">
                            <li>
                                <a href="./cancer-pacakge.php">
                                    <i class="fa-solid fa-ribbon"></i>
                                    Cancer Package
                                </a>
                            </li>

                            <li>
                                <a href="./fitness-package.php">
                                    <i class="fa-solid fa-dumbbell"></i>
                                    Fitness Package
                                </a>
                            </li>

                            <li>
                                <a href="./fertility-package.php">
                                    <i class="fa-solid fa-seedling"></i>
                                    Fertility Package
                                </a>
                            </li>
                        </ul>

                    </div>

                </li> --}}
                </ul>

                <!-- CTA -->
                {{-- <div class="hidden md:flex items-center gap-3">
                    <a href="https://nanohospitals.karexpert.com/account-management/login"
                        class="bg-red-500 text-white px-5 py-2 rounded-full text-sm font-semibold whitespace-nowrap">
                        Book Appointment
                    </a>

                    <button onclick="openContact('call')" href="tel:1800123456"
                        class="border border-red-500 text-red-500 px-4 py-2 rounded-full text-sm font-semibold whitespace-nowrap">
                        Call Us
                    </button>
                </div> --}}



                <!-- MOBILE TOGGLE -->
                <button id="openMobileMenu" class="min-[1300px]:hidden p-2 text-red-600 text-xl">
                    ☰
                </button>


            </div>
        </div>
        </div>
        <div class="hidden min-[1200px]:block w-full bg-[#FFFAFA] border-t border-b border-red-300 ">
            <div class="max-w-[1400px] mx-auto px-6">
                <div class="flex items-center justify-center h-14">
                    <div
                        class="inline-flex items-center gap-4 px-4 py-1  text-sm ">
                        <button type="button"
                            data-track="call"
                            onclick="window.openContact && openContact('call')"
                            class="flex items-center gap-2 px-4 py-1 rounded-full border border-red-400 bg-white text-red-600 hover:bg-red-50 transition">
                            <i class="fa-solid fa-phone text-sm"></i>
                            <span>Call Us</span>
                        </button>

                        <button type="button"
                            data-open-appointment-modal
                            data-track="book-appointment"
                            class="flex items-center gap-2 px-6 py-1 rounded-full border border-red-500 bg-red-500 text-white hover:bg-red-600 transition font-semibold">
                            <i class="fa-regular fa-calendar-days text-sm"></i>
                            <span>Book Appointment</span>
                        </button>

                        <button type="button"
                            onclick="typeof openRequestCallModal === 'function' && openRequestCallModal()"
                            class="flex items-center gap-2 px-4 py-1 rounded-full border border-red-400 bg-white text-red-600 hover:bg-red-50 transition">
                            <i class="fa-solid fa-phone-volume text-sm"></i>
                            <span>Request a Call Back</span>
                        </button>

                        <button type="button"
                            data-track="whatsapp"
                            onclick="window.openContact && openContact('whatsapp')"
                            class="flex items-center gap-2 px-4 py-1 rounded-full border border-green-400 bg-white text-green-600 hover:bg-green-50 transition">
                            <i class="fab fa-whatsapp text-sm"></i>
                            <span>WhatsApp</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================= MOBILE MENU ================= -->
        <!-- ================= MOBILE OVERLAY MENU ================= -->
        <!-- ================= MOBILE OVERLAY MENU ================= -->




    </nav>



    <div id="mobileMenuOverlay" class="fixed inset-0 bg-white z-[20000] hidden flex flex-col overflow-hidden">

        <!-- HEADER -->
        <div class="flex items-center justify-between px-5 py-4 border-b shrink-0">
            <a href="./">
                 <img loading="lazy" decoding="async" src="{{ asset('assets/logo/logo.png') }}" alt="Nano Hospitals" class="h-8">
            </a>
            <button id="closeMobileMenu" class="text-2xl font-light">✕</button>
        </div>
    
        <!-- SEARCH -->
        <div class="px-5 pt-4 pb-3 border-b">
    
            <div class="relative">
                <div class="flex items-center gap-2">
                    <input
                        type="text"
                        id="hamburger-live-search"
                        class="flex-1 border border-gray-300 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-red-500"
                        placeholder="Search doctors, services, conditions..."
                    />
    
                    <button
                        type="button"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-red-500 text-white text-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
    
                <div
                    id="hamburger-search-results"
                    class="hidden absolute left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg max-h-80 overflow-y-auto z-[21000]">
                </div>
            </div>
    
        </div>
    
        <!-- SCROLLABLE CONTENT -->
        <div class="flex-1 overflow-y-auto">
    
            <!-- MAIN LINKS -->
            <ul class="px-3 py-4 text-sm text-gray-800 divide-y">
    
                <!-- ABOUT -->
                <li>
                    <a href="{{ route('about') }}"
                        class="flex items-center justify-between py-4 hover:text-red-600 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-user text-gray-400 w-5"></i>
                            <span>About Us</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                    </a>
                </li>
    
                <!-- SECOND OPINION -->
                <li>
                    <a href="{{ route('second.opinion') }}"
                        class="flex items-center justify-between py-4 hover:text-red-600 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-comments text-gray-400 w-5"></i>
                            <span>Second Opinion</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                    </a>
                </li>
    
                <!-- INTERNATIONAL PATIENTS -->
                <li>
                    <a href="{{ route('international.patients') }}"
                        class="flex items-center justify-between py-4 hover:text-red-600 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-globe text-gray-400 w-5"></i>
                            <span>International Patients</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                    </a>
                </li>
    
                <!-- CAREERS -->
                <li>
                    <a href="{{ route('careers') }}"
                        class="flex items-center justify-between py-4 hover:text-red-600 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-briefcase text-gray-400 w-5"></i>
                            <span>Careers</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                    </a>
                </li>
    
                <!-- NEWS -->
                <li>
                    <a href="{{ route('news') }}"
                        class="flex items-center justify-between py-4 hover:text-red-600 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-newspaper text-gray-400 w-5"></i>
                            <span>News & Media</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                    </a>
                </li>
    
                <!-- HEALTH CORNER DROPDOWN -->
                <li>
    
                    <button
                        id="mobileHealthCornerToggle"
                        class="w-full flex items-center justify-between py-4 hover:text-red-600 transition">
    
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-heart text-gray-400 w-5"></i>
                            <span>Health Corner</span>
                        </div>
    
                        <i id="mobileHealthCornerChevron"
                            class="fa-solid fa-chevron-down text-gray-300 text-xs transition-transform duration-200"></i>
    
                    </button>
    
                    <div id="mobileHealthCornerMenu" class="pl-11 pb-3 space-y-2 hidden">
    
                        <a href="{{ route('blogs.index') }}"
                            class="block py-1 text-sm text-gray-700 hover:text-red-600">
                            Blogs
                        </a>
    
                        <a href="{{ route('testimonials') }}"
                            class="block py-1 text-sm text-gray-700 hover:text-red-600">
                            Patient Testimonials
                        </a>
    
                        <a href="{{ route('doctor.videos') }}"
                            class="block py-1 text-sm text-gray-700 hover:text-red-600">
                            Doctor Videos
                        </a>
    
                    </div>
    
                </li>
    
            </ul>
    
            <!-- DIVIDER -->
            <div class="border-t"></div>
    
            <!-- ICON GRID -->
            <div class="px-6 py-6">

                <div class="grid grid-cols-3 gap-y-6 gap-x-4 text-center text-xs text-gray-700">
            
                    <!-- PICK HOSPITAL — same branch list as desktop "Pick Branch" -->
                    <div class="flex flex-col items-center gap-2 relative">
            
                        <button id="mobileHospitalToggle" type="button"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                            aria-label="Pick hospital branch"
                            class="flex flex-col items-center gap-2">
            
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="{{ asset('assets/icons/hospital.webp') }}" class="w-6" alt="">
                            </div>
            
                            <span>{{ $currentBranchLabel ?? 'Pick Hospital' }}</span>
            
                        </button>
            
                        <!-- DROPDOWN -->
                        <div id="mobileHospitalMenu"
                            role="listbox"
                            class="hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 bg-white border rounded-lg shadow-md w-44 text-sm z-[21000]">
                            @foreach ($navBranches as $branch)
                                <a href="{{ route($branch['route']) }}"
                                    role="option"
                                    @if ($currentBranchLabel === $branch['label']) aria-selected="true" @endif
                                    class="block px-4 py-2 {{ $currentBranchLabel === $branch['label'] ? 'bg-red-50 text-red-500 font-semibold' : 'hover:bg-gray-100 text-gray-700' }}">
                                    {{ $branch['label'] }}
                                </a>
                            @endforeach
                        </div>
            
                    </div>
            
                    <a href="{{ route('doctors.index') }}">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="{{ asset('assets/icons/doctor.png') }}" class="w-6">
                            </div>
                            Doctors
                        </div>
                    </a>
            
                    <!-- SPECIALITIES -->
                    <a href="/specialities">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="{{ asset('assets/icons/specialities.png') }}" class="w-6">
                            </div>
                            Specialities
                        </div>
                    </a>
            
            
                    <!-- HEALTH FACILITIES -->
                    <a href="{{ route('health.facilities.index') }}">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="{{ asset('assets/icons/24-hours.png') }}" class="w-6">
                            </div>
                            Facilities
                        </div>
                    </a>
            
            
                    <!-- PROCEDURES -->
                    <a href="/procedures">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="{{ asset('assets/icons/knife (2).png') }}" class="w-6">
                            </div>
                            Procedures
                        </div>
                    </a>
            
            
                    <!-- CONDITIONS -->
                    <a href="/conditions">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-notes-medical" style="font-size: 24px;"></i>
                            </div>
                            Conditions
                        </div>
                    </a>
            
            
                    <!-- HEALTH PACKAGES -->
                    {{-- <a href="/health-packages">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                 <img loading="lazy" decoding="async" src="./assets/icons/health-packages.png" class="w-6">
                            </div>
                            Health Packages
                        </div>
                    </a> --}}
            
                </div>
            
            </div>
    
        </div>
    
    </div>








<div
    id="header-script-data"
    data-call-icon="{{ asset('assets/icons/model-call.png') }}"
    data-whatsapp-icon="{{ asset('assets/icons/model-whatsapp.png') }}"
    hidden></div>



    <div class="hidden md:flex justify-center w-full pt-3 relative">

        <!-- SEARCH BAR (CENTERED) -->
        <div class="w-full max-w-[850px] mx-auto relative mb-3">

            <!-- SEARCH BAR -->
            <div class="w-full bg-white shadow-md rounded-full p-3 relative">
                <input id="live-search" type="text" placeholder="Search for Doctors Specialty, Condition..."
                    class="w-full rounded-full border border-gray-200 py-3 pl-5 pr-12 text-sm md:text-base text-[#737373] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-400" />

                <button
                    class="absolute right-4 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-red-500 hover:bg-red-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </button>
            </div>

            <!-- RESULTS DROPDOWN -->
            <div id="search-results"
                class="hidden absolute left-0 top-full mt-3 w-full bg-white shadow-xl rounded-2xl border border-gray-100 z-[9999] max-h-[400px] overflow-y-auto">
            </div>


        </div>

        <!-- SOCIAL ICON (RIGHT SIDE) -->



    </div>



 <script>
        const input = document.getElementById("live-search");
        const resultsBox = document.getElementById("search-results");

        let timeout = null;

        input.addEventListener("input", () => {
            clearTimeout(timeout);
            const query = input.value.trim();

            if (query.length < 2) {
                resultsBox.classList.add("hidden");
                return;
            }

            timeout = setTimeout(() => {
                fetch(`/search/live?q=${query}`)
                    .then(res => res.json())
                    .then(data => {
                        let html = "";

                        const buildSection = (items, label) => {
                            if (!items || items.length === 0) return "";
                            return `
                        <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase">${label}</div>
                        ${items.map(item => `
                                                                    <a href="${item.url}" 
                                                                       class="block px-4 py-2 text-sm hover:bg-gray-100 transition">
                                                                       ${item.title}
                                                                       ${label === "Doctors" ? `<div class="text-xs text-gray-500">${[item.speciality, item.location].filter(Boolean).join(" | ")}</div>` : ""}
                                                                    </a>
                                                                `).join("")}
                    `;
                        };

                        html += buildSection(data.doctors, "Doctors");
                        html += buildSection(data.specialities,
                            "Specialities"); // 👈 THIS WAS MISSING OR WRONG
                        html += buildSection(data.procedures, "Procedures");
                        html += buildSection(data.conditions, "Conditions");
                        html += buildSection(data.health_packages, "Health Packages");
                        html += buildSection(data.health_facilities, "Health Facilities");






                        if (html === "") {
                            html =
                                `<div class="px-4 py-3 text-sm text-gray-500">No results found</div>`;
                        }

                        resultsBox.innerHTML = html;
                        resultsBox.classList.remove("hidden");
                    })
                    .catch(() => {
                        resultsBox.classList.add("hidden");
                    });

            }, 300);
        });

        // Hide dropdown when clicking outside
        document.addEventListener("click", (e) => {
            if (!e.target.closest("#live-search") && !e.target.closest("#search-results")) {
                resultsBox.classList.add("hidden");
            }
        });
    </script>