@extends('layouts.app')

@section('title', $condition->meta_title ?? $condition->name . ' Treatment | Nano Hospitals')


@section('twitter_title', ($condition->meta_title ?? $condition->name) . ' Treatment | Nano Hospitals')
@section('twitter_description', filled($condition->meta_description) ? $condition->meta_description : $condition->name . ' treatment at Nano Hospitals Bangalore with experienced specialists.')
@section('meta_description', filled($condition->meta_description)
    ? $condition->meta_description
    : \Illuminate\Support\Str::limit(strip_tags($condition->name . ' treatment at Nano Hospitals Bangalore with experienced specialists.'), 155))
@section('og_image', asset('storage/' . $condition->icon))
@php
use Illuminate\Support\Str;




function renderConditionContent($data) {
    if (!$data) return;
    if (is_string($data) && Str::startsWith(trim($data), '[')) {
        $decoded = json_decode($data, true);
        if (json_last_error() === JSON_ERROR_NONE) { $data = $decoded; }
    }

    if (is_array($data)) {
        echo '<ul class="list-disc pl-5 space-y-3 text-gray-700 text-[17px]">';
        foreach ($data as $item) {
            $text = is_array($item) ? ($item['text'] ?? $item['value'] ?? implode(' ', $item)) : $item;
            echo "<li>{$text}</li>";
        }
        echo '</ul>';
    } else {
        echo '<div class="prose max-w-none text-gray-700 text-[17px]">' . $data . '</div>';
    }
}
@endphp

@section('content')

