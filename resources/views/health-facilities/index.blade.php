@extends('layouts.app')

@section('title')
    Hospital Facilities & Diagnostic Services in Bangalore | Nano Hospitals
    @if($facilities->currentPage() > 1)
        - Page {{ $facilities->currentPage() }}
    @endif
@endsection
@section('meta_description', 'Explore hospital facilities at Nano Hospitals Bangalore — 24x7 emergency, CT scan, MRI, dialysis, advanced lab, and diagnostic services at BG Road and Uttarahalli.')
@section('meta_keywords', 'all hospital facilities, hospital facilities in Bangalore, hospital facilities in India')
@section('content')

<div class="bg-[#F6F6F6] text-gray-900">

    <!-- FILTER HEADER -->
    <h1 class="text-gray-700 font-medium text-center text-xl p-5">
        Hospital Facilities & Diagnostic Services
    </h1>

    <!-- FILTER BAR -->
    <div class="w-full py-6 px-6">
        <form action="{{ route('health.facilities.index') }}" method="get" id="healthFacilityFilterForm"
              class="max-w-6xl mx-auto flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <!-- SEARCH -->
            <div class="relative w-full sm:w-[380px]">
                <input name="search" id="serviceSearch" type="text" placeholder="Search for Hospital Facility"
                    value="{{ request('search') }}"
                    class="w-full pl-5 pr-12 py-3 rounded-full bg-white shadow-md text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-400"/>
            </div>
            <!-- ALPHABET FILTER -->
            <div class="relative">
                <select name="letter" id="alphabetFilter"
                    class="appearance-none bg-red-500 text-white px-6 py-3 pr-10 rounded-full text-sm font-medium shadow-md cursor-pointer focus:outline-none">
                    <option value="">Sort By Alphabet</option>
                    @foreach(range('A','Z') as $letter)
                        <option value="{{ $letter }}" {{ request('letter') === $letter ? 'selected' : '' }}>{{ $letter }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    <!-- FACILITY CARDS (3 per row on xl) -->
    <section class="w-full py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        @forelse ($facilities as $facility)
            <a href="{{ route('health-facilities.show', $facility->slug) }}"
               class="group block bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-shadow h-full flex flex-col p-3">

                <!-- IMAGE (top) -->
                <div class="aspect-[16/9] overflow-hidden bg-gray-100">
                    <img src="{{ $facility->hero_background
                            ? asset('storage/' . $facility->hero_background)
                            : asset('images/default-facility.jpg') }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-lg"
                         alt="{{ $facility->hero_title }}">
                </div>

                <!-- CONTENT (below) -->
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-red-600 transition-colors">
                        {{ $facility->hero_title }}
                    </h3>
                    @php
                        $plainText = trim(preg_replace('/\s+/', ' ', strip_tags($facility->overview_content)));
                    @endphp
                    <p class="mt-2 text-gray-600 text-sm leading-relaxed flex-1">
                        {{ \Illuminate\Support\Str::limit($plainText, 100) }}
                    </p>
                    <span class="mt-4 inline-flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </span>
                </div>

            </a>
        @empty
            <div class="col-span-full text-center py-16 px-6">
                <p class="text-gray-600 text-lg">No facilities match your search or filter.</p>
                <a href="{{ route('health.facilities.index') }}" class="mt-4 inline-block text-red-500 font-medium hover:underline">Clear filters</a>
            </div>
        @endforelse

        </div>
    </section>

    @if ($facilities->hasPages())
        <div class="max-w-6xl mx-auto px-6 py-10 flex justify-center">
            {{ $facilities->links() }}
        </div>
    @endif

</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('healthFacilityFilterForm');
    var letterSelect = document.getElementById('alphabetFilter');
    if (form && letterSelect) {
        letterSelect.addEventListener('change', function () { form.submit(); });
    }
});
</script>
@endpush

@endsection
