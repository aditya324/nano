@once('doctor-inline-slots')
@push('styles')
<style>
    .doctor-inline-date-tab { flex: 1 1 0; min-width: 0; }
    .doctor-inline-date-tab[aria-pressed="true"] { border-bottom: 3px solid #FB2C36; background: #f0f9ff; }
    .doctor-inline-slot-btn { border: 1px solid #FB2C36; color: #FB2C36; }
    .doctor-inline-slot-btn:hover:not(:disabled) { background: #f0f9ff; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const slotsUrl = "{{ route('api.appointment.slots') }}";
    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const slotTimezone = @json(config('services.karexpert.timezone', 'Asia/Kolkata'));
    const todayStr = new Date().toLocaleDateString("en-CA", { timeZone: slotTimezone });

    function parseDate(str) {
        const [y, m, d] = str.split("-").map(Number);
        return new Date(y, m - 1, d);
    }
    function formatDateISO(date) {
        return date.getFullYear() + "-" + String(date.getMonth() + 1).padStart(2, "0") + "-" + String(date.getDate()).padStart(2, "0");
    }
    function addDays(date, days) {
        const next = new Date(date);
        next.setDate(next.getDate() + days);
        return next;
    }
    function isBeforeToday(date) {
        return formatDateISO(date) < todayStr;
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
    function slotLabel(slot) {
        return slot.display_start_time || slot.display_time || ("Slot " + (slot.slotNo || ""));
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
    function slotPeriod(slot) {
        const start = slotStartTime(slot);
        if (!start) return "Other";
        const hour = parseInt(new Intl.DateTimeFormat("en-IN", { hour: "numeric", hour12: false, timeZone: slotTimezone }).format(new Date(start)), 10);
        if (hour < 12) return "Morning";
        if (hour < 17) return "Afternoon";
        return "Evening";
    }

    let openPanel = null;

    document.querySelectorAll('[data-open-inline-slots]').forEach(function (btn) {
        const card = btn.closest('.doctor-card');
        const panel = card ? card.querySelector('.doctor-inline-slots') : null;
        if (!panel) return;

        const practitionerId = panel.dataset.practitionerId || "";
        const checkoutUrl = panel.dataset.checkoutUrl || "";
        const facilities = JSON.parse(panel.dataset.facilities || "{}");
        const locationTabs = panel.querySelectorAll(".doctor-inline-location-tab");
        const dateTabsEl = panel.querySelector('[data-date-tabs]');
        const prevBtn = panel.querySelector('[data-date-prev]');
        const nextBtn = panel.querySelector('[data-date-next]');
        const slotsArea = panel.querySelector('[data-slots-area]');
        const slotsLoading = panel.querySelector('[data-slots-loading]');
        const slotsEmpty = panel.querySelector('[data-slots-empty]');
        const slotsError = panel.querySelector('[data-slots-error]');

        let selectedLocationKey = panel.dataset.initialLocation || Object.keys(facilities)[0] || "uttarahalli";
        let selectedFacilityId = facilities[selectedLocationKey]?.facilityId || "";
        let selectedSlotFacilityId = facilities[selectedLocationKey]?.slotFacilityId || "";
        let selectedDate = parseDate(todayStr);
        let windowStart = parseDate(todayStr);
        let dateSlotCounts = {};
        let slotsRequestId = 0;

        function syncLocationTabStyles() {
            locationTabs.forEach(function (t) {
                const active = t.dataset.locationKey === selectedLocationKey;
                t.classList.toggle("border-red-500", active);
                t.classList.toggle("bg-red-500", active);
                t.classList.toggle("text-white", active);
                t.classList.toggle("border-gray-300", !active);
                t.classList.toggle("bg-white", !active);
                t.classList.toggle("text-gray-600", !active);
            });
        }

        function renderDateTabs() {
            dateTabsEl.innerHTML = "";
            for (let i = 0; i < 3; i++) {
                const date = addDays(windowStart, i);
                const iso = formatDateISO(date);
                const isPast = isBeforeToday(date);
                const isSelected = formatDateISO(selectedDate) === iso;
                const count = dateSlotCounts[iso];
                const tab = document.createElement("button");
                tab.type = "button";
                tab.disabled = isPast;
                tab.className = "doctor-inline-date-tab flex flex-col items-center justify-center px-2 py-3 text-center transition";
                tab.setAttribute("aria-pressed", isSelected ? "true" : "false");
                let countText = isSelected ? "Loading..." : "—";
                let countClass = "text-gray-400";
                if (count !== undefined) {
                    if (count === 0) countText = "No Slots Available";
                    else {
                        countText = count + " Slots Available";
                        countClass = "text-emerald-600";
                    }
                }
                tab.innerHTML = '<span class="text-sm font-semibold text-gray-800">' + dateTabLabel(date) + '</span>' +
                    '<span class="mt-1 text-xs ' + countClass + '">' + countText + '</span>';
                if (!isPast) {
                    tab.addEventListener("click", function () {
                        selectedDate = parseDate(iso);
                        renderDateTabs();
                        loadSlots();
                    });
                }
                dateTabsEl.appendChild(tab);
            }
            prevBtn.disabled = formatDateISO(windowStart) <= todayStr;
        }

        function renderSlots(slots) {
            const available = (Array.isArray(slots) ? slots : []).filter(isSlotAvailable);
            dateSlotCounts[formatDateISO(selectedDate)] = available.length;
            renderDateTabs();
            slotsArea.innerHTML = "";

            if (!available.length) {
                slotsArea.classList.add("hidden");
                slotsEmpty.classList.remove("hidden");
                return;
            }
            slotsEmpty.classList.add("hidden");
            slotsArea.classList.remove("hidden");

            const groups = { Morning: [], Afternoon: [], Evening: [], Other: [] };
            available.sort(function (a, b) { return (slotStartTime(a) || 0) - (slotStartTime(b) || 0); });
            available.forEach(function (slot) { groups[slotPeriod(slot)].push(slot); });

            ["Morning", "Afternoon", "Evening", "Other"].forEach(function (period) {
                if (!groups[period].length) return;
                const section = document.createElement("div");
                section.className = "border-t border-gray-100 pt-4 first:border-t-0 first:pt-0";
                const title = document.createElement("p");
                title.className = "mb-2 text-sm font-semibold text-gray-700";
                title.textContent = period;
                section.appendChild(title);
                const grid = document.createElement("div");
                grid.className = "grid grid-cols-3 gap-2 sm:grid-cols-4 md:grid-cols-6";
                groups[period].forEach(function (slot) {
                    const b = document.createElement("button");
                    b.type = "button";
                    b.className = "doctor-inline-slot-btn rounded-md bg-white px-2 py-2.5 text-xs font-semibold sm:text-sm transition";
                    b.textContent = slotLabel(slot);
                    b.addEventListener("click", function () {
                        const url = new URL(checkoutUrl, window.location.origin);
                        url.searchParams.set("location", selectedLocationKey);
                        url.searchParams.set("slot_date", formatDateISO(selectedDate));
                        url.searchParams.set("slot_start_time", String(slotStartTime(slot)));
                        url.searchParams.set("display_time", slotLabel(slot));
                        url.searchParams.set("doctor_id", String(practitionerId));
                        window.location.href = url.toString();
                    });
                    grid.appendChild(b);
                });
                section.appendChild(grid);
                slotsArea.appendChild(section);
            });
        }

        async function loadSlots() {
            const requestId = ++slotsRequestId;
            slotsLoading.classList.remove("hidden");
            slotsEmpty.classList.add("hidden");
            slotsArea.classList.add("hidden");
            slotsError.classList.add("hidden");
            slotsError.textContent = "";
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
                    throw new Error(data.message || "Unable to load slots.");
                }
                renderSlots(data.slots || []);
            } catch (err) {
                if (requestId !== slotsRequestId) return;
                slotsError.textContent = err.message || "Unable to load slots.";
                slotsError.classList.remove("hidden");
            } finally {
                if (requestId === slotsRequestId) slotsLoading.classList.add("hidden");
            }
        }

        locationTabs.forEach(function (tab) {
            tab.addEventListener("click", function () {
                selectedLocationKey = tab.dataset.locationKey;
                selectedFacilityId = tab.dataset.facilityId || "";
                selectedSlotFacilityId = tab.dataset.slotFacilityId || "";
                dateSlotCounts = {};
                syncLocationTabStyles();
                loadSlots();
            });
        });

        btn.addEventListener('click', function () {
            if (openPanel && openPanel !== panel) openPanel.classList.add('hidden');
            panel.classList.toggle('hidden');
            openPanel = panel.classList.contains('hidden') ? null : panel;
            if (!panel.classList.contains('hidden')) {
                selectedLocationKey = panel.dataset.initialLocation || Object.keys(facilities)[0] || "uttarahalli";
                selectedFacilityId = facilities[selectedLocationKey]?.facilityId || "";
                selectedSlotFacilityId = facilities[selectedLocationKey]?.slotFacilityId || "";
                selectedDate = parseDate(todayStr);
                windowStart = parseDate(todayStr);
                dateSlotCounts = {};
                syncLocationTabStyles();
                renderDateTabs();
                loadSlots();
                panel.scrollIntoView({ behavior: "smooth", block: "nearest" });
            }
        });

        prevBtn.addEventListener("click", function () {
            const prev = addDays(windowStart, -3);
            windowStart = formatDateISO(prev) < todayStr ? parseDate(todayStr) : prev;
            if (formatDateISO(selectedDate) < formatDateISO(windowStart)) {
                selectedDate = parseDate(formatDateISO(windowStart));
            }
            renderDateTabs();
            loadSlots();
        });
        nextBtn.addEventListener("click", function () {
            windowStart = addDays(windowStart, 3);
            if (formatDateISO(selectedDate) > formatDateISO(addDays(windowStart, 2))) {
                selectedDate = parseDate(formatDateISO(windowStart));
            }
            renderDateTabs();
            loadSlots();
        });
    });
});
</script>
@endpush
@endonce
