@php
    $timezone = config('services.karexpert.timezone', 'Asia/Kolkata');
    $initialDate = $slotDate->toDateString();
    $todayDate = now($timezone)->toDateString();
    $sidebar = $sidebar ?? false;

    $doctorFacilityKeys = match (strtolower(trim((string) ($doctor->location ?? '')))) {
        'both' => ['uttarahalli', 'hulimavu'],
        'uttarahalli' => ['uttarahalli'],
        'hulimavu' => ['hulimavu'],
        default => array_keys($facilityLocations),
    };

    $visibleFacilityLocations = array_intersect_key(
        $facilityLocations,
        array_flip($doctorFacilityKeys)
    );

    if ($visibleFacilityLocations === []) {
        $visibleFacilityLocations = $facilityLocations;
    }

    $initialFacilityKey = array_key_first($visibleFacilityLocations) ?: 'uttarahalli';
@endphp

<div class="{{ $sidebar ? 'mb-0' : 'mb-8' }} w-full {{ $sidebar ? 'rounded-lg border border-gray-200 shadow-sm' : 'rounded-3xl border border-gray-100 shadow-lg' }} bg-white overflow-hidden">
    @if($sidebar)
        <div class="flex items-center justify-between bg-red-50 border-b border-red-100 px-4 py-3">
            <div class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                <svg class="h-4 w-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Clinic Appointment
            </div>
            <span class="text-xs font-medium text-gray-500">Consultation</span>
        </div>
        <div class="border-b border-gray-100 px-4 py-3">
            <p class="text-sm font-semibold text-gray-900">Nano Hospitals</p>
            <p class="text-xs text-gray-500 mt-0.5">{{ $doctorLocationLabel ?? $doctor->location }}</p>
            @if(count($visibleFacilityLocations) > 1)
                <div class="mt-3 flex flex-wrap gap-2 book-clinic-location-tabs">
                    @foreach($visibleFacilityLocations as $key => $location)
                        <button
                            type="button"
                            data-location-key="{{ $key }}"
                            data-facility-id="{{ $location['facilityId'] }}"
                            data-slot-facility-id="{{ $location['slotFacilityId'] }}"
                            class="book-clinic-location-tab rounded-full border px-4 py-1.5 text-xs font-semibold transition {{ $loop->first ? 'border-red-500 bg-red-500 text-white' : 'border-gray-300 bg-white text-gray-600 hover:border-red-300' }}"
                        >
                            {{ $key === 'uttarahalli' ? 'Uttarahalli' : 'BG Road' }}
                        </button>
                    @endforeach
                </div>
            @endif
        </div>
    @else
        <div class="border-b border-gray-100 px-5 py-4 sm:px-8">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-lg font-semibold text-gray-800">
                    Book an appointment for <span class="font-bold">Consultation</span>
                </h2>
                @if(count($visibleFacilityLocations) > 1)
                    <div class="flex flex-wrap gap-2 book-clinic-location-tabs">
                        @foreach($visibleFacilityLocations as $key => $location)
                            <button
                                type="button"
                                data-location-key="{{ $key }}"
                                data-facility-id="{{ $location['facilityId'] }}"
                                data-slot-facility-id="{{ $location['slotFacilityId'] }}"
                                class="book-clinic-location-tab rounded-full border px-4 py-1.5 text-xs font-semibold transition {{ $loop->first ? 'border-red-500 bg-red-500 text-white' : 'border-gray-300 bg-white text-gray-600 hover:border-red-300' }}"
                            >
                                {{ $key === 'uttarahalli' ? 'Uttarahalli' : 'BG Road' }}
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    @endif

    <div
        id="bookClinicWidget"
        class="{{ $sidebar ? 'px-4 py-4' : 'px-5 py-6 sm:px-8' }}"
        @if($sidebar) data-sidebar="true" @endif
        data-practitioner-id="{{ $doctor->practitioner_id }}"
        data-initial-date="{{ $initialDate }}"
        data-today="{{ $todayDate }}"
        data-checkout-url="{{ route('doctors.book-clinic.checkout', $doctor) }}"
        data-initial-location="{{ $initialFacilityKey }}"
        data-facilities='@json($visibleFacilityLocations)'
    >
        <div class="flex items-center gap-2 sm:gap-4">
            <button type="button" id="bookClinicDatePrev" class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-500 hover:border-red-400 hover:text-red-500 disabled:opacity-40" aria-label="Previous dates">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <div id="bookClinicDateTabs" class="flex flex-1 min-w-0 divide-x divide-gray-200 overflow-hidden rounded-lg border border-gray-200"></div>
            <button type="button" id="bookClinicDateNext" class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-500 hover:border-red-400 hover:text-red-500" aria-label="Next dates">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

        <div id="bookClinicSlotsLoading" class="hidden py-12 text-center text-sm text-gray-500">Loading available slots...</div>
        <div id="bookClinicSlotsEmpty" class="hidden py-12 text-center text-sm text-gray-500">No slots available for this date.</div>
        <div id="bookClinicSlotsError" class="hidden mt-6 rounded-lg bg-red-50 border border-red-100 px-4 py-3 text-sm text-red-700"></div>

        <div id="bookClinicSlotsArea" class="mt-4 {{ $sidebar ? 'max-h-[360px] overflow-y-auto pr-1' : 'mt-6' }} hidden space-y-6"></div>
    </div>
