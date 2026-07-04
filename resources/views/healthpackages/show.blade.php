@extends('layouts.app')

@section('title', $healthPackage->meta_title ?? $healthPackage->title)
@section('meta_description', filled($healthPackage->meta_description)
    ? $healthPackage->meta_description
    : \Illuminate\Support\Str::limit(strip_tags($healthPackage->title . ' - Nano Hospitals health package'), 155))
@section('og_image', asset('storage/' . $healthPackage->image))
@section('meta_keywords', $healthPackage->meta_keywords)

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

@section('content')

    {{-- ================= TOP PACKAGE SECTION ================= --}}
    <section class="w-full bg-white py-14">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-14">

                {{-- LEFT IMAGE --}}
                <div class="w-full lg:w-1/2">
                    <img src="{{ $healthPackage->image ? asset('storage/' . $healthPackage->image) : asset('assets/health-packages/default.png') }}"
                        alt="{{ $healthPackage->title }}" class="w-full h-[493px] rounded-2xl object-cover" />
                </div>

                {{-- RIGHT CONTENT --}}
                <div class="w-full lg:w-1/2">
                    <h1 class="text-2xl font-semibold text-gray-800 mb-2">
                        {{ $healthPackage->name }}
                    </h1>

                    <p class="text-sm text-gray-500 mb-3">
                        {{ $healthPackage->gender ?? 'Male / Female' }}
                    </p>
                    <div class="flex gap-10">
                        <p class="text-xl font-semibold text-gray-500 line-through mb-6">
                            ₹ {{ number_format($healthPackage->original_price) }}/-
                        </p>
                        <p class="text-xl font-semibold text-[#FA424A] mb-6">
                            ₹ {{ number_format($healthPackage->discount_price) }}/-
                        </p>
                    </div>


                    <button type="button"
                        data-open-appointment-modal
                        data-track="book-appointment"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-red-600 transition">
                        Book Now
                    </button>
                </div>

            </div>
        </div>
    </section>


    {{-- ================= ABOUT SECTION ================= --}}
    <section class="w-full bg-[#F5F5F5] py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">

                <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                    About Health Packages
                </h2>

                <div class="flex-1 md:pl-10">

                    <!-- Always Visible Intro -->
                    <div class="text-gray-500 text-sm md:text-base leading-relaxed">
                        {!! $healthPackage->about_intro !!}
                    </div>

                    <!-- Hidden More Content -->
                    @if ($healthPackage->about_more)
                        <div id="moreText" class="hidden mt-3 text-gray-600 text-sm leading-relaxed">
                            {!! $healthPackage->about_more !!}
                        </div>

                        <!-- Read More Button -->
                        <button type="button" onclick="toggleReadMore()"
                            class="inline-flex items-center gap-2 mt-3 text-red-500 font-medium text-sm hover:underline">
                            <span id="readMoreLabel">Read More</span>
                            <span id="readMoreArrow"
                                class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs transition-transform duration-300">
                                ›
                            </span>
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </section>



    {{-- ================= TESTS INCLUDED SECTION ================= --}}
    @if ($healthPackage->sections->count())
        <section class="w-full py-10 bg-gray-100">
            <div class="max-w-6xl mx-auto px-6">

                <h2 class="text-2xl font-bold text-gray-700 mb-8 text-center">
                    Tests Included in This Package
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start space-y-8">

                    @foreach ($healthPackage->sections as $index => $section)
                        <div x-data="{ open: false }"
                            class="break-inside-avoid mb-8 bg-white rounded-2xl shadow-[0_6px_18px_rgba(0,0,0,0.15)] p-6 md:p-8 w-full">

                            <!-- header -->
                            <div class="flex items-start gap-4 mb-5">
                                <div
                                    class="bg-[#FA424A] text-white w-10 h-10 flex items-center justify-center rounded-md text-sm font-semibold">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                                        {{ $section->title }}
                                    </h3>
                                    @if ($section->subtitle)
                                        <p class="text-sm text-gray-500">{{ $section->subtitle }}</p>
                                    @endif
                                </div>
                            </div>

                            <!-- list -->
                            <ul class="space-y-2 text-sm text-gray-600 pl-4">

                                @foreach ($section->items->take(4) as $item)
                                    <li class="relative pl-3">
                                        <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                                        {{ $item->item }}
                                    </li>
                                @endforeach

                                @foreach ($section->items->slice(4) as $item)
                                    <li x-show="open" x-transition class="relative pl-3">
                                        <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                                        {{ $item->item }}
                                    </li>
                                @endforeach

                            </ul>

                            @if ($section->items->count() > 4)
                                <div class="mt-4">
                                    <button @click="open = !open"
                                        class="text-[#FA424A] text-sm font-medium hover:underline focus:outline-none">
                                        <span x-text="open ? 'View Less' : 'View More'"></span>
                                    </button>
                                </div>
                            @endif

                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @endif



    {{-- ================= RELATED PACKAGES ================= --}}
    <section class="container mx-auto px-4 py-12">
        <h3 class="text-xl md:text-2xl font-bold text-[#5E5E5E] text-center p-5">
            Related Health Packages
        </h3>

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-8 justify-items-center">

            @foreach ($relatedPackages as $package)
                <div
                    class="group w-[280px] bg-white rounded-3xl p-3 border border-dashed border-gray-300 shadow-md hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 transition">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="{{ $package->image ? asset('storage/' . $package->image) : asset('assets/health-packages/default.png') }} "
                            alt="{{ $package->name }} Image" class="w-full h-[160px] object-cover" />
                    </div>

                    <div class="text-center mt-4 px-2">
                        <h3 class="text-lg font-semibold text-gray-700">{{ $package->name }}</h3>

                        <div class="flex justify-center items-center gap-3 mt-2">
                            <span class="text-gray-400 line-through text-sm">
                                ₹ {{ number_format($package->original_price) }}
                            </span>
                            <span class="text-red-500 font-semibold text-lg">
                                ₹ {{ number_format($package->discount_price) }}
                            </span>
                        </div>

                        <div class="flex justify-center gap-4 mt-4">
                            <a href="{{ route('packages.show', $package->slug) }}"
                                class="px-5 py-2 text-sm font-medium rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                                Know More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <script>
        function toggleReadMore() {
            const moreText = document.getElementById("moreText");
            const label = document.getElementById("readMoreLabel");
            const arrow = document.getElementById("readMoreArrow");

            if (moreText.classList.contains("hidden")) {
                moreText.classList.remove("hidden");
                label.textContent = "Read Less";
                arrow.style.transform = "rotate(90deg)";
            } else {
                moreText.classList.add("hidden");
                label.textContent = "Read More";
                arrow.style.transform = "rotate(0deg)";
            }
        }
    </script>

@endsection
