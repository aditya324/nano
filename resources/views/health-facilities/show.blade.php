@extends('layouts.app')

@section('title', $facility->meta_title ?? $facility->hero_title)

@section('meta_description', filled($facility->meta_description)
    ? $facility->meta_description
    : \Illuminate\Support\Str::limit(strip_tags($facility->hero_title . ' - Nano Hospitals health facility'), 155))
@section('og_image', asset('storage/' . $facility->hero_background))

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





<style>
/* Clean up CMS list styling */
.benefit-pointers ul {
    list-style-type: disc;
    padding-left: 1.25rem;
    margin-bottom: 0;
}

.benefit-pointers li {
    margin-bottom: 0.5rem;
}

/* Remove extra spacing from <p> inside <li> */
.benefit-pointers li p {
    display: inline;
    margin: 0;
}

/* If editor adds plain paragraphs instead of lists */
.benefit-pointers > p {
    position: relative;
    padding-left: 1.25rem;
    margin-bottom: 0.5rem;
}

.benefit-pointers > p::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #dc2626;
    font-weight: bold;
}
</style>


    {{-- HERO --}}
    <section class="relative w-full h-[750px]">
        <img src="{{ $facility->hero_background ? asset('storage/' . $facility->hero_background) : asset('images/default-banner.jpg') }} " alt="{{ $facility->hero_title }} Banner"
            class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 h-full flex items-center">
            <div class="container-narrow text-white text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-semibold mb-6">{{ $facility->hero_title }}</h1>
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

    {{-- ABOUT --}}
   <section class="section-spacing  bg-gray-100">
    <div class="container-narrow grid md:grid-cols-3 gap-16">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                About {{ $facility->hero_title }}
            </h2>
            <div class="w-16 h-[2px] bg-red-600"></div>
        </div>


     
        <div class="md:col-span-2 text-gray-600 leading-relaxed text-[17px] ">
            <div class="pointer-content">
                {!! $facility->about_intro !!}
            </div>

            @if ($facility->about_more)
                <div id="moreContent" class="hidden mt-4 pointer-content">
                    {!! $facility->about_more !!}
                </div>
                <button id="readMoreBtn"
                        class="mt-3 text-red-600 text-sm font-medium hover:underline">
                    Read More
                </button>
            @endif
        </div>
    </div>
</section>


    {{-- NAVIGATION --}}
    <div class="sticky top-0 z-40 bg-white mt-10">
        <div class="container-narrow flex gap-3 py-3 overflow-x-auto no-scrollbar">
            <button class="pill-btn active" data-target="overview">Overview</button>
            <button class="pill-btn" data-target="workflow-section">Process</button>
            <button class="pill-btn" data-target="benefits">Benefits</button>
            <button class="pill-btn" data-target="risks">Risks</button>
            <button class="pill-btn" data-target="faqs">FAQs</button>
        </div>
    </div>

    {{-- OVERVIEW --}}
    <section id="overview" class="section-spacing bg-white scroll-mt-32">
        <div class="container-narrow">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Overview</h2>
            <div class="text-gray-700 leading-relaxed prose max-w-none">{!! $facility->overview_content !!}</div>
        </div>
    </section>

    {{-- VERTICAL TABS (Workflow & Delivery) --}}
    <section id="workflow-section" class="section-spacing bg-[#f8fafc] scroll-mt-32">
        <div class="container-narrow">
            <div class="grid md:grid-cols-3 gap-12 items-start">
                <div class="space-y-4">
                    <button class="vtab-btn active" data-tab="tab-workflow">How It Works <span>›</span></button>
                    <button class="vtab-btn" data-tab="tab-delivery">Service Delivery <span>›</span></button>
                    <button class="vtab-btn" data-tab="tab-advantages">Why Choose Us <span>›</span></button>
                </div>

                <div class="md:col-span-2 card-clean vtab-content">

    <div id="tab-workflow" class="vtab-panel">
        <h3 class="text-xl font-semibold mb-4">Workflow</h3>
        <div class="pointer-content">
            {!! $facility->workflow_content !!}
        </div>
    </div>

    <div id="tab-delivery" class="vtab-panel hidden">
        <h3 class="text-xl font-semibold mb-4">Delivery Methods</h3>
        <div class="pointer-content">
            {!! $facility->delivery_content !!}
        </div>
    </div>

    <div id="tab-advantages" class="vtab-panel hidden">
        <h3 class="text-xl font-semibold mb-4">Unique Advantages</h3>
        <div class="pointer-content">
            {!! $facility->advantages_content !!}
        </div>
    </div>

</div>

            </div>
        </div>
    </section>

{{-- BENEFITS --}}
@php
    $html = $facility->benefits_content ?? '';
    preg_match_all('/<h3.*?>(.*?)<\/h3>(.*?)(?=<h3|$)/si', $html, $matches, PREG_SET_ORDER);
