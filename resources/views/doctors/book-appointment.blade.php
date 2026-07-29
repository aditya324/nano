@extends('layouts.app')

@section('title', 'Book An Appointment | Find Doctors')
@section('robots', 'noindex, follow')

@section('meta_description', 'Find and book appointments with Nano Hospitals doctors by branch and speciality in Bangalore.')

@section('content')
    @php
        $preferredFacilityKey = match ($selectedBranch) {
            'Uttarahalli' => 'uttarahalli',
            'Hulimavu' => 'hulimavu',
            default => null,
        };
    @endphp

    <form method="GET" action="{{ route('book-appointment.doctors') }}" id="appointmentDoctorFilterForm">
        <div class="max-w-[1200px] mx-auto px-4 mt-6 lg:mt-10 pb-16">
            <section class="mb-8 rounded-2xl border border-gray-200 bg-white px-4 py-6 md:px-8 md:py-8 shadow-sm">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900">
                    Expert medical care at your fingertips
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Select your branch and speciality — we will show doctors who consult near you
                </p>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 gap-3">
                    <div class="xl:col-span-4">
                        <label for="doctorSearch" class="sr-only">Search doctors</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-magnifying-glass text-sm"></i>
                            </span>
                            <input
                                type="text"
                                id="doctorSearch"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Search for doctors or specialities"
                                class="w-full rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            />
                        </div>
                    </div>

                    <div class="xl:col-span-2">
                        <label for="branchFilter" class="sr-only">Select branch</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-location-dot text-sm"></i>
                            </span>
                            <select
                                id="branchFilter"
                                class="doctor-filter-control w-full appearance-none rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-10 text-sm text-gray-800 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            >
                                <option value="">Please Select Branch</option>
                                @foreach ($branches as $key => $branch)
                                    <option value="{{ $key }}" {{ $selectedBranch === $key ? 'selected' : '' }}>
                                        {{ $branch['label'] }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </span>
                        </div>
                    </div>

                    <div class="xl:col-span-3">
                        <label for="localityInput" class="sr-only">Your area</label>
                        <input
                            type="text"
                            id="localityInput"
                            placeholder="Your area or locality"
                            class="w-full rounded-lg border border-gray-200 bg-white py-3 px-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                        />
                        <button
                            type="button"
                            id="useMyLocationBtn"
                            class="mt-1.5 inline-flex items-center gap-1.5 text-sm font-medium text-sky-600 hover:text-sky-700"
                        >
                            <i class="fa-solid fa-crosshairs text-xs"></i>
                            Use My Location
                        </button>
                        <p id="locationStatus" class="hidden mt-1 text-xs text-gray-500"></p>
                    </div>

                    <div class="xl:col-span-3">
                        <label for="specialtyFilter" class="sr-only">Speciality</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-stethoscope text-sm"></i>
                            </span>
                            <select
                                id="specialtyFilter"
                                name="specialty"
                                class="doctor-filter-control w-full appearance-none rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-10 text-sm text-gray-800 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            >
                                <option value="">All Specialities</option>
                                @foreach ($specialities as $spec)
                                    <option value="{{ $spec->name }}" {{ $selectedSpecialty === $spec->name ? 'selected' : '' }}>
                                        {{ $spec->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <p id="branchContext" class="mt-5 text-sm text-gray-600">
                    @if ($selectedBranch)
                        Doctors in Bangalore: <span class="font-semibold text-gray-800">{{ $selectedBranch === 'Hulimavu' ? 'BG Road' : $selectedBranch }}</span>
                        @if ($selectedSpecialty)
                            · <span class="font-semibold text-gray-800">{{ $selectedSpecialty }}</span>
                        @endif
                    @else
                        Doctors in Bangalore
                        @if ($selectedSpecialty)
                            · <span class="font-semibold text-gray-800">{{ $selectedSpecialty }}</span>
                        @endif
                    @endif
                </p>
            </section>

            <div class="space-y-6">
                @forelse($doctors as $doctor)
                    <x-newdoctorcard :doctor="$doctor" :preferred-facility-key="$preferredFacilityKey" />
                @empty
                    <div class="rounded-2xl border border-gray-200 bg-white px-6 py-12 text-center">
                        <p class="text-gray-600 font-medium">No doctors found for the selected filters.</p>
                        <p class="mt-2 text-sm text-gray-500">Try changing the branch or speciality.</p>
                    </div>
                @endforelse

                @if ($doctors->hasPages())
                    <div class="flex justify-center mt-10">
                        {{ $doctors->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </form>

    <script>
        const branches = @json($branches);
        const bookAppointmentDoctorsUrl = @json(route('book-appointment.doctors'));

        function distanceKm(lat1, lon1, lat2, lon2) {
            const toRad = (deg) => deg * Math.PI / 180;
            const R = 6371;
            const dLat = toRad(lat2 - lat1);
            const dLon = toRad(lon2 - lon1);
            const a = Math.sin(dLat / 2) ** 2
                + Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) * Math.sin(dLon / 2) ** 2;
            return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        }

        function nearestBranch(lat, lng) {
            let nearest = null;
            let minDistance = Infinity;

            Object.entries(branches).forEach(([key, branch]) => {
                const dist = distanceKm(lat, lng, branch.lat, branch.lng);
                if (dist < minDistance) {
                    minDistance = dist;
                    nearest = { key, branch, distance: dist };
                }
            });

            return nearest;
        }

        function buildParams() {
            const params = new URLSearchParams();
            const search = document.getElementById('doctorSearch').value.trim();
            const branch = document.getElementById('branchFilter').value;
            const specialty = document.getElementById('specialtyFilter').value;

            if (search) params.set('search', search);
            if (branch) params.append('location[]', branch);
            if (specialty) params.append('specialty[]', specialty);

            return params;
        }

        function applyFilters() {
            const params = buildParams();
            window.location = bookAppointmentDoctorsUrl + (params.toString() ? '?' + params.toString() : '');
        }

        function updateBranchContext() {
            const branch = document.getElementById('branchFilter').value;
            const specialty = document.getElementById('specialtyFilter').value;
            const contextEl = document.getElementById('branchContext');

            let text = 'Doctors in Bangalore';
            if (branch) {
                const branchLabel = branch === 'Hulimavu' ? 'BG Road' : branch;
                text += ': <span class="font-semibold text-gray-800">' + branchLabel + '</span>';
            }
            if (specialty) {
                text += (branch ? ' · ' : ': ') + '<span class="font-semibold text-gray-800">' + specialty + '</span>';
            }

            contextEl.innerHTML = text;
        }

        document.querySelectorAll('.doctor-filter-control').forEach(function (el) {
            el.addEventListener('change', function () {
                updateBranchContext();
                applyFilters();
            });
        });

        let searchTimeout;
        document.getElementById('doctorSearch').addEventListener('input', function () {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(applyFilters, 500);
        });

        document.getElementById('doctorSearch').addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                applyFilters();
            }
        });

        const useLocationBtn = document.getElementById('useMyLocationBtn');
        const localityInput = document.getElementById('localityInput');
        const locationStatus = document.getElementById('locationStatus');
        const branchFilter = document.getElementById('branchFilter');

        useLocationBtn.addEventListener('click', function () {
            if (!navigator.geolocation) {
                locationStatus.textContent = 'Location is not supported on this device.';
                locationStatus.classList.remove('hidden');
                return;
            }

            useLocationBtn.disabled = true;
            locationStatus.textContent = 'Detecting your location...';
            locationStatus.classList.remove('hidden');

            navigator.geolocation.getCurrentPosition(
                function (position) {
                    const { latitude, longitude } = position.coords;
                    const match = nearestBranch(latitude, longitude);

                    if (!match) {
                        locationStatus.textContent = 'Could not determine the nearest branch.';
                        useLocationBtn.disabled = false;
                        return;
                    }

                    branchFilter.value = match.key;
                    localityInput.value = match.branch.label + ' (' + match.distance.toFixed(1) + ' km away)';
                    locationStatus.textContent = 'Nearest branch: ' + (match.key === 'Hulimavu' ? 'BG Road' : match.branch.label);
                    updateBranchContext();
                    applyFilters();
                },
                function () {
                    locationStatus.textContent = 'Unable to access your location. Please allow location permission or select a branch manually.';
                    useLocationBtn.disabled = false;
                },
                { enableHighAccuracy: true, timeout: 12000, maximumAge: 300000 }
            );
        });

        @if ($selectedBranch)
            localityInput.value = @json($selectedBranch === 'Hulimavu' ? 'BG Road' : $selectedBranch);
        @endif
    </script>

    @include('doctors.partials.doctor-inline-slots-script')
@endsection
