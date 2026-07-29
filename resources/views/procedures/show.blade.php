@extends('layouts.app')

@section('title', $procedure->seo_title ?? $procedure->title)
@section('meta_description', filled($procedure->seo_description)
    ? $procedure->seo_description
    : \Illuminate\Support\Str::limit(strip_tags($procedure->title . ' - Nano Hospitals procedure'), 155))
@section('meta_keywords', $procedure->seo_keywords)
@section('canonical', request('page') > 1 ? url()->current() . '?page=' . request('page') : url()->current())
@section('twitter_title', ($procedure->seo_title ?? $procedure->title) . ' | Nano Hospitals')
@section('twitter_description', filled($procedure->seo_description) ? $procedure->seo_description : $procedure->title . ' procedure at Nano Hospitals Bangalore.')
@section('og_image', asset('storage/' . $procedure->banner_image))

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
    border-radius: 14px;
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
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 16px;
    color: #1f2937;
}

.vtab-content p,
.vtab-content li {
    font-size: 17px;
    line-height: 1.7;
    color: #4b5563;
}

    </style>

    {{-- HERO --}}
 @php
    $banner = $procedure->banner_image
        ? asset('storage/' . $procedure->banner_image)
        : asset('images/default-procedure-banner.jpg');
@endphp

<section class="relative w-full h-[750px]">
    <img src="{{ $banner }}"
    alt="{{ $procedure->title }} Banner"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-narrow text-white text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-semibold mb-6">{{ $procedure->title }}</h1>
            <div class="flex justify-center">
                <button type="button"
                data-open-appointment-modal
                data-track="book-appointment"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-red-700 transition">
                    Book Appointment
                </button>
            </div>
        </div>
    </div>
