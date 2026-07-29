@extends('layouts.app')

@section('title', $speciality->meta_title ?? $speciality->name)
@section('meta_description', filled($speciality->meta_description) ? $speciality->meta_description :
    \Illuminate\Support\Str::limit(strip_tags($speciality->name . ' - Nano Hospitals speciality'), 155))

@section('twitter_title', ($speciality->meta_title ?? $speciality->name) . ' | Nano Hospitals')
@section('twitter_description', filled($speciality->meta_description) ? $speciality->meta_description : $speciality->name . ' treatment at Nano Hospitals Bangalore.')

@section('og_image', asset('storage/' . $speciality->banner_image))

@section('content')

    <style>
        .section-spacing {
            padding: 80px 0;
        }

        .container-narrow {
            max-width: 1100px;
            margin: auto;
            padding: 0 20px;
        }

        .pill-btn {
            padding: 8px 20px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 500;
            background: #f1f5f9;
            color: #334155;
            transition: all .2s ease;
            white-space: nowrap;
        }

        .pill-btn.active {
            background: #dc2626;
            color: #fff;
        }

        .pill-btn:hover {
            background: #fee2e2;
            color: #dc2626;
        }

        .card-clean {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .vtab-btn {
            width: 100%;
            text-align: left;
            padding: 16px 20px;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            font-weight: 600;
            font-size: 16px;
            color: #374151;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all .2s ease;
        }

        .vtab-btn:hover {
            border-color: #dc2626;
            color: #dc2626;
        }

        .vtab-btn.active {
            background: #fff1f2;
            border-color: #dc2626;
            color: #dc2626;
        }

        .vtab-content h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #1f2937;
        }

        .vtab-content p,
        .vtab-content li {
            font-size: 18px;
            line-height: 1.7;
            color: #4b5563;
        }
    </style>

    {{-- HERO --}}
    <section class="relative w-full h-[800px]">
        <img src="{{ asset('storage/' . $speciality->banner_image) }}" class="absolute inset-0 w-full h-full object-cover"
            alt="Best {{ $speciality->name }} hospital in Bangalore" loading="lazy" width="1920" height="800" />
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 h-full flex items-center">
            <div class="container-narrow text-white">
                <h2 class="text-4xl md:text-5xl font-semibold mb-6">{{ $speciality->name }}</h2>
                <p class="text-lg text-gray-200 max-w-xl mb-8">
                    Comprehensive, evidence-based care delivered by experienced specialists using advanced medical
                    technology.
                </p>
                <button type="button"
                data-open-appointment-modal
                data-track="book-appointment"
                    class="inline-block bg-red-600 text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-red-700 transition">
                    BOOK APPOINTMENT
                </button>
            </div>


        </div>


    </section>

    {{-- ABOUT --}}
    <section class="section-spacing bg-white">
        <div class="container-narrow grid md:grid-cols-3 gap-16">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">About the Department</h2>
                <div class="w-16 h-[2px] bg-red-600"></div>
            </div>
            <div class="md:col-span-2 text-gray-600 leading-relaxed text-[17px]">
                {!! $speciality->about_intro !!}
                @if ($speciality->about_more)
                    <div id="moreContent" class="hidden mt-4">{!! $speciality->about_more !!}</div>
                    <button id="readMoreBtn" class="mt-3 text-red-600 text-sm font-medium hover:underline">Read
                        More</button>
                @endif
            </div>
        </div>
    </section>

    {{-- NAVIGATION --}}
    <div class="sticky top-0 z-40 bg-white">
        <div class="container-narrow flex gap-3 py-3 overflow-x-auto">
            <button class="pill-btn active" data-target="overview">Overview</button>

            <button class="pill-btn" data-target="treatments">Treatments</button>
            <button class="pill-btn" data-target="facilities">Facilities</button>
            <button class="pill-btn" data-target="conditions">Conditions</button>
            <button class="pill-btn" data-target="risks">Challenges</button>
            <button class="pill-btn" data-target="doctors">Doctors</button>
            <button class="pill-btn" data-target="subspecialties">Sub-specialties</button>
            <button class="pill-btn" data-target="faqs">FAQs</button>
        </div>
    </div>

    {{-- OVERVIEW --}}
    <section id="overview" class="section-spacing bg-white scroll-mt-32">
        <div class="container-narrow">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Best {{ $speciality->name }} Hospital in Bangalore </h1>
            <div class="text-gray-700 leading-relaxed space-y-4">{!! $speciality->overview_content !!}</div>
        </div>
    </section>

    {{-- @if ($speciality->related_image)
        <section class="w-full">
            <div class="relative w-full h-[420px] md:h-[800px] overflow-hidden">
                <img src="{{ asset('storage/' . $speciality->related_image) }}" alt="{{ $speciality->name }} Department"
                    class="w-full h-full object-cover">

          
                <div class="absolute inset-0 bg-black/20"></div>

     
                <div class="absolute inset-0 flex items-center">
                    <div class="container-narrow text-white">
                        <h2 class="text-3xl md:text-4xl font-semibold drop-shadow-lg">
                            World-Class {{ $speciality->name }} Care
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    @endif --}}

    {{-- VERTICAL TABS --}}
    <section id="treatments" class="section-spacing bg-[#f8fafc] scroll-mt-32">
        <div class="container-narrow">
            <div class="grid md:grid-cols-3 gap-12 items-start">
                <div class="space-y-4">
                    <button class="vtab-btn active" data-tab="tab-treatments">Treatments <span>›</span></button>
                    <button class="vtab-btn" data-tab="tab-facilities">Facilities <span>›</span></button>
                    <button class="vtab-btn" data-tab="tab-conditions">Conditions <span>›</span></button>
                </div>

                <div class="md:col-span-2 card-clean vtab-content">
                    <div id="tab-treatments" class="vtab-panel">
                        <h3>Procedures & Treatments</h3>
                        {!! $speciality->treatments_content !!}
                    </div>
                    <div id="tab-facilities" class="vtab-panel hidden">
                        <h3>Facilities & Technology</h3>
                        {!! $speciality->facilities_content !!}
                    </div>
                    <div id="tab-conditions" class="vtab-panel hidden">
                        <h3>Conditions Treated</h3>
                        {!! $speciality->conditions_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- RISKS --}}
    <section id="risks" class="section-spacing bg-white scroll-mt-32">
        <div class="container-narrow">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Risks & Challenges</h2>

            @php
                $risksRaw = $speciality->risks_content;

                // Replace paragraph and break tags with a separator
                $risksClean = str_replace(['</p>', '<br>', '<br/>', '<br />'], '|', $risksRaw);

                // Remove opening <p> tags
                $risksClean = str_replace('<p>', '', $risksClean);

                // Convert to array
                $risksArray = array_filter(array_map('trim', explode('|', strip_tags($risksClean))));
            @endphp

            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                @foreach ($risksArray as $risk)
                    <li>{{ $risk }}</li>
                @endforeach
            </ul>
        </div>
    </section>


    @if ($speciality->doctors && $speciality->doctors->take(3)->count())
        <section id="doctors" class="section-spacing ">
            <div class="container-narrow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center">
                    Our {{ $speciality->name }} Specialists
                </h2>

                <div class=" flex flex-wrap justify-center  gap-32 md:gap-8 lg:gap-16 xl:gap-20  mt-32 ">
                    @foreach ($speciality->doctors->take(3) as $doctor)
                        <x-democard :doctor="$doctor" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif



    <section id="subspecialties" class="section-spacing bg-[#f8fafc] scroll-mt-32">
        <div class="container-narrow">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Sub-specialties in {{ $speciality->name }}
            </h2>

            @php
                $subsRaw = $speciality->subspecialties_content;

                $subsClean = str_replace(['</p>', '<br>', '<br/>', '<br />'], '|', $subsRaw);
                $subsClean = str_replace('<p>', '', $subsClean);
                $subsArray = array_filter(array_map('trim', explode('|', strip_tags($subsClean))));
            @endphp

            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                @foreach ($subsArray as $sub)
                    <li>{{ $sub }}</li>
                @endforeach
            </ul>
        </div>
    </section>



    {{-- FAQ --}}
    @if ($speciality->faqs && $speciality->faqs->count())
        <section id="faqs" class="section-spacing bg-white scroll-mt-32">
            <div class="container-narrow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-8">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    @foreach ($speciality->faqs as $faq)
                        <div class="border rounded-lg p-5">
                            <button
                                class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800">
                                {{ $faq->question }}
                                <span class="text-red-600 text-xl">+</span>
                            </button>
                            <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    {{-- <img src="{{ asset('assets/banners/speciality-banner.webp') }}" class="w-full" alt=""> --}}

    <section class="relative w-full overflow-hidden bg-gradient-to-r from-[#075e54] to-[#128C7E] text-white">
        <div class="pointer-events-none absolute -right-16 top-0 h-48 w-48 rounded-full bg-white/10 blur-3xl"></div>
        <div
            class="container-narrow relative z-10 flex flex-col gap-10 py-14 md:flex-row md:items-center md:justify-between md:py-16 lg:gap-12">
            <div class="flex max-w-2xl flex-col gap-6 sm:flex-row sm:items-center">
                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-white/15 backdrop-blur-sm"
                    aria-hidden="true">
                    <i class="fab fa-whatsapp text-3xl text-white"></i>
                </div>
                <div>
                    <h2 class="mb-2 text-2xl font-semibold md:text-3xl">Chat with us on WhatsApp</h2>
                    <p class="text-base leading-relaxed text-white/90 md:text-lg">
                        Have questions about {{ $speciality->name }} at Nano Hospitals? Message us and we will connect you
                        with the right team. Choose your nearest location.
                    </p>
                </div>
            </div>
            <button type="button" onclick="window.openContact && openContact('whatsapp')"
                class="inline-flex shrink-0 items-center justify-center gap-3 rounded-full bg-[#25D366] px-8 py-4 text-base font-semibold text-white shadow-lg transition hover:bg-[#20bd5a] focus:outline-none focus:ring-2 focus:ring-white/40">
                <i class="fab fa-whatsapp text-2xl" aria-hidden="true"></i>
                <span>WhatsApp</span>
            </button>
        </div>
    </section>



    @if ($speciality->faqs && $speciality->faqs->count())
        @php
            $faqSchema = [];

            foreach ($speciality->faqs as $faq) {
                $faqSchema[] = [
                    '@type' => 'Question',
                    'name' => $faq->question,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq->answer,
                    ],
                ];
            }

            $schemaData = [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $faqSchema,
            ];
        @endphp

        <script type="application/ld+json">
        {!! json_encode($schemaData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
    @endif






    <div id="shareModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl w-[90%] max-w-sm p-6 relative">

            <button id="closeShareModal"
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">&times;</button>

            <h3 class="text-lg font-semibold text-gray-900 mb-4 text-center">Share Profile</h3>

            <div class="grid grid-cols-4 gap-4 text-center">

                <a id="shareWhatsapp" target="_blank"
                    class="flex flex-col items-center text-green-500 hover:scale-110 transition">
                    <i class="fab fa-whatsapp text-3xl text-green-500"></i>
                    <span class="text-xs mt-1">WhatsApp</span>
                </a>

                <a id="shareFacebook" target="_blank"
                    class="flex flex-col items-center text-blue-600 hover:scale-110 transition">
                    <i class="fab fa-facebook text-3xl text-blue-600"></i>
                    <span class="text-xs mt-1">Facebook</span>
                </a>

                <a id="shareLinkedin" target="_blank"
                    class="flex flex-col items-center text-blue-700 hover:scale-110 transition">
                    <i class="fab fa-linkedin text-3xl text-blue-700"></i>
                    <span class="text-xs mt-1">LinkedIn</span>
                </a>

                <a id="shareX" target="_blank"
                    class="flex flex-col items-center text-black hover:scale-110 transition">
                    <i class="fab fa-x-twitter text-3xl text-black"></i>
                    <span class="text-xs mt-1">X</span>
                </a>

            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const modal = document.getElementById("shareModal");
            const closeBtn = document.getElementById("closeShareModal");

            let shareName = "";
            let shareUrl = "";

            document.querySelectorAll(".shareBtn").forEach(button => {
                button.addEventListener("click", function() {
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

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const pillButtons = document.querySelectorAll('.pill-btn');
            const sections = Array.from(pillButtons).map(btn =>
                document.getElementById(btn.dataset.target)
            );

            /* CLICK SCROLL */
            pillButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    document.getElementById(btn.dataset.target)?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });

            /* SCROLL SPY (RED ACTIVE SHIFT) */
            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    if (!section) return;
                    const sectionTop = section.offsetTop - 150;
                    if (window.scrollY >= sectionTop) {
                        current = section.id;
                    }
                });

                pillButtons.forEach(btn => {
                    btn.classList.toggle('active', btn.dataset.target === current);
                });
            });

            /* VERTICAL TABS */
            document.querySelectorAll('.vtab-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.vtab-btn').forEach(b => b.classList.remove(
                        'active'));
                    btn.classList.add('active');

                    document.querySelectorAll('.vtab-panel').forEach(panel => panel.classList.add(
                        'hidden'));
                    document.getElementById(btn.dataset.tab).classList.remove('hidden');

                    document.getElementById('treatments').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });

            /* READ MORE */
            document.getElementById('readMoreBtn')?.addEventListener('click', function() {
                const more = document.getElementById('moreContent');
                more.classList.toggle('hidden');
                this.textContent = more.classList.contains('hidden') ? 'Read More' : 'Read Less';
            });

            /* FAQ ACCORDION */
            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.addEventListener('click', () => {
                    const ans = btn.parentElement.querySelector('.faq-answer');
                    const ans = btn.parentElement.querySelector('.faq-answer');
                    const icon = btn.querySelector('span');
                    ans.classList.toggle('hidden');
                    icon.textContent = ans.classList.contains('hidden') ? '+' : '−';
                });
            });

        });
    </script>





@endsection