</div>

@once
@push('styles')
<style>
    .book-clinic-date-tab { flex: 1 1 0; min-width: 0; }
    .book-clinic-date-tab[aria-pressed="true"] { border-bottom: 3px solid #FB2C36; background: #f0f9ff; }
    .book-clinic-slot-btn { border: 1px solid #FB2C36; color: #FB2C36; }
    .book-clinic-slot-btn:hover:not(:disabled) { background: #f0f9ff; }
    .book-clinic-slot-btn:disabled { border-color: #e0e0e5; color: #b4b4be; cursor: not-allowed; text-decoration: line-through; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const widget = document.getElementById("bookClinicWidget");
    if (!widget || widget.dataset.initialized === "true") return;
    widget.dataset.initialized = "true";

    const isSidebar = widget.dataset.sidebar === "true";

    const practitionerId = widget.dataset.practitionerId || "";
    const todayStr = widget.dataset.today || "";
    const checkoutUrl = widget.dataset.checkoutUrl || "";
    const facilities = JSON.parse(widget.dataset.facilities || "{}");
    const slotsUrl = "{{ route('api.appointment.slots') }}";
    const slotTimezone = @json(config('services.karexpert.timezone', 'Asia/Kolkata'));

    const locationTabs = widget.parentElement.querySelectorAll(".book-clinic-location-tab");
    const dateTabsEl = document.getElementById("bookClinicDateTabs");
    const datePrevBtn = document.getElementById("bookClinicDatePrev");
    const dateNextBtn = document.getElementById("bookClinicDateNext");
    const slotsArea = document.getElementById("bookClinicSlotsArea");
    const slotsLoading = document.getElementById("bookClinicSlotsLoading");
    const slotsEmpty = document.getElementById("bookClinicSlotsEmpty");
    const slotsError = document.getElementById("bookClinicSlotsError");

    let selectedLocationKey = widget.dataset.initialLocation || Object.keys(facilities)[0] || "uttarahalli";
    let selectedFacilityId = facilities[selectedLocationKey]?.facilityId || "";
    let selectedSlotFacilityId = facilities[selectedLocationKey]?.slotFacilityId || "Nano";
    let selectedDate = parseDate(widget.dataset.initialDate || todayStr);
    if (isBeforeToday(selectedDate)) selectedDate = parseDate(todayStr);
    let windowStart = parseDate(todayStr);
    let dateSlotCounts = {};
    let slotsRequestId = 0;
    const visibleDateCount = 3;

    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function parseDate(str) {
        const [y, m, d] = str.split("-").map(Number);
        return new Date(y, m - 1, d);
    }

    function formatDateISO(date) {
        return date.getFullYear() + "-" + String(date.getMonth() + 1).padStart(2, "0") + "-" + String(date.getDate()).padStart(2, "0");
    }

    function isBeforeToday(date) {
        return formatDateISO(date) < todayStr;
    }

    function addDays(date, days) {
        const next = new Date(date);
        next.setDate(next.getDate() + days);
        return next;
    }

    function dateTabLabel(date) {
        const iso = formatDateISO(date);
        if (iso === todayStr) return "Today";
        const tomorrow = formatDateISO(addDays(parseDate(todayStr), 1));
        if (iso === tomorrow) return "Tomorrow";
        return dayNames[date.getDay()] + ", " + date.getDate() + " " + date.toLocaleString("en-IN", { month: "short" });
    }

    function slotStartTime(slot) {
        const value = slot.slot_start_time || slot.slotStartTime || slot.start_time || slot.startTime;
        return value ? parseInt(value, 10) : null;
    }

    function slotDoctorId(slot) {
        return slot.doctor_id || slot.doctorId || slot.treatingDoctorId || practitionerId;
    }

    function slotLabel(slot) {
        return slot.display_start_time || slot.display_time || ("Slot " + (slot.slotNo || ""));
    }

    function slotPeriod(slot) {
        const start = slotStartTime(slot);
        if (!start) return "Other";
        const hour = parseInt(new Intl.DateTimeFormat("en-IN", { hour: "numeric", hour12: false, timeZone: slotTimezone }).format(new Date(start)), 10);
        if (hour < 12) return "Morning";
        if (hour < 17) return "Afternoon";
        return "Evening";
    }

    function isSlotExpired(slot) {
        if (slot.is_expired === true) return true;
        const start = slotStartTime(slot);
        return start ? start <= Date.now() : false;
    }

    function isSlotAvailable(slot) {
        if (isSlotExpired(slot)) return false;
        if (typeof slot.is_available === "boolean") return slot.is_available;
        return String(slot.status || "").toLowerCase() === "available";
    }

    function syncWindowToSelectedDate() {
        while (formatDateISO(selectedDate) > formatDateISO(addDays(windowStart, visibleDateCount - 1))) {
            windowStart = addDays(windowStart, visibleDateCount);
        }
        while (formatDateISO(selectedDate) < formatDateISO(windowStart)) {
            const prev = addDays(windowStart, -visibleDateCount);
            windowStart = formatDateISO(prev) < todayStr ? parseDate(todayStr) : prev;
        }
    }

    function renderDateTabs() {
        if (!dateTabsEl) return;
        dateTabsEl.innerHTML = "";
        for (let i = 0; i < visibleDateCount; i++) {
            const date = addDays(windowStart, i);
            const iso = formatDateISO(date);
            const isPast = isBeforeToday(date);
            const isSelected = formatDateISO(selectedDate) === iso;
            const count = dateSlotCounts[iso];

            const btn = document.createElement("button");
            btn.type = "button";
            btn.disabled = isPast;
            btn.className = "book-clinic-date-tab flex flex-col items-center justify-center px-2 py-3 text-center transition";
            btn.setAttribute("aria-pressed", isSelected ? "true" : "false");
            btn.dataset.date = iso;

            let countText = isSelected ? "Loading..." : "—";
            let countClass = "text-gray-400";
            if (count !== undefined) {
                if (count === 0) {
                    countText = "No Slots Available";
                } else {
                    countText = count + " Slots Available";
                    countClass = "text-emerald-600";
                }
            }

            btn.innerHTML = '<span class="text-sm font-semibold text-gray-800">' + dateTabLabel(date) + '</span>' +
                '<span class="mt-1 text-xs ' + countClass + '">' + countText + '</span>';

            if (!isPast) {
                btn.addEventListener("click", function () {
                    selectedDate = parseDate(iso);
                    renderDateTabs();
                    loadSlots();
                });
            }

            dateTabsEl.appendChild(btn);
        }

        if (datePrevBtn) {
            datePrevBtn.disabled = formatDateISO(windowStart) <= todayStr;
        }
    }

    function renderSlots(slots) {
        if (!slotsArea) return;
        const available = Array.isArray(slots) ? slots.filter(isSlotAvailable) : [];
        slotsArea.innerHTML = "";

        dateSlotCounts[formatDateISO(selectedDate)] = available.length;
        renderDateTabs();

        if (!available.length) {
            slotsArea.classList.add("hidden");
            if (slotsEmpty) slotsEmpty.classList.remove("hidden");
            return;
        }

        if (slotsEmpty) slotsEmpty.classList.add("hidden");
        slotsArea.classList.remove("hidden");

        const groups = { Morning: [], Afternoon: [], Evening: [], Other: [] };
        available.sort(function (a, b) { return (slotStartTime(a) || 0) - (slotStartTime(b) || 0); });
        available.forEach(function (slot) { groups[slotPeriod(slot)].push(slot); });

        const periodIcons = { Morning: "☀️", Afternoon: "🌤️", Evening: "🌙", Other: "🕐" };

        ["Morning", "Afternoon", "Evening", "Other"].forEach(function (period) {
            if (!groups[period].length) return;

            const section = document.createElement("div");
            section.className = "border-t border-gray-100 pt-5 first:border-t-0 first:pt-0";

            const header = document.createElement("div");
            header.className = "mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700";
            header.innerHTML = '<span>' + periodIcons[period] + '</span><span>' + period + '</span>';
            section.appendChild(header);

            const grid = document.createElement("div");
            grid.className = isSidebar
                ? "grid grid-cols-2 gap-2 sm:grid-cols-3"
                : "grid grid-cols-3 gap-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-7";

            groups[period].forEach(function (slot) {
                const btn = document.createElement("button");
                btn.type = "button";
                btn.className = "book-clinic-slot-btn rounded-md bg-white px-2 py-2.5 text-xs font-semibold sm:text-sm transition";
                btn.textContent = slotLabel(slot);
                btn.addEventListener("click", function () {
                    const url = new URL(checkoutUrl, window.location.origin);
                    url.searchParams.set("location", selectedLocationKey);
                    url.searchParams.set("slot_date", formatDateISO(selectedDate));
                    url.searchParams.set("slot_start_time", String(slotStartTime(slot)));
                    url.searchParams.set("display_time", slotLabel(slot));
                    url.searchParams.set("doctor_id", String(slotDoctorId(slot)));
                    window.location.href = url.toString();
                });
                grid.appendChild(btn);
            });

            section.appendChild(grid);
            slotsArea.appendChild(section);
        });
    }

    function apiErrorMessage(response, data) {
        if (response.status === 429) {
            return "Too many requests. Please wait a moment and try again.";
        }
        return data?.message || "Unable to load slots.";
    }

    async function fetchSlotCount(date) {
        const iso = formatDateISO(date);
        if (dateSlotCounts[iso] !== undefined) return;

        const params = new URLSearchParams({
            practitioner_id: practitionerId,
            slot_date: iso,
            facility_id: selectedFacilityId,
            slot_facility_id: selectedSlotFacilityId,
        });

        try {
            const response = await fetch(slotsUrl + "?" + params.toString(), { headers: { Accept: "application/json" } });
            const data = await response.json();
            if (!response.ok) {
                if (response.status === 429) return;
                dateSlotCounts[iso] = 0;
                return;
            }
            const slots = data.slots || [];
            dateSlotCounts[iso] = slots.filter(isSlotAvailable).length;
        } catch (e) {
            dateSlotCounts[iso] = 0;
        }
    }

    async function prefetchVisibleDateCounts() {
        const selectedIso = formatDateISO(selectedDate);
        for (let i = 0; i < visibleDateCount; i++) {
            const date = addDays(windowStart, i);
            if (isBeforeToday(date)) continue;
            const iso = formatDateISO(date);
            if (iso === selectedIso || dateSlotCounts[iso] !== undefined) continue;
            await fetchSlotCount(date);
            renderDateTabs();
        }
    }

    async function loadSlots() {
        const requestId = ++slotsRequestId;
        if (slotsLoading) slotsLoading.classList.remove("hidden");
        if (slotsEmpty) slotsEmpty.classList.add("hidden");
        if (slotsError) {
            slotsError.classList.add("hidden");
            slotsError.textContent = "";
        }
        if (slotsArea) slotsArea.classList.add("hidden");

        const params = new URLSearchParams({
            practitioner_id: practitionerId,
            slot_date: formatDateISO(selectedDate),
            facility_id: selectedFacilityId,
            slot_facility_id: selectedSlotFacilityId,
        });

        try {
            const response = await fetch(slotsUrl + "?" + params.toString(), { headers: { Accept: "application/json" } });
            const data = await response.json();
            if (requestId !== slotsRequestId) return;

            if (!response.ok || data.status !== "success") {
                throw new Error(apiErrorMessage(response, data));
            }

            renderSlots(data.slots || []);
            prefetchVisibleDateCounts();
        } catch (err) {
            if (requestId !== slotsRequestId) return;
            if (slotsError) {
                slotsError.textContent = err.message || "Unable to load slots.";
                slotsError.classList.remove("hidden");
            }
        } finally {
            if (requestId === slotsRequestId && slotsLoading) {
                slotsLoading.classList.add("hidden");
            }
        }
    }

    locationTabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            selectedLocationKey = tab.dataset.locationKey;
            selectedFacilityId = tab.dataset.facilityId || "";
            selectedSlotFacilityId = tab.dataset.slotFacilityId || "Nano";
            dateSlotCounts = {};
            locationTabs.forEach(function (t) {
                const active = t.dataset.locationKey === selectedLocationKey;
                if (isSidebar) {
                    t.classList.toggle("border-red-500", active);
                    t.classList.toggle("bg-red-500", active);
                } else {
                    t.classList.toggle("border-red-500", active);
                    t.classList.toggle("bg-red-500", active);
                }
                t.classList.toggle("text-white", active);
                t.classList.toggle("border-gray-300", !active);
                t.classList.toggle("bg-white", !active);
                t.classList.toggle("text-gray-600", !active);
            });
            loadSlots();
        });
    });

    if (datePrevBtn) {
        datePrevBtn.addEventListener("click", function () {
            const prev = addDays(windowStart, -visibleDateCount);
            windowStart = formatDateISO(prev) < todayStr ? parseDate(todayStr) : prev;
            if (formatDateISO(selectedDate) < formatDateISO(windowStart)) {
                selectedDate = parseDate(formatDateISO(windowStart));
            }
            renderDateTabs();
            loadSlots();
        });
    }

    if (dateNextBtn) {
        dateNextBtn.addEventListener("click", function () {
            windowStart = addDays(windowStart, visibleDateCount);
            if (formatDateISO(selectedDate) > formatDateISO(addDays(windowStart, visibleDateCount - 1))) {
                selectedDate = parseDate(formatDateISO(windowStart));
            }
            renderDateTabs();
            loadSlots();
        });
    }

    syncWindowToSelectedDate();
    renderDateTabs();
    loadSlots();
});
</script>
@endpush
@endonce