</section>




    {{-- INTRODUCTION --}}
    @if ($procedure->introduction)
        @php
            $introText = trim(strip_tags($procedure->introduction));
            $introLength = \Illuminate\Support\Str::length($introText);
            $introLimit = $introLength > 250 ? 250 : max(40, (int) floor($introLength * 0.6));
        @endphp
        <section class="section-spacing bg-gray-100">
            <div class="container-narrow grid md:grid-cols-3 gap-16">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">About {{ $procedure->title }}</h2>
          
                </div>
                <div class="md:col-span-2 text-gray-600 leading-relaxed text-[17px]">
                    <div id="introPreview">
                        {{ \Illuminate\Support\Str::limit($introText, $introLimit) }}
                    </div>

                    <div id="introFull" class="hidden">
                        {!! $procedure->introduction !!}
                    </div>

                    <button id="introToggleBtn" class="mt-3 text-red-600 text-sm font-medium hover:underline">
                        Read More
                    </button>
                </div>
            </div>
        </section>
    @endif

    @php
        $hasRecovery = filled(trim(strip_tags((string) $procedure->long_term_outlook))) || !empty($procedure->recovery_timeline);
        $hasRisks = !empty($procedure->surgery_risks) || !empty($procedure->post_op_care) || !empty($procedure->condition_risks);
    @endphp

    {{-- STICKY NAV --}}
    <div class="sticky top-0 z-40 bg-white ">
        <div class="container-narrow flex gap-3 py-3 overflow-x-auto no-scrollbar">
            @if ($procedure->what_is)
                <button class="pill-btn active" data-target="overview">Overview</button>
            @endif
            <button class="pill-btn" data-target="clinical-details" data-tab="tab-symptoms">Symptoms</button>
            <button class="pill-btn" data-target="clinical-details" data-tab="tab-causes">Causes</button>
            <button class="pill-btn" data-target="clinical-details" data-tab="tab-treatment">Treatment</button>
            @if ($hasRecovery)
                <button class="pill-btn" data-target="recovery">Recovery</button>
            @endif
            @if ($hasRisks)
                <button class="pill-btn" data-target="risks">Risks</button>
            @endif
            @if ($procedureDoctors->count())
                <button class="pill-btn" data-target="doctors">Doctors</button>
            @endif
            @if ($procedure->faqs && $procedure->faqs->count())
                <button class="pill-btn" data-target="faqs">FAQs</button>
            @endif
        </div>
    </div>

    {{-- OVERVIEW --}}
    @if ($procedure->what_is)
        <section id="overview" class="section-spacing scroll-mt-32">
            <div class="container-narrow card-clean">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Overview</h2>
                <div class="prose max-w-none text-gray-700">{!! $procedure->what_is !!}</div>
            </div>
        </section>
    @endif

    {{-- CLINICAL DETAILS: always show Symptoms / Causes / Treatment like Hip Replacement --}}
 <section id="clinical-details" class="section-spacing bg-white scroll-mt-32">
    <div class="container-narrow">
        <h2 class="text-3xl font-semibold text-center mb-14 text-gray-900">
            Understanding The Procedure
        </h2>

        <div class="grid md:grid-cols-3 gap-10 items-start">

            {{-- LEFT SIDE TABS --}}
            <div class="space-y-4">
                <button class="vtab-btn active" data-tab="tab-symptoms">
                    Symptoms  <span>›</span>
                </button>

                <button class="vtab-btn" data-tab="tab-causes">
                    Causes <span>›</span>
                </button>

                <button class="vtab-btn" data-tab="tab-treatment">
                    Treatment <span>›</span>
                </button>
            </div>

            {{-- RIGHT SIDE CONTENT --}}
            <div class="md:col-span-2 card-clean vtab-content">

                {{-- SYMPTOMS --}}
                <div id="tab-symptoms" class="vtab-panel">
                    <h3 class="text-xl font-semibold mb-4">Symptoms {{ $procedure->title }}</h3>
                    @if(!empty($procedure->symptoms))
                        <ul class="space-y-3 text-gray-700">
                            @foreach($procedure->symptoms as $item)
                                <li class="flex gap-3">
                                    <span class="text-red-500 mt-1">⦾</span>
                                    <span>{{ $item['value'] ?? $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                {{-- CAUSES --}}
                <div id="tab-causes" class="vtab-panel hidden">
                    <h3 class="text-xl font-semibold mb-4">Causes {{ $procedure->title }}</h3>
                    @if(!empty($procedure->causes))
                        <ul class="space-y-3 text-gray-700">
                            @foreach($procedure->causes as $item)
                                <li class="flex gap-3">
                                    <span class="text-red-500 mt-1">⦾</span>
                                    <span>{{ $item['value'] ?? $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                {{-- TREATMENT --}}
                <div id="tab-treatment" class="vtab-panel hidden">
                    <h3 class="text-xl font-semibold mb-4">Treatment Of {{ $procedure->title }}</h3>

                    @if(filled(trim(strip_tags((string) $procedure->treatment_overview))))
                        <div class="prose max-w-none text-gray-700 mb-6">
                            {!! $procedure->treatment_overview !!}
                        </div>
                    @endif

                    @if(!empty($procedure->surgery_types))
                        <div class="grid md:grid-cols-2 gap-6 ">
                            @foreach($procedure->surgery_types as $type)
                                <div class="bg-gray-50 p-5 rounded-xl border border-red-400">
                                    <h4 class="font-semibold text-gray-800 mb-2">
                                        {{ $type['name'] }}
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        {{ $type['description'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</section>


    {{-- SURGERY TYPES --}}
   

    {{-- RECOVERY --}}
    @if ($hasRecovery)
        <section id="recovery" class="section-spacing bg-[#f8fafc] scroll-mt-32">
            <div class="container-narrow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Recovery & Outlook</h2>
                @if (!empty($procedure->recovery_timeline))
                    <div class="space-y-4">
                        @foreach ($procedure->recovery_timeline as $stage)
                            @php
                                $stageLabel = is_array($stage)
                                    ? ($stage['stage'] ?? $stage['title'] ?? $stage['name'] ?? null)
                                    : null;
                                $stageDetails = is_array($stage)
                                    ? ($stage['details'] ?? $stage['description'] ?? $stage['value'] ?? $stage['text'] ?? null)
                                    : $stage;
                            @endphp
                            <div class="card-clean">
                                @if ($stageLabel)
                                    <h4 class="font-semibold text-red-600">{{ $stageLabel }}</h4>
                                @endif
                                @if ($stageDetails)
                                    <p class="text-gray-600 {{ $stageLabel ? '' : 'flex gap-3' }}">
                                        @unless ($stageLabel)
                                            <span class="text-red-500 mt-1">⦾</span>
                                        @endunless
                                        <span>{{ $stageDetails }}</span>
                                    </p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @elseif (filled(trim(strip_tags((string) $procedure->long_term_outlook))))
                    <div class="card-clean prose max-w-none text-gray-700">
                        {!! \Illuminate\Support\Str::startsWith(trim($procedure->long_term_outlook), '<') ? $procedure->long_term_outlook : '<p>'.$procedure->long_term_outlook.'</p>' !!}
                    </div>
                @endif
            </div>
        </section>
    @endif

    {{-- RISKS --}}
   @if ($hasRisks)
<section id="risks" class="section-spacing scroll-mt-32">
    <div class="container-narrow">

        <div class="grid md:grid-cols-2 gap-10">

            {{-- RISKS --}}
            @php $riskItems = !empty($procedure->surgery_risks) ? $procedure->surgery_risks : $procedure->condition_risks; @endphp
            @if (!empty($riskItems))
                <div>
                    <h2 class="text-2xl font-semibold text-red-600 mb-6 text-start md:text-left">
                        Risks
                    </h2>
                    <ul class="space-y-3">
                        @foreach ($riskItems as $item)
                            <li class="flex items-start gap-3 text-gray-700">
                                <span class="text-red-500 mt-1">⦾</span>
                                <span>{{ $item['value'] ?? $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- POST OPERATIVE CARE --}}
            @if (!empty($procedure->post_op_care))
                <div>
                    <h2 class="text-2xl font-semibold text-red-600 mb-6 text-start md:text-left">
                        Post-Operative Care
                    </h2>
                    <ul class="space-y-3">
                        @foreach ($procedure->post_op_care as $item)
                            <li class="flex items-start gap-3 text-gray-700">
                                <span class="text-red-500 mt-1">⦾</span>
                                <span>{{ $item['value'] ?? $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>
   @endif

     @if ($procedure->conclusion)
        <section class="section-spacing scroll-mt-32 bg-gray-100">
            <div class="container-narrow  bg-gray-100 ">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Conclusion</h2>
                <div class="prose max-w-none text-gray-700">{!! $procedure->conclusion !!}</div>
            </div>
        </section>
    @endif

    @if ($procedureDoctors->count())
        <section id="doctors" class="section-spacing bg-white scroll-mt-32">
            <div class="container-narrow">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        Doctors Who Perform {{ $procedure->title }}
                    </h2>
                    <p class="mt-3 text-gray-600">
                        Meet experienced {{ strtolower($relatedSpeciality?->name ?? 'specialist') }} doctors who regularly evaluate and perform {{ strtolower($procedure->title) }}.
                    </p>
                </div>

                <div class="mt-32 flex flex-wrap justify-center gap-32 md:gap-8 lg:gap-16 xl:gap-20">
                    @foreach ($procedureDoctors as $doctor)
                        <x-democard :doctor="$doctor" />
                    @endforeach
                </div>

                @if ($relatedSpeciality)
                    <div class="mt-12 text-center">
                        <a href="{{ route('specialities.show', $relatedSpeciality->slug) }}#doctors"
                            class="inline-flex items-center rounded-full border border-red-200 px-6 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                            View all {{ $relatedSpeciality->name }} doctors
                        </a>
                    </div>
                @endif
            </div>
        </section>
    @endif

   
{{-- <img src="{{ asset('assets/banners/speciality-banner.webp') }}" class="w-full" alt=""> --}}


    @if ($procedure->faqs && $procedure->faqs->count())
        <section id="faqs" class="section-spacing bg-white scroll-mt-32">
            <div class="container-narrow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-8">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    @foreach ($procedure->faqs as $faq)
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

        @php
            $faqSchema = [];

            foreach ($procedure->faqs as $faq) {
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

<section class="border-t border-green-100 bg-[#f0fdf4] py-8">
    <div class="container-narrow flex flex-col items-center justify-between gap-4 sm:flex-row sm:text-left">
        <p class="text-center text-gray-700 sm:text-left md:text-base">
            Prefer WhatsApp for {{ $procedure->title }} enquiries? We respond on chat during working hours.
        </p>
        <button type="button" onclick="openContact('whatsapp')"
            class="inline-flex shrink-0 items-center gap-2 rounded-full bg-[#25D366] px-6 py-3 text-sm font-semibold text-white shadow-md transition hover:bg-[#20bd5a]">
            <i class="fab fa-whatsapp text-lg" aria-hidden="true"></i>
            Chat on WhatsApp
        </button>
    </div>
</section>
    {{-- JS NAVIGATION --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pillButtons = document.querySelectorAll('.pill-btn');
            const sections = Array.from(pillButtons).map(btn => document.getElementById(btn.dataset.target));

            pillButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const target = document.getElementById(btn.dataset.target);
                    if (!target) return;

                    if (btn.dataset.tab) {
                        document.querySelectorAll('.vtab-btn').forEach(b => b.classList.remove('active'));
                        document.querySelectorAll('.vtab-panel').forEach(panel => panel.classList.add('hidden'));
                        const vtabBtn = document.querySelector(`.vtab-btn[data-tab="${btn.dataset.tab}"]`);
                        const panel = document.getElementById(btn.dataset.tab);
                        if (vtabBtn) vtabBtn.classList.add('active');
                        if (panel) panel.classList.remove('hidden');
                    }

                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: 'smooth'
                    });
                });
            });

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    if (!section) return;
                    const sectionTop = section.offsetTop - 150;
                    if (window.scrollY >= sectionTop) current = section.id;
                });
                pillButtons.forEach(btn => {
                    const isActive = btn.dataset.target === current;
                    // Keep Symptoms/Causes/Treatment pills tied to clinical-details section
                    btn.classList.toggle('active', isActive && (!btn.dataset.tab || btn.dataset.tab === 'tab-symptoms'));
                });
            });
        });
    </script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('introToggleBtn');
    const preview = document.getElementById('introPreview');
    const full = document.getElementById('introFull');

    if (!btn || !preview || !full) return;

    btn.addEventListener('click', function () {
        preview.classList.toggle('hidden');
        full.classList.toggle('hidden');
        btn.textContent = full.classList.contains('hidden') ? 'Read More' : 'Read Less';
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.vtab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.vtab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            document.querySelectorAll('.vtab-panel').forEach(panel => panel.classList.add('hidden'));
            document.getElementById(btn.dataset.tab).classList.remove('hidden');
        });
    });

    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const ans = btn.parentElement.querySelector('.faq-answer');
            const icon = btn.querySelector('span');
            ans.classList.toggle('hidden');
            icon.textContent = ans.classList.contains('hidden') ? '+' : '−';
        });
    });
});
</script>


@endsection