<style>
    .section-spacing { padding: 80px 0; }
    .container-narrow { max-width: 1100px; margin: auto; padding: 0 20px; }

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
    .pill-btn.active { background: #dc2626; color: #fff; }
    .pill-btn:hover { background: #fee2e2; color: #dc2626; }

    .card-clean {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
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
    .vtab-btn:hover { border-color: #dc2626; color: #dc2626; }
    .vtab-btn.active {
        background: #fff1f2;
        border-color: #dc2626;
        color: #dc2626;
    }

    .vtab-content h3 {
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #1f2937;
    }
</style>

{{-- HERO --}}
<section class="relative w-full h-[480px]">
    <img src="{{ asset('assets/banners/health-package-banner.png') }}" alt="Health Package Banner" class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-narrow text-white">
            <h2 class="text-4xl md:text-5xl font-semibold   mb-6">{{ $condition->name }}</h2>
            <p class="text-lg text-gray-200 max-w-xl mb-8">
                Expert diagnosis and advanced treatment pathways for {{ strtolower($condition->name) }}, prioritized for your recovery.
            </p>
            <a href="#" class="inline-block bg-red-600 text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-red-700 transition">
                CONSULT A SPECIALIST
            </a>
        </div>
    </div>
</section>


{{-- H1 --}}
@if($condition->h1)
    <h1 class="text-2xl md:text-3xl font-semibold  text-center text-gray-800 mt-5 mb-10">{{ $condition->h1 }}</h1>
@endif

{{-- ABOUT --}}
<section class="section-spacing bg-white">
    <div class="container-narrow grid md:grid-cols-3 gap-16">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Understanding {{ $condition->name }}</h2>
            <div class="w-16 h-[2px] bg-red-600"></div>
        </div>
        <div class="md:col-span-2 text-gray-600 leading-relaxed text-[17px]">
            {!! $condition->about !!}
            @if($condition->about_more)
                <div id="moreContent" class="hidden mt-4">{!! $condition->about_more !!}</div>
                <button id="readMoreBtn" class="mt-3 text-red-600 text-sm font-medium hover:underline flex items-center gap-1">
                    Read More <span>›</span>
                </button>
            @endif
        </div>
    </div>
</section>

{{-- NAVIGATION --}}
<div class="sticky top-0 z-40 bg-white border-b">
    <div class="container-narrow flex gap-3 py-3 overflow-x-auto no-scrollbar">
        @if($condition->overview)<button class="pill-btn active" data-target="overview">Overview</button>@endif
        <button class="pill-btn" data-target="clinical-details" data-tab="tab-symptoms">Symptoms</button>
        <button class="pill-btn" data-target="clinical-details" data-tab="tab-causes">Causes</button>
        <button class="pill-btn" data-target="treatment">Treatment</button>
        <button class="pill-btn" data-target="recovery">Outlook</button>
        @if ($condition->faqs && $condition->faqs->count())
            <button class="pill-btn" data-target="faqs">FAQs</button>
        @endif
    </div>
</div>



{{-- OVERVIEW --}}
@if($condition->overview)
<section id="overview" class="section-spacing bg-white scroll-mt-32">
    <div class="container-narrow">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Introduction</h2>

        <div class="card-clean bg-gray-50 border-none shadow-none">
            @php renderConditionContent($condition->about ); @endphp
            @php renderConditionContent($condition->about_more); @endphp
        </div>
    </div>
</section>
@endif

{{-- VERTICAL TABS: always show Symptoms / Causes / Risks / Diagnosis --}}
<section id="clinical-details" class="section-spacing bg-[#f8fafc] scroll-mt-32">
    <div class="container-narrow">
        <div class="grid md:grid-cols-3 gap-12 items-start">
            <div class="space-y-4">
                <button class="vtab-btn active" data-tab="tab-symptoms">Symptoms <span>›</span></button>
                <button class="vtab-btn" data-tab="tab-causes">Causes <span>›</span></button>
                <button class="vtab-btn" data-tab="tab-risks">Risks & Complications <span>›</span></button>
                <button class="vtab-btn" data-tab="tab-diagnosis">Diagnosis <span>›</span></button>
            </div>

            <div class="md:col-span-2 card-clean vtab-content min-h-[400px]">
                <div id="tab-symptoms" class="vtab-panel">
                    <h3>Common Symptoms</h3>
                    @php renderConditionContent($condition->symptoms); @endphp
                </div>

                <div id="tab-causes" class="vtab-panel hidden">
                    <h3>Causes & Triggers</h3>
                    @php renderConditionContent($condition->causes); @endphp
                </div>

                <div id="tab-risks" class="vtab-panel hidden">
                    <h3>Risks if Untreated</h3>
                    @php renderConditionContent($condition->risks); @endphp
                </div>

                <div id="tab-diagnosis" class="vtab-panel hidden">
                    <h3>Diagnosis & Prevention</h3>
                    @php renderConditionContent($condition->diagnosis); @endphp
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TREATMENT: always show --}}
<section id="treatment" class="section-spacing bg-white scroll-mt-32">
    <div class="container-narrow">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Treatment Options</h2>
        <div class="prose max-w-none">
            @php renderConditionContent($condition->treatment); @endphp
        </div>
    </div>
</section>

{{-- RECOVERY: always show --}}
<section id="recovery" class="section-spacing bg-[#f8fafc] scroll-mt-32 border-t">
    <div class="container-narrow">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Recovery & Outlook</h2>
        <div class="card-clean">
            @php renderConditionContent($condition->recovery); @endphp
        </div>
    </div>
</section>


@if ($condition->faqs && $condition->faqs->count())
<section id="faqs" class="section-spacing bg-white scroll-mt-32">
    <div class="container-narrow">
        <h2 class="text-2xl font-semibold text-gray-800 mb-8">Frequently Asked Questions</h2>
        <div class="space-y-4">
            @foreach ($condition->faqs as $faq)
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

    foreach ($condition->faqs as $faq) {
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

<img src="{{ asset('assets/banners/speciality-banner.webp') }}" class="w-full" alt="">

<script>
document.addEventListener('DOMContentLoaded', function () {
    const pillButtons = document.querySelectorAll('.pill-btn');
    const sections = Array.from(pillButtons).map(btn => document.getElementById(btn.dataset.target));

    /* CLICK SCROLL */
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

    /* SCROLL SPY */
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            if (!section) return;
            if (window.scrollY >= section.offsetTop - 150) {
                current = section.id;
            }
        });
        pillButtons.forEach(btn => {
            const isActive = btn.dataset.target === current;
            btn.classList.toggle('active', isActive && (!btn.dataset.tab || btn.dataset.tab === 'tab-symptoms'));
        });
    });

    /* VERTICAL TABS */
    document.querySelectorAll('.vtab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.vtab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            document.querySelectorAll('.vtab-panel').forEach(panel => panel.classList.add('hidden'));
            document.getElementById(btn.dataset.tab).classList.remove('hidden');
        });
    });

    /* READ MORE */
    document.getElementById('readMoreBtn')?.addEventListener('click', function () {
        const more = document.getElementById('moreContent');
        const isHidden = more.classList.toggle('hidden');
        this.innerHTML = isHidden ? 'Read More <span>›</span>' : 'Read Less <span>‹</span>';
    });

    /* FAQ ACCORDION */
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