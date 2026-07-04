@extends('layouts.app')

@section('title')
    Nano Hospital Health Packages
    @if($packages->currentPage() > 1)
        - Page {{ $packages->currentPage() }}
    @endif
@endsection
@section('meta_description', 'Browse preventive health checkup packages at Nano Hospitals Bangalore — basic, executive, diabetic, senior citizen, and specialty screening packages.')
@section('meta_keywords', 'nano hospital health packages, health packages in Bangalore, health packages in India')
@section('canonical', request('page') > 1 ? url()->current() . '?page=' . request('page') : url()->current())
@push('styles')
<style>
.orbit-ring { animation: rotate 30s linear infinite; }
@keyframes rotate { from { transform: rotate(0deg);} to { transform: rotate(360deg);} }
.feature-card { transition: all 0.3s ease; }
.feature-card:hover { transform: translateY(-5px); }

.background{
    background-color: #e5e5e5
}
</style>
@endpush

@section('content')

{{-- ================= BANNER SECTION ================= --}}
<section class="relative w-full min-h-[520px]">
    <img src="{{ asset('assets/banners/health-package-banner.png') }}" alt="Health Package Banner"
         alt="Health Package Banner" class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
            <div class="flex flex-col justify-center items-center text-center text-white">
                <h1 class="text-3xl md:text-4xl font-bold">Complete Health Packages</h1>
                <p class="mt-2 text-lg">for proactive, preventive care.</p>
            </div>
            <div class="flex lg:justify-end justify-center items-center">
                {{-- form here --}}
            </div>
        </div>
    </div>
</section>

{{-- ================= ABOUT SECTION ================= --}}
<section class="w-full bg-[#F5F5F5] py-6">
    {{-- about content --}}
</section>

{{-- ================= PACKAGES SECTION ================= --}}
<section class="container mx-auto px-4 py-12">
    <h3 class="text-xl md:text-2xl font-bold text-center p-5">
        Popular Health Packages
    </h3>

    <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-8 justify-items-center">
        @foreach ($packages as $package)
            <div class="group w-[280px] bg-white rounded-3xl p-3 border border-dashed border-gray-300 shadow-md hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 transition">
                <div class="rounded-2xl overflow-hidden">
                    <img 
                        src="{{ $package->image ? asset('storage/'.$package->image) : asset('assets/health-packages/default.png') }}"
                        alt="{{ $package->name }}"
                        loading="lazy"
                        class="w-full h-40 sm:h-44 md:h-48 object-cover"
                    >
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

    <div class="mt-10">
        {{ $packages->links() }}
    </div>
</section>


 <section class="w-full background py-28 mt-20">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-12">
                Why Nano Health Packages
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/icons/24-hours.png') }}" alt="24x7" class="w-12 h-12 object-contain">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Highly advanced labs,<br />
                        operational 24x7
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/icons/microscope.png') }}" alt="NABL Lab" class="w-12 h-12 object-contain">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        NABL accredited, world-class<br />
                        pathology lab
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/icons/test-tube.png') }}" alt="Test menu" class="w-12 h-12 object-contain">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Expansive test menu with nationally
                        and internationally recommended tests
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/icons/lab.png') }}" alt="Lab" class="w-12 h-12 object-contain">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Faster turnaround time for timely
                        diagnosis of severe/chronic conditions
                    </p>
                </div>

            </div>
        </div>
    </section>
 <section class="w-full bg-[#F2F2F2]">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2">

            <!-- LEFT CONTENT -->
            <div class="flex items-center px-8 lg:px-16 py-14">
                <div class="max-w-md">
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        A Complete Range Diagnostic<br />
                        Tests, Available Individually at<br />
                        Nano Hospitals at Affordable Costs
                    </p>

                    <a
                        href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-6 py-3 rounded-full
                 text-sm font-semibold
                 hover:bg-red-600 transition">
                        Know More
                    </a>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[360px] overflow-hidden">
                <img
                    src="{{ asset('assets/banners/range-diagnostic.png') }}"
                    alt="Diagnostic Tests"
                    class="absolute inset-0 w-full h-full object-cover" />
            </div>

        </div>
    </section>
@endsection
