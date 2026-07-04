@extends('layouts.app')

@section('title')
    Best Doctors and Surgeons in Bangalore
    @if($doctors->currentPage() > 1)
        - Page {{ $doctors->currentPage() }}
    @endif
@endsection

@section('twitter_title', 'Best Doctors and Surgeons in Bangalore | Nano Hospitals')
@section('twitter_description', 'Meet our team of experienced doctors and surgeons at Nano Hospitals Bangalore — specialists in cardiology, orthopaedics, neurology, oncology and more.')
@section('canonical', request('page') > 1 ? url()->current() . '?page=' . request('page') : url()->current())
@section('meta_description')
Meet experienced doctors and surgeons at Nano Hospitals Bangalore — specialists in cardiology, orthopaedics, neurology, oncology, maternity, and more at BG Road and Uttarahalli.
    @if($doctors->currentPage() > 1)
        - Page {{ $doctors->currentPage() }}
    @endif
@endsection
@section('meta_keywords', 'Best Doctors and Surgeons in Bangalore, Nano Hospitals, Best Doctors, Best Surgeons')

@push('styles')
    <style>
        .experts-text {
            display: none;
        }
    </style>
@endpush


@section('content')
    <form method="GET" action="{{ route('doctors.index') }}" id="filterForm">

        <div class="max-w-[1200px] mx-auto px-4 mt-6 lg:mt-10">
            <section class="mb-8 border border-red-400 rounded-xl  px-4 py-5 md:px-6 md:py-6">
                <h1 class="text-center text-red-500 text-3xl font-semibold mb-2">Our Experts</h1>
                <p class="text-center text-[#1f1f1f] text-xl md:text-2xl font-semibold mb-4">
                    Best actions demonstrated Doctors and Surgeons in Bangalore
                </p>
                <p class="text-[#2f2f2f] text-base md:text-lg leading-8">
                    Nano Hospitals Bangalore is trusted for experienced specialists across multiple medical conditions. Our
                    doctors manage both routine and complex cases with evidence-based treatment, modern diagnostics, and
                    compassionate care. With dedicated teams in Hulimavu and Uttarahalli, we provide reliable inpatient and
                    outpatient services for families across the city.
                    <span id="expertsMoreText" class="hidden">
                        From consultations to advanced procedures, our teams focus on accurate diagnosis, personalized
                        treatment plans, and compassionate support at every stage of care.
                    </span>
                    <button type="button" id="expertsReadToggle" onclick="toggleExpertsText()"
                        class="ml-1 text-red-500 font-semibold underline">
                        Read more
                    </button>
                </p>
            </section>

            <!-- MOBILE FILTER BUTTONS -->
            <div class="flex gap-3 mb-6 lg:hidden">
                <button type="button" onclick="openFilter()" class="flex-1 px-4 py-2 border rounded-full text-sm">
                    Specialty
                </button>

            </div>

            <!-- SEARCH BAR -->
            <div class="mb-6">
                <input type="text" id="doctorSearch" value="{{ request('search') }}"
                    placeholder="Search doctor by name..."
                    class="w-full lg:w-96 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <div class="flex gap-10">

                <!-- SIDEBAR -->
                <aside class="w-64 hidden lg:block space-y-10">

                    @php
                        $locations = ['Uttarahalli', 'Hulimavu', 'Both'];
                    @endphp

                    <!-- LOCATION -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700 mb-4 uppercase">Locations</h3>
                        <div class="space-y-3">
                            @foreach ($locations as $loc)
                                <label class="flex items-center gap-2 text-sm cursor-pointer ">
                                    <input type="checkbox" name="location[]" value="{{ $loc }}"
                                        class="rounded border-gray-300 filter-checkbox accent-red-500"
                                        {{ in_array($loc, (array) request('location')) ? 'checked' : '' }}>
                                    {{ $loc }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- SPECIALITIES -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700 mb-4 uppercase ">Specialities</h3>
                        <div class="space-y-3 mb-10">
                            @foreach ($specialities as $spec)
                                <label class="flex items-center gap-2 text-sm cursor-pointer ">
                                    <input type="checkbox" name="specialty[]" value="{{ $spec->name }}"
                                        class="rounded border-gray-300 filter-checkbox accent-red-500"
                                        {{ in_array($spec->name, (array) request('specialty')) ? 'checked' : '' }}>
                                    {{ $spec->name }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                </aside>

                <!-- DOCTORS LIST -->
                <div class="flex-1 space-y-6">

                    @forelse($doctors as $doctor)
                        <x-newdoctorcard :doctor="$doctor" />
                    @empty
                        <p class="text-gray-500 text-center">No doctors found.</p>
                    @endforelse

                    <div class="flex justify-center m-10">
                        {{ $doctors->withQueryString()->links() }}
                    </div>

                </div>

            </div>

        </div>

        <!-- MOBILE FILTER OVERLAY -->
        <div id="filterOverlay" class="fixed inset-0 bg-black/40 hidden z-50 flex items-end">
            <div class="bg-white w-full rounded-t-3xl p-6 max-h-[85vh] overflow-y-auto">

                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-semibold">Filters</h2>
                    <button type="button" onclick="closeFilter()" class="text-gray-500 text-xl">✕</button>
                </div>

                <!-- MOBILE LOCATION -->
                <div class="mb-8">
                    <h3 class="text-sm font-semibold mb-4 uppercase text-gray-700">Locations</h3>
                    <div class="space-y-3">
                        @foreach ($locations as $loc)
                            <label class="flex items-center gap-3 text-sm">
                                <input type="checkbox" name="mobile_location[]" value="{{ $loc }}"
                                    class="rounded mobile-filter-checkbox"
                                    {{ in_array($loc, (array) request('location')) ? 'checked' : '' }}>
                                {{ $loc }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- MOBILE SPECIALITIES -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold mb-4 uppercase text-gray-700">Specialities</h3>
                    <div class="space-y-3">
                        @foreach ($specialities as $spec)
                            <label class="flex items-center gap-3 text-sm">
                                <input type="checkbox" name="mobile_specialty[]" value="{{ $spec->name }}"
                                    class="rounded mobile-filter-checkbox "
                                    {{ in_array($spec->name, (array) request('specialty')) ? 'checked' : '' }}>
                                {{ $spec->name }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="flex gap-4 mt-8">
                    <button type="button" onclick="resetFilters()"
                        class="flex-1 border border-red-500 text-red-500 py-3 rounded-full">
                        Reset
                    </button>
                    <button type="button" onclick="applyMobileFilters()"
                        class="flex-1 bg-red-500 text-white py-3 rounded-full">
                        Apply
                    </button>
                </div>

            </div>
        </div>

    </form>

    <script>
        function buildParams() {
            const params = new URLSearchParams();

            const search = document.getElementById('doctorSearch').value.trim();
            if (search) {
                params.append('search', search);
            }

            document.querySelectorAll('.filter-checkbox:checked').forEach(function(checkbox) {
                params.append(checkbox.name, checkbox.value);
            });

            return params;
        }

        document.querySelectorAll('.filter-checkbox').forEach(function(el) {
            el.addEventListener('change', function() {
                if (this.name === 'location[]' && this.checked) {
                    document.querySelectorAll('input[name="location[]"]').forEach(function(other) {
                        if (other !== el) {
                            other.checked = false;
                        }
                    });
                }

                window.location = "{{ route('doctors.index') }}" + "?" + buildParams().toString();
            });
        });

        document.querySelectorAll('input[name="mobile_location[]"]').forEach(function(el) {
            el.addEventListener('change', function() {
                if (!this.checked) return;

                document.querySelectorAll('input[name="mobile_location[]"]').forEach(function(other) {
                    if (other !== el) {
                        other.checked = false;
                    }
                });
            });
        });

        let searchTimeout;
        document.getElementById('doctorSearch').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                window.location = "{{ route('doctors.index') }}" + "?" + buildParams().toString();
            }
        });

        document.getElementById('doctorSearch').addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(function() {
                window.location = "{{ route('doctors.index') }}" + "?" + buildParams().toString();
            }, 500);
        });

        function applyMobileFilters() {
            const params = new URLSearchParams();

            const search = document.getElementById('doctorSearch').value.trim();
            if (search) {
                params.append('search', search);
            }

            document.querySelectorAll('.mobile-filter-checkbox:checked').forEach(function(checkbox) {
                const key = checkbox.name
                    .replace('mobile_location[]', 'location[]')
                    .replace('mobile_specialty[]', 'specialty[]');
                params.append(key, checkbox.value);
            });

            window.location = "{{ route('doctors.index') }}" + "?" + params.toString();
        }

        function openFilter() {
            document.getElementById("filterOverlay").classList.remove("hidden");
        }

        function closeFilter() {
            document.getElementById("filterOverlay").classList.add("hidden");
        }

        function resetFilters() {
            window.location.href = "{{ route('doctors.index') }}";
        }

        document.getElementById('filterOverlay').addEventListener('click', function(e) {
            if (e.target === this) closeFilter();
        });

        function toggleExpertsText() {
            const moreText = document.getElementById('expertsMoreText');
            const toggleBtn = document.getElementById('expertsReadToggle');

            const isHidden = moreText.classList.contains('hidden');
            moreText.classList.toggle('hidden');
            toggleBtn.textContent = isHidden ? 'Read less' : 'Read more';
        }
    </script>
@endsection