@endphp








<section id="benefits" class="section-spacing bg-white scroll-mt-32">
    <div class="container-narrow">
        <h2 class="text-2xl font-semibold text-red-500 mb-10 text-center">Benefits & Value</h2>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($matches as $section)
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        {!! $section[1] !!}
                    </h3>

                    <div class="benefit-pointers text-gray-700 leading-relaxed">
                        {!! $section[2] !!}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>




    {{-- RISKS (Array Cleaned) --}}
    <section id="risks" class="section-spacing bg-[#f8fafc] scroll-mt-32">
        <div class="container-narrow">
            <h2 class="text-2xl font-semibold text-red-500 mb-6 text-center">Risks & Challenges</h2>
            @php
                $risksRaw = $facility->risks_content;
                $risksClean = str_replace(['</p>', '<br>', '<br/>', '<br />'], '|', $risksRaw);
                $risksClean = str_replace('<p>', '', $risksClean);
                $risksArray = array_filter(array_map('trim', explode('|', strip_tags($risksClean, '<a><strong>'))));
            @endphp
            <ul class="grid md:grid-cols-2 gap-4">
                @foreach ($risksArray as $risk)
                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="text-red-500 mt-1">•</span>
                        <span>{!! $risk !!}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- FAQ dropdown accordion: use structured FAQs first, fallback to legacy faqs_content --}}
    @if (!empty($facility->faqs) || $facility->faqs_content)
        @php
            $structuredFaqs = collect($facility->faqs ?? [])
                ->filter(fn ($item) => filled($item['question'] ?? null) && filled($item['answer'] ?? null))
                ->values();
            $faqHtml = $facility->faqs_content;
            preg_match_all('/<h([234])[^>]*>(.*?)<\/h\1>(.*?)(?=<h[234]\s|$)/si', $faqHtml ?? '', $faqMatches, PREG_SET_ORDER);
        @endphp
        <section id="faqs" class="section-spacing bg-white scroll-mt-32">
            <div class="container-narrow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-8">Frequently Asked Questions</h2>
                <div class="space-y-3">
                    @if ($structuredFaqs->isNotEmpty())
                        @foreach ($structuredFaqs as $faq)
                            <details class="group rounded-xl border border-gray-200 bg-white shadow-sm">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-gray-800">
                                    <span class="text-base md:text-lg">{{ $faq['question'] }}</span>
                                    <span class="text-xl text-red-600 transition-transform duration-200 group-open:rotate-45">+</span>
                                </summary>
                                <div class="border-t border-gray-100 px-5 py-4 text-gray-600 leading-relaxed prose prose-sm max-w-none">
                                    {!! $faq['answer'] !!}
                                </div>
                            </details>
                        @endforeach
                    @elseif (count($faqMatches) > 0)
                        @foreach ($faqMatches as $faq)
                            <details class="group rounded-xl border border-gray-200 bg-white shadow-sm">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-gray-800">
                                    <span class="text-base md:text-lg">{!! $faq[2] !!}</span>
                                    <span class="text-xl text-red-600 transition-transform duration-200 group-open:rotate-45">+</span>
                                </summary>
                                <div class="border-t border-gray-100 px-5 py-4 text-gray-600 leading-relaxed prose prose-sm max-w-none">
                                    {!! trim($faq[3]) !!}
                                </div>
                            </details>
                        @endforeach
                    @else
                        <details class="group rounded-xl border border-gray-200 bg-white shadow-sm">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-gray-800">
                                <span class="text-base md:text-lg">Frequently Asked Questions</span>
                                <span class="text-xl text-red-600 transition-transform duration-200 group-open:rotate-45">+</span>
                            </summary>
                            <div class="border-t border-gray-100 px-5 py-4 text-gray-600 leading-relaxed prose prose-sm max-w-none">
                                {!! $facility->faqs_content !!}
                            </div>
                        </details>
                    @endif
                </div>
            </div>
        </section>
    @endif



    <img src="{{ asset('assets/banners/speciality-banner.webp') }}" alt="{{ $facility->hero_title }} Banner" class="w-full" alt="">

        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pillButtons = document.querySelectorAll('.pill-btn');
            const sections = Array.from(pillButtons).map(btn => document.getElementById(btn.dataset.target));

            /* CLICK SCROLL */
            pillButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const target = document.getElementById(btn.dataset.target);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            /* SCROLL SPY */
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
                });
            });

            /* READ MORE */
            document.getElementById('readMoreBtn')?.addEventListener('click', function() {
                const more = document.getElementById('moreContent');
                more.classList.toggle('hidden');
                this.textContent = more.classList.contains('hidden') ? 'Read More' : 'Read Less';
            });

        });
    </script>

@endsection
