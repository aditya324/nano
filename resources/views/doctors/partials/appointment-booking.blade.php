@php
    $timezone = config('services.karexpert.timezone', 'Asia/Kolkata');
    $initialDate = $slotDate->toDateString();
    $todayDate = now($timezone)->toDateString();
    $slotFirstScroll = ($bookingFlowVariant ?? 'modal') === 'slot_first_scroll';
@endphp

<div
    id="appointmentBookingWidget"
    class="mb-8 w-full bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden"
    data-practitioner-id="{{ $doctor->practitioner_id }}"
    data-initial-date="{{ $initialDate }}"
    data-today="{{ $todayDate }}"
    data-facilities='@json($facilityLocations)'
>
    <div class="p-6 sm:p-8 space-y-6">

        {{-- Location Tabs --}}
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
            @foreach($facilityLocations as $key => $location)
                <button
                    type="button"
                    data-location-key="{{ $key }}"
                    data-facility-id="{{ $location['facilityId'] }}"
                    data-slot-facility-id="{{ $location['slotFacilityId'] }}"
                    class="location-tab flex-1 rounded-2xl px-4 py-3.5 text-sm sm:text-base font-semibold transition-all duration-200 {{ $loop->first ? 'bg-red-500 text-white shadow-md' : 'bg-white text-gray-700 border-2 border-red-500 hover:bg-red-50' }}"
                >
                    {{ $location['label'] }}
                </button>
            @endforeach
        </div>

        {{-- Date Carousel (7-day week strip, full width between arrows) --}}
        <div class="flex w-full items-center gap-2 sm:gap-3">
            <button
                type="button"
                id="datePrevBtn"
                class="flex-shrink-0 w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-gray-300 bg-white text-gray-600 hover:border-red-400 hover:text-red-500 transition flex items-center justify-center disabled:opacity-40 disabled:cursor-not-allowed"
                aria-label="Previous week"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>

            <div id="dateCarousel" class="flex flex-1 min-w-0 w-full items-stretch gap-1 sm:gap-2"></div>

            <button
                type="button"
                id="dateNextBtn"
                class="flex-shrink-0 w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-gray-300 bg-white text-gray-600 hover:border-red-400 hover:text-red-500 transition flex items-center justify-center"
                aria-label="Next week"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

        <div class="border-t border-gray-200"></div>

        {{-- Time Slots --}}
        <div id="slotsLoading" class="hidden text-center py-6 text-sm text-gray-500">Loading available slots...</div>
        <div id="slotsEmpty" class="hidden text-center py-6 text-sm text-gray-500">No slots available for this date and location.</div>
        <div id="slotsError" class="hidden rounded-xl bg-amber-50 px-4 py-3 text-sm text-amber-700"></div>

        <div id="slotsSection" class="hidden">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-3">
                <p id="slotsSummary" class="text-sm font-medium text-gray-600"></p>
                <label class="inline-flex items-center gap-2 text-sm text-gray-600 cursor-pointer select-none">
                    <input type="checkbox" id="slotsAvailableOnly" checked class="rounded border-gray-300 text-red-500 focus:ring-red-400">
                    Show available only
                </label>
            </div>
            <div id="slotsScroll" class="max-h-[280px] sm:max-h-[340px] overflow-y-auto overscroll-contain rounded-xl border border-gray-100 bg-gray-50/50 p-3 sm:p-4">
                <div id="slotsGrid" class="space-y-4"></div>
            </div>
            <p id="selectedSlotLabel" class="hidden mt-3 text-sm font-medium text-gray-700 rounded-xl bg-red-50 border border-red-100 px-4 py-2"></p>
        </div>

        <div id="bookingSuccessPanel" class="hidden rounded-2xl bg-emerald-50 border border-emerald-100 px-4 py-4">
            <p class="text-base font-semibold text-emerald-800">Appointment booked successfully!</p>
            <p id="bookingSuccessDetails" class="mt-1 text-sm text-emerald-700"></p>
        </div>

        {{-- Action Buttons --}}
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-2">
            <button
                type="button"
                id="requestCallbackBtn"
                class="flex-1 rounded-2xl border-2 border-red-500 bg-white px-6 py-4 text-base sm:text-lg font-bold text-gray-800 hover:bg-red-50 transition flex items-center justify-center gap-2"
            >
                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Request a Call Back
            </button>
        </div>
    </div>
</div>

@if($slotFirstScroll)
<div id="bookingDetailsSection" class="hidden mb-8 w-full rounded-3xl border border-red-100 bg-white shadow-lg">
    <div class="p-6 sm:p-8 space-y-5">
        <div>
            <h3 id="bookingModalTitle" class="text-xl font-bold text-gray-900">Book Appointment</h3>
            <p id="bookingModalSlotInfo" class="mt-1 text-sm text-gray-500"></p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
            <div>
                <label for="patient_name" class="block text-sm font-semibold text-gray-700 mb-2">Name <span class="text-red-500">*</span></label>
                <input
                    type="text"
                    id="patient_name"
                    name="patient_name"
                    required
                    minlength="2"
                    autocomplete="name"
                    placeholder="Enter Your Name"
                    class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm sm:text-base text-gray-800 placeholder:text-gray-400 focus:border-red-500 focus:outline-none focus:ring-0"
                />
            </div>
            <div>
                <label for="patient_mobile" class="block text-sm font-semibold text-gray-700 mb-2">Mobile Number <span class="text-red-500">*</span></label>
                <input
                    type="tel"
                    id="patient_mobile"
                    name="mobile"
                    required
                    maxlength="10"
                    inputmode="numeric"
                    autocomplete="tel"
                    placeholder="Enter Your Mobile Number"
                    class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm sm:text-base text-gray-800 placeholder:text-gray-400 focus:border-red-500 focus:outline-none focus:ring-0"
                />
                <p id="patientLookupStatus" class="hidden mt-2 text-sm"></p>
            </div>
        </div>

        <div class="max-w-xs">
            <label for="patient_gender" class="block text-sm font-semibold text-gray-700 mb-2">Gender <span class="text-red-500">*</span></label>
            <select
                id="patient_gender"
                name="gender"
                required
                class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm text-gray-800 focus:border-red-500 focus:outline-none focus:ring-0"
            >
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        {{-- Multi-patient selection --}}
        <div id="patientSelectPanel" class="hidden space-y-3 rounded-2xl border border-gray-200 bg-gray-50 p-4">
            <p class="text-sm font-semibold text-gray-800">Multiple records found</p>
            <p class="text-xs text-gray-500">Select the patient you want to book for.</p>
            <div id="patientSelectList" class="space-y-2"></div>
            <div class="flex flex-col sm:flex-row gap-2">
                <button
                    type="button"
                    id="patientSelectBtn"
                    disabled
                    class="flex-1 rounded-xl bg-red-500 px-4 py-3 text-sm font-semibold text-white hover:bg-red-600 disabled:opacity-50"
                >
                    Continue with selected patient
                </button>
                <button
                    type="button"
                    id="patientSelectBackBtn"
                    class="rounded-xl border-2 border-gray-300 px-4 py-3 text-sm font-medium text-gray-600 hover:bg-white"
                >
                    Cancel
                </button>
            </div>
            <p id="patientSelectError" class="hidden text-sm text-amber-700"></p>
        </div>

        {{-- Verified patient badge --}}
        <div id="patientVerifiedPanel" class="hidden rounded-2xl bg-emerald-50 border border-emerald-100 px-4 py-3">
            <p id="patientVerifiedMessage" class="text-sm font-semibold text-emerald-800"></p>
            <p id="patientVerifiedName" class="mt-1 text-sm text-emerald-700"></p>
            <p id="patientVerifiedUhid" class="mt-1 text-sm font-bold text-emerald-900"></p>
            <p id="patientVerifiedPrn" class="mt-0.5 text-xs text-emerald-600"></p>
        </div>

        <p id="bookingError" class="hidden rounded-xl bg-amber-50 px-4 py-3 text-sm text-amber-700"></p>

        <div class="flex flex-col sm:flex-row gap-3 pt-1">
            <button
                type="button"
                id="confirmBookingBtn"
                disabled
                class="flex-1 rounded-2xl bg-red-500 px-6 py-3.5 text-base font-bold text-white hover:bg-red-600 disabled:opacity-50 disabled:cursor-not-allowed transition shadow-md"
            >
                Book An Appointment
            </button>
        </div>
    </div>
</div>
@else
{{-- Booking modal: patient details after slot selection --}}
<div id="bookingModal" class="fixed inset-0 z-[150] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true" aria-labelledby="bookingModalTitle">
    <div id="bookingModalBackdrop" class="absolute inset-0 bg-black/50"></div>
    <div class="relative w-full max-w-lg max-h-[90vh] overflow-y-auto rounded-3xl bg-white shadow-2xl">
        <button
            type="button"
            id="bookingModalCloseBtn"
            class="absolute top-4 right-4 z-10 flex h-9 w-9 items-center justify-center rounded-full text-gray-400 hover:bg-gray-100 hover:text-gray-600 text-xl"
            aria-label="Close"
        >&times;</button>

        <div class="p-6 sm:p-8 space-y-5">
            <div>
                <h3 id="bookingModalTitle" class="text-xl font-bold text-gray-900">Book Appointment</h3>
                <p id="bookingModalSlotInfo" class="mt-1 text-sm text-gray-500"></p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
                <div>
                    <label for="patient_name" class="block text-sm font-semibold text-gray-700 mb-2">Name <span class="text-red-500">*</span></label>
                    <input
                        type="text"
                        id="patient_name"
                        name="patient_name"
                        required
                        minlength="2"
                        autocomplete="name"
                        placeholder="Enter Your Name"
                        class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm sm:text-base text-gray-800 placeholder:text-gray-400 focus:border-red-500 focus:outline-none focus:ring-0"
                    />
                </div>
                <div>
                    <label for="patient_mobile" class="block text-sm font-semibold text-gray-700 mb-2">Mobile Number <span class="text-red-500">*</span></label>
                    <input
                        type="tel"
                        id="patient_mobile"
                        name="mobile"
                        required
                        maxlength="10"
                        inputmode="numeric"
                        autocomplete="tel"
                        placeholder="Enter Your Mobile Number"
                        class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm sm:text-base text-gray-800 placeholder:text-gray-400 focus:border-red-500 focus:outline-none focus:ring-0"
                    />
                    <p id="patientLookupStatus" class="hidden mt-2 text-sm"></p>
                </div>
            </div>

            <div class="max-w-xs">
                <label for="patient_gender" class="block text-sm font-semibold text-gray-700 mb-2">Gender <span class="text-red-500">*</span></label>
                <select
                    id="patient_gender"
                    name="gender"
                    required
                    class="w-full border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2 text-sm text-gray-800 focus:border-red-500 focus:outline-none focus:ring-0"
                >
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            {{-- Multi-patient selection --}}
            <div id="patientSelectPanel" class="hidden space-y-3 rounded-2xl border border-gray-200 bg-gray-50 p-4">
                <p class="text-sm font-semibold text-gray-800">Multiple records found</p>
                <p class="text-xs text-gray-500">Select the patient you want to book for.</p>
                <div id="patientSelectList" class="space-y-2"></div>
                <div class="flex flex-col sm:flex-row gap-2">
                    <button
                        type="button"
                        id="patientSelectBtn"
                        disabled
                        class="flex-1 rounded-xl bg-red-500 px-4 py-3 text-sm font-semibold text-white hover:bg-red-600 disabled:opacity-50"
                    >
                        Continue with selected patient
                    </button>
                    <button
                        type="button"
                        id="patientSelectBackBtn"
                        class="rounded-xl border-2 border-gray-300 px-4 py-3 text-sm font-medium text-gray-600 hover:bg-white"
                    >
                        Cancel
                    </button>
                </div>
                <p id="patientSelectError" class="hidden text-sm text-amber-700"></p>
            </div>

            {{-- Verified patient badge --}}
            <div id="patientVerifiedPanel" class="hidden rounded-2xl bg-emerald-50 border border-emerald-100 px-4 py-3">
                <p id="patientVerifiedMessage" class="text-sm font-semibold text-emerald-800"></p>
                <p id="patientVerifiedName" class="mt-1 text-sm text-emerald-700"></p>
                <p id="patientVerifiedUhid" class="mt-1 text-sm font-bold text-emerald-900"></p>
                <p id="patientVerifiedPrn" class="mt-0.5 text-xs text-emerald-600"></p>
            </div>

            <p id="bookingError" class="hidden rounded-xl bg-amber-50 px-4 py-3 text-sm text-amber-700"></p>

            <div class="flex flex-col sm:flex-row gap-3 pt-1">
                <button
                    type="button"
                    id="confirmBookingBtn"
                    disabled
                    class="flex-1 rounded-2xl bg-red-500 px-6 py-3.5 text-base font-bold text-white hover:bg-red-600 disabled:opacity-50 disabled:cursor-not-allowed transition shadow-md"
                >
                    Book An Appointment
                </button>
                <button
                    type="button"
                    id="bookingModalCancelBtn"
                    class="rounded-2xl border-2 border-gray-300 px-6 py-3.5 text-base font-semibold text-gray-600 hover:bg-gray-50 transition"
                >
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
@endif

<div id="appointmentToastHost" class="fixed top-20 right-4 z-[200] flex flex-col gap-2 w-[calc(100%-2rem)] max-w-sm pointer-events-none sm:right-6" aria-live="polite" aria-atomic="true"></div>

<style>
    @keyframes appointmentToastIn {
        from { opacity: 0; transform: translateX(100%); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes appointmentToastOut {
        from { opacity: 1; transform: translateX(0); }
        to { opacity: 0; transform: translateX(100%); }
    }
    .appointment-toast-enter { animation: appointmentToastIn 0.28s ease-out forwards; }
    .appointment-toast-exit { animation: appointmentToastOut 0.22s ease-in forwards; }
    #dateCarousel {
        display: flex;
        flex: 1 1 0%;
        width: 100%;
        min-width: 0;
    }
    #dateCarousel .date-pill {
        flex: 1 1 0%;
        min-width: 0;
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const widget = document.getElementById("appointmentBookingWidget");
    if (!widget) return;

    const practitionerId = widget.dataset.practitionerId || "";
    const todayStr = widget.dataset.today || "";
    const facilities = JSON.parse(widget.dataset.facilities || "{}");
    const slotsUrl = "{{ route('api.appointment.slots') }}";
    const lookupUrl = "{{ route('api.patient.lookup') }}";
    const verifyUrl = "{{ route('api.patient.verify') }}";
    const selectUrl = "{{ route('api.patient.select') }}";
    const bookUrl = "{{ route('api.appointment.book') }}";
    const lookupMobileAllowlist = @json(\App\Rules\IndianMobileNumber::lookupAllowlist());
    const isSlotFirstScroll = @json($slotFirstScroll);

    const locationTabs = widget.querySelectorAll(".location-tab");
    const dateCarousel = document.getElementById("dateCarousel");
    const datePrevBtn = document.getElementById("datePrevBtn");
    const dateNextBtn = document.getElementById("dateNextBtn");
    const slotsGrid = document.getElementById("slotsGrid");
    const slotsSection = document.getElementById("slotsSection");
    const slotsScroll = document.getElementById("slotsScroll");
    const slotsSummary = document.getElementById("slotsSummary");
    const slotsAvailableOnly = document.getElementById("slotsAvailableOnly");
    const selectedSlotLabel = document.getElementById("selectedSlotLabel");
    const slotsLoading = document.getElementById("slotsLoading");
    const slotsEmpty = document.getElementById("slotsEmpty");
    const slotsErrorEl = document.getElementById("slotsError");
    const confirmBookingBtn = document.getElementById("confirmBookingBtn");
    const requestCallbackBtn = document.getElementById("requestCallbackBtn");
    const bookingErrorEl = document.getElementById("bookingError");
    const bookingSuccessPanel = document.getElementById("bookingSuccessPanel");
    const bookingSuccessDetails = document.getElementById("bookingSuccessDetails");
    const bookingDetailsSection = document.getElementById("bookingDetailsSection");
    const bookingModal = document.getElementById("bookingModal");
    const bookingModalBackdrop = document.getElementById("bookingModalBackdrop");
    const bookingModalCloseBtn = document.getElementById("bookingModalCloseBtn");
    const bookingModalCancelBtn = document.getElementById("bookingModalCancelBtn");
    const bookingModalSlotInfo = document.getElementById("bookingModalSlotInfo");
    const selectPanel = document.getElementById("patientSelectPanel");
    const selectList = document.getElementById("patientSelectList");
    const selectBtn = document.getElementById("patientSelectBtn");
    const selectBackBtn = document.getElementById("patientSelectBackBtn");
    const selectErrorEl = document.getElementById("patientSelectError");
    const verifiedPanel = document.getElementById("patientVerifiedPanel");
    const verifiedMessage = document.getElementById("patientVerifiedMessage");
    const verifiedName = document.getElementById("patientVerifiedName");
    const verifiedUhid = document.getElementById("patientVerifiedUhid");
    const verifiedPrn = document.getElementById("patientVerifiedPrn");
    const patientMobileInput = document.getElementById("patient_mobile");
    const patientNameInput = document.getElementById("patient_name");
    const patientGenderInput = document.getElementById("patient_gender");
    const patientLookupStatus = document.getElementById("patientLookupStatus");

    let selectedLocationKey = Object.keys(facilities)[0] || "uttarahalli";
    let selectedFacilityId = facilities[selectedLocationKey]?.facilityId || "";
    let selectedSlotFacilityId = facilities[selectedLocationKey]?.slotFacilityId || "Nano";
    let selectedDate = parseDate(widget.dataset.initialDate || todayStr);
    if (isBeforeToday(selectedDate)) {
        selectedDate = parseDate(todayStr);
    }
    let carouselStart = parseDate(todayStr);
    let selectedSlot = null;
    let verifiedPatient = null;
    let lastVerifyPayload = null;
    let pendingPatients = [];
    let selectedPatientIndex = null;
    let slotsRequestId = 0;
    let lookupRequestId = 0;
    let registerRequestId = 0;
    let lookupDebounceTimer = null;
    let registerDebounceTimer = null;
    let patientNotFound = false;
    let lastLookedUpMobile = "";
    let allSlots = [];
    const slotTimezone = @json(config('services.karexpert.timezone', 'Asia/Kolkata'));

    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    const toastStyles = {
        success: "bg-emerald-600 text-white border-emerald-700",
        error: "bg-red-600 text-white border-red-700",
        warning: "bg-amber-500 text-white border-amber-600",
        info: "bg-gray-800 text-white border-gray-900",
    };

    const toastDurations = { success: 4500, error: 6500, warning: 5500, info: 4000 };

    function showToast(message, type = "info", duration) {
        const host = document.getElementById("appointmentToastHost");
        if (!host || !message) return;

        const toastType = toastStyles[type] ? type : "info";
        const toast = document.createElement("div");
        toast.className = "appointment-toast-enter pointer-events-auto flex items-start gap-3 rounded-xl border px-4 py-3 shadow-xl text-sm font-medium " + toastStyles[toastType];
        toast.setAttribute("role", "alert");

        const icon = document.createElement("span");
        icon.className = "mt-0.5 flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-white/20 text-xs font-bold";
        icon.textContent = toastType === "success" ? "✓" : toastType === "error" ? "!" : toastType === "warning" ? "!" : "i";

        const text = document.createElement("span");
        text.className = "flex-1 leading-snug";
        text.textContent = message;

        const closeBtn = document.createElement("button");
        closeBtn.type = "button";
        closeBtn.className = "ml-1 flex-shrink-0 rounded p-0.5 text-white/80 hover:text-white hover:bg-white/10";
        closeBtn.setAttribute("aria-label", "Dismiss");
        closeBtn.innerHTML = "&times;";
        closeBtn.addEventListener("click", function () {
            dismissToast(toast);
        });

        toast.appendChild(icon);
        toast.appendChild(text);
        toast.appendChild(closeBtn);
        host.appendChild(toast);

        const ms = duration ?? toastDurations[toastType] ?? 4000;
        const timer = setTimeout(function () {
            dismissToast(toast);
        }, ms);

        toast._dismissTimer = timer;
    }

    function dismissToast(toast) {
        if (!toast || toast._dismissed) return;
        toast._dismissed = true;
        if (toast._dismissTimer) clearTimeout(toast._dismissTimer);
        toast.classList.remove("appointment-toast-enter");
        toast.classList.add("appointment-toast-exit");
        toast.addEventListener("animationend", function () {
            toast.remove();
        }, { once: true });
    }

    function notify(message, type) {
        if (!message) return;
        showToast(message, type || "info");
    }

    function showBookingError(message) {
        if (bookingErrorEl) {
            bookingErrorEl.textContent = message;
            bookingErrorEl.classList.remove("hidden");
        }
        notify(message, "error");
    }

    function hideBookingError() {
        if (bookingErrorEl) {
            bookingErrorEl.classList.add("hidden");
            bookingErrorEl.textContent = "";
        }
    }

    function formatSelectedDateLabel() {
        const day = dayNames[selectedDate.getDay()];
        const month = selectedDate.toLocaleString("en-IN", { month: "short" });
        return day + ", " + selectedDate.getDate() + " " + month + " " + selectedDate.getFullYear();
    }

    function updateBookingModalSlotInfo() {
        if (!bookingModalSlotInfo || !selectedSlot) return;
        const locationLabel = facilities[selectedLocationKey]?.label || "";
        const timeLabel = selectedSlot.display_time || slotLabel(selectedSlot);
        bookingModalSlotInfo.textContent = timeLabel + " · " + formatSelectedDateLabel() + (locationLabel ? " · " + locationLabel : "");
    }

    function resetModalPatientForm() {
        if (patientNameInput) patientNameInput.value = "";
        if (patientMobileInput) patientMobileInput.value = "";
        if (patientGenderInput) patientGenderInput.value = "";
        setLookupStatus("", null);
        resetPatientState();
        hideBookingError();
        if (confirmBookingBtn) {
            confirmBookingBtn.disabled = true;
            confirmBookingBtn.textContent = "Book An Appointment";
        }
    }

    function openBookingModal() {
        if (!selectedSlot) return;
        resetModalPatientForm();
        updateBookingModalSlotInfo();
        if (isSlotFirstScroll && bookingDetailsSection) {
            bookingDetailsSection.classList.remove("hidden");
            bookingDetailsSection.scrollIntoView({ behavior: "smooth", block: "start" });
            if (patientMobileInput) {
                setTimeout(function () { patientMobileInput.focus(); }, 250);
            }
            return;
        }
        if (!bookingModal) return;
        bookingModal.classList.remove("hidden");
        bookingModal.classList.add("flex");
        document.body.style.overflow = "hidden";
        if (patientMobileInput) {
            setTimeout(function () { patientMobileInput.focus(); }, 100);
        }
    }

    function closeBookingModal() {
        if (isSlotFirstScroll) {
            if (bookingDetailsSection) {
                bookingDetailsSection.classList.add("hidden");
            }
        } else {
            if (!bookingModal) return;
            bookingModal.classList.add("hidden");
            bookingModal.classList.remove("flex");
            document.body.style.overflow = "";
        }
        hideBookingError();
    }

    function parseDate(str) {
        const [y, m, d] = str.split("-").map(Number);
        return new Date(y, m - 1, d);
    }

    function formatDateISO(date) {
        const y = date.getFullYear();
        const m = String(date.getMonth() + 1).padStart(2, "0");
        const d = String(date.getDate()).padStart(2, "0");
        return y + "-" + m + "-" + d;
    }

    function isBeforeToday(date) {
        return formatDateISO(date) < todayStr;
    }

    function addDays(date, days) {
        const next = new Date(date);
        next.setDate(next.getDate() + days);
        return next;
    }

    function syncCarouselToSelectedDate() {
        carouselStart = parseDate(todayStr);
        const selectedIso = formatDateISO(selectedDate);

        while (selectedIso > formatDateISO(addDays(carouselStart, 6))) {
            carouselStart.setDate(carouselStart.getDate() + 7);
        }

        while (selectedIso < formatDateISO(carouselStart)) {
            const previousWeek = addDays(carouselStart, -7);
            if (formatDateISO(previousWeek) < todayStr) {
                break;
            }
            carouselStart = previousWeek;
        }
    }

    function isDateInCarouselWeek(date) {
        const iso = formatDateISO(date);
        for (let i = 0; i < 7; i++) {
            if (formatDateISO(addDays(carouselStart, i)) === iso) {
                return true;
            }
        }
        return false;
    }

    function ensureSelectedDateInCarouselWeek() {
        if (isDateInCarouselWeek(selectedDate)) {
            return;
        }
        selectedDate = parseDate(formatDateISO(carouselStart) < todayStr ? todayStr : formatDateISO(carouselStart));
    }

    function isValidLookupMobile(mobile) {
        if (lookupMobileAllowlist.includes(mobile)) return true;
        return /^[6-9]\d{9}$/.test(mobile);
    }

    function getFormPayload() {
        return {
            patient_name: document.getElementById("patient_name").value.trim(),
            mobile: document.getElementById("patient_mobile").value.replace(/\D/g, ""),
            gender: document.getElementById("patient_gender").value,
        };
    }

    function formPayloadChanged(payload) {
        if (!lastVerifyPayload) return true;
        return payload.patient_name !== lastVerifyPayload.patient_name
            || payload.mobile !== lastVerifyPayload.mobile
            || payload.gender !== lastVerifyPayload.gender;
    }

    function setLookupStatus(message, type) {
        if (!patientLookupStatus) return;
        if (!message) {
            patientLookupStatus.classList.add("hidden");
            patientLookupStatus.textContent = "";
            return;
        }
        patientLookupStatus.textContent = message;
        patientLookupStatus.classList.remove("hidden", "text-gray-500", "text-emerald-700", "text-amber-700", "text-red-600");
        if (type === "loading") patientLookupStatus.classList.add("text-gray-500");
        else if (type === "success") patientLookupStatus.classList.add("text-emerald-700");
        else if (type === "warning") patientLookupStatus.classList.add("text-amber-700");
        else patientLookupStatus.classList.add("text-red-600");

        if (message && type && type !== "loading") {
            notify(message, type === "error" ? "error" : type);
        }
    }

    function resetPatientState() {
        verifiedPatient = null;
        lastVerifyPayload = null;
        pendingPatients = [];
        selectedPatientIndex = null;
        patientNotFound = false;
        lastLookedUpMobile = "";
        verifiedPanel.classList.add("hidden");
        selectPanel.classList.add("hidden");
        selectErrorEl.classList.add("hidden");
        if (selectList) selectList.innerHTML = "";
        if (selectBtn) selectBtn.disabled = true;
        if (confirmBookingBtn) confirmBookingBtn.disabled = true;
    }

    function canRegisterNewPatient(payload) {
        return patientNotFound
            && payload.mobile === lastLookedUpMobile
            && payload.patient_name.length >= 2
            && payload.gender !== "";
    }

    function updateLocationTabs() {
        locationTabs.forEach(function (tab) {
            const isActive = tab.dataset.locationKey === selectedLocationKey;
            tab.classList.toggle("bg-red-500", isActive);
            tab.classList.toggle("text-white", isActive);
            tab.classList.toggle("shadow-md", isActive);
            tab.classList.toggle("bg-white", !isActive);
            tab.classList.toggle("text-gray-700", !isActive);
            tab.classList.toggle("border-2", !isActive);
            tab.classList.toggle("border-red-500", !isActive);
        });
    }

    function renderDateCarousel() {
        dateCarousel.innerHTML = "";
        for (let i = 0; i < 7; i++) {
            const date = addDays(carouselStart, i);
            const iso = formatDateISO(date);
            const isSelected = formatDateISO(selectedDate) === iso;
            const isPast = isBeforeToday(date);

            const btn = document.createElement("button");
            btn.type = "button";
            btn.disabled = isPast;
            btn.dataset.date = iso;
            btn.setAttribute("aria-pressed", isSelected ? "true" : "false");
            btn.setAttribute("aria-label", dayNames[date.getDay()] + " " + date.getDate());

            let pillClass = "date-pill flex-1 min-w-0 basis-0 flex flex-col items-center justify-center rounded-xl px-0.5 sm:px-1 py-2.5 sm:py-3 transition ";
            if (isPast) {
                pillClass += "opacity-40 cursor-not-allowed border border-gray-200 bg-gray-50 text-gray-400";
            } else if (isSelected) {
                pillClass += "bg-red-500 text-white shadow-md border border-red-500";
            } else {
                pillClass += "bg-white text-gray-900 border border-gray-200 hover:border-red-300 hover:bg-red-50";
            }
            btn.className = pillClass;

            btn.innerHTML = '<span class="text-[11px] sm:text-xs font-semibold uppercase tracking-wide">' + dayNames[date.getDay()] + '</span>' +
                '<span class="text-base sm:text-xl font-bold leading-tight mt-0.5">' + date.getDate() + '</span>';

            if (!isPast) {
                btn.addEventListener("click", function () {
                    selectedDate = parseDate(iso);
                    renderDateCarousel();
                    loadSlots();
                });
            }

            dateCarousel.appendChild(btn);
        }

        if (datePrevBtn) {
            datePrevBtn.disabled = formatDateISO(carouselStart) <= todayStr;
        }
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

    function slotSortKey(slot) {
        return slotStartTime(slot) || Number.MAX_SAFE_INTEGER;
    }

    function slotPeriod(slot) {
        const start = slotStartTime(slot);
        if (!start) return "Other";

        const hour = parseInt(
            new Intl.DateTimeFormat("en-IN", {
                hour: "numeric",
                hour12: false,
                timeZone: slotTimezone,
            }).format(new Date(start)),
            10,
        );

        if (hour < 12) return "Morning";
        if (hour < 17) return "Afternoon";
        return "Evening";
    }

    function isSlotExpired(slot) {
        if (slot.is_expired === true) {
            return true;
        }

        const start = slotStartTime(slot);
        if (!start) {
            return false;
        }

        return start <= Date.now();
    }

    function isSlotAvailable(slot) {
        if (isSlotExpired(slot)) {
            return false;
        }

        if (typeof slot.is_available === "boolean") {
            return slot.is_available;
        }

        return String(slot.status || "").toLowerCase() === "available";
    }

    function updateSelectedSlotLabel() {
        if (!selectedSlotLabel) return;

        if (!selectedSlot) {
            selectedSlotLabel.classList.add("hidden");
            selectedSlotLabel.textContent = "";
            return;
        }

        const label = selectedSlot.display_time || slotLabel(selectedSlot);
        selectedSlotLabel.textContent = "Selected: " + label;
        selectedSlotLabel.classList.remove("hidden");
    }

    function highlightSelectedSlotButton() {
        if (!selectedSlot) return;

        const selectedStart = slotStartTime(selectedSlot);
        document.querySelectorAll(".slot-pick").forEach(function (btn) {
            const slot = JSON.parse(btn.dataset.slot || "{}");
            const isSelected = selectedStart && slotStartTime(slot) === selectedStart;
            btn.classList.toggle("bg-red-500", isSelected);
            btn.classList.toggle("text-white", isSelected);
            btn.classList.toggle("bg-white", !isSelected);
            btn.classList.toggle("text-gray-800", !isSelected);
        });
    }

    function createSlotButton(slot) {
        const expired = isSlotExpired(slot);
        const isAvailable = isSlotAvailable(slot);
        const btn = document.createElement("button");
        btn.type = "button";
        btn.disabled = !isAvailable;
        btn.dataset.slot = JSON.stringify(slot);
        btn.textContent = slotLabel(slot);
        btn.title = expired
            ? "This time has passed"
            : (slot.display_time || slotLabel(slot));

        if (isAvailable) {
            btn.className = "slot-pick rounded-xl border-2 border-red-500 bg-white px-2 py-2.5 text-xs sm:text-sm font-semibold text-gray-800 hover:bg-red-50 transition";
            btn.addEventListener("click", function () {
                if (isSlotExpired(slot)) {
                    notify("This time slot has already passed. Please choose a later time.", "error");
                    return;
                }

                document.querySelectorAll(".slot-pick").forEach(function (b) {
                    b.classList.remove("bg-red-500", "text-white");
                    b.classList.add("bg-white", "text-gray-800", "border-red-500");
                });
                btn.classList.remove("bg-white", "text-gray-800");
                btn.classList.add("bg-red-500", "text-white");
                selectedSlot = slot;
                bookingSuccessPanel.classList.add("hidden");
                updateSelectedSlotLabel();
                openBookingModal();
            });
        } else if (expired) {
            btn.className = "slot-pick rounded-xl border-2 border-gray-200 bg-gray-50 px-2 py-2.5 text-xs sm:text-sm font-semibold text-gray-400 cursor-not-allowed line-through";
        } else {
            btn.className = "slot-pick rounded-xl border-2 border-red-200 bg-white px-2 py-2.5 text-xs sm:text-sm font-semibold text-red-200 cursor-not-allowed";
        }

        return btn;
    }

    function renderSlotGroup(title, slots) {
        const section = document.createElement("div");
        section.className = "slot-group";

        const heading = document.createElement("p");
        heading.className = "mb-2 text-xs font-bold uppercase tracking-wide text-gray-500";
        heading.textContent = title;
        section.appendChild(heading);

        const grid = document.createElement("div");
        grid.className = "grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-2";
        slots.forEach(function (slot) {
            grid.appendChild(createSlotButton(slot));
        });
        section.appendChild(grid);

        return section;
    }

    function renderSlots(slots) {
        allSlots = Array.isArray(slots) ? slots.slice() : [];
        slotsGrid.innerHTML = "";

        if (!allSlots.length) {
            if (slotsSection) slotsSection.classList.add("hidden");
            slotsEmpty.classList.remove("hidden");
            selectedSlot = null;
            updateSelectedSlotLabel();
            return;
        }

        slotsEmpty.classList.add("hidden");
        if (slotsSection) slotsSection.classList.remove("hidden");

        const showAvailableOnly = !slotsAvailableOnly || slotsAvailableOnly.checked;
        const sorted = allSlots.slice().sort(function (a, b) {
            return slotSortKey(a) - slotSortKey(b);
        });
        const visible = showAvailableOnly ? sorted.filter(isSlotAvailable) : sorted;

        const availableCount = sorted.filter(isSlotAvailable).length;
        if (slotsSummary) {
            slotsSummary.textContent = availableCount + " available · " + sorted.length + " total slots";
        }

        if (!visible.length) {
            selectedSlot = null;
            updateSelectedSlotLabel();

            const emptyMsg = document.createElement("p");
            emptyMsg.className = "text-center py-6 text-sm text-gray-500";
            emptyMsg.textContent = showAvailableOnly
                ? "No bookable slots for this date. Past times are hidden; uncheck \"Show available only\" to see all slots."
                : "No slots to display.";
            slotsGrid.appendChild(emptyMsg);
            return;
        }

        const groups = { Morning: [], Afternoon: [], Evening: [], Other: [] };
        visible.forEach(function (slot) {
            groups[slotPeriod(slot)].push(slot);
        });

        ["Morning", "Afternoon", "Evening", "Other"].forEach(function (period) {
            if (!groups[period].length) return;
            slotsGrid.appendChild(renderSlotGroup(period, groups[period]));
        });

        if (selectedSlot) {
            const selectedStart = slotStartTime(selectedSlot);
            const stillVisible = visible.some(function (slot) {
                return slotStartTime(slot) === selectedStart;
            });

            if (!stillVisible || isSlotExpired(selectedSlot) || !isSlotAvailable(selectedSlot)) {
                selectedSlot = null;
                updateSelectedSlotLabel();
                closeBookingModal();
            } else {
                highlightSelectedSlotButton();
                updateSelectedSlotLabel();
                if (bookingModal && !bookingModal.classList.contains("hidden")) {
                    updateBookingModalSlotInfo();
                }
            }
        }
    }

    async function loadSlots() {
        const requestId = ++slotsRequestId;
        slotsLoading.classList.remove("hidden");
        slotsEmpty.classList.add("hidden");
        slotsErrorEl.classList.add("hidden");
        if (slotsSection) slotsSection.classList.add("hidden");
        slotsGrid.innerHTML = "";
        selectedSlot = null;
        updateSelectedSlotLabel();
        closeBookingModal();

        const params = new URLSearchParams({
            practitioner_id: practitionerId,
            slot_date: formatDateISO(selectedDate),
            facility_id: selectedFacilityId,
            slot_facility_id: selectedSlotFacilityId,
        });

        try {
            const response = await fetch(slotsUrl + "?" + params.toString(), {
                headers: { Accept: "application/json" },
            });
            const data = await response.json();

            if (requestId !== slotsRequestId) return;

            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Unable to load slots.");
            }

            renderSlots(data.slots || []);
        } catch (err) {
            if (requestId !== slotsRequestId) return;
            const slotMsg = err.message || "Unable to load slots.";
            slotsErrorEl.textContent = slotMsg;
            slotsErrorEl.classList.remove("hidden");
            notify(slotMsg, "error");
        } finally {
            if (requestId === slotsRequestId) {
                slotsLoading.classList.add("hidden");
            }
        }
    }

    function updateConfirmBookingBtnState() {
        if (!confirmBookingBtn) return;
        confirmBookingBtn.disabled = !verifiedPatient || !selectedSlot;
    }

    function showVerifiedPatient(patient, source, fallbackName, formGender) {
        patient.patient_gender = formGender || patient.patient_gender || "";
        verifiedPatient = patient;
        verifiedPanel.classList.remove("hidden");
        selectPanel.classList.add("hidden");
        verifiedName.textContent = patient.patient_name || fallbackName || "";

        if (source === "lookup") {
            verifiedMessage.textContent = "Existing patient found";
            verifiedUhid.textContent = patient.uh_id ? "UHID: " + patient.uh_id : "";
            verifiedUhid.classList.toggle("hidden", !patient.uh_id);
            verifiedPrn.textContent = patient.pre_registration_no ? "PRN: " + patient.pre_registration_no : "";
            verifiedPrn.classList.toggle("hidden", !patient.pre_registration_no);
        } else {
            verifiedMessage.textContent = "Patient registered successfully";
            verifiedUhid.textContent = "";
            verifiedUhid.classList.add("hidden");
            verifiedPrn.textContent = "Pre-Registration No: " + (patient.mr_code || patient.pre_registration_no || "—");
            verifiedPrn.classList.remove("hidden");
        }

        updateConfirmBookingBtnState();
    }

    function renderPatientSelection(patients) {
        pendingPatients = patients;
        selectedPatientIndex = null;
        selectPanel.classList.remove("hidden");
        verifiedPanel.classList.add("hidden");
        selectErrorEl.classList.add("hidden");
        selectBtn.disabled = true;

        selectList.innerHTML = patients.map(function (patient, index) {
            const label = patient.patient_name || "Patient " + (index + 1);
            const uhid = patient.uh_id || "—";
            const prn = patient.pre_registration_no ? "PRN: " + patient.pre_registration_no : "";
            return (
                '<label class="flex cursor-pointer items-start gap-3 rounded-xl border border-gray-200 bg-white px-3 py-3 hover:border-red-300 has-[:checked]:border-red-400 has-[:checked]:bg-red-50">' +
                    '<input type="radio" name="patient_record" value="' + index + '" class="mt-1 text-red-500 focus:ring-red-400">' +
                    '<span class="min-w-0">' +
                        '<span class="block text-sm font-semibold text-gray-800">' + label + '</span>' +
                        '<span class="mt-1 block text-sm font-bold text-gray-900">UHID: ' + uhid + '</span>' +
                        (prn ? '<span class="mt-0.5 block text-xs text-gray-500">' + prn + '</span>' : '') +
                    '</span>' +
                '</label>'
            );
        }).join("");

        selectList.querySelectorAll('input[name="patient_record"]').forEach(function (radio) {
            radio.addEventListener("change", function () {
                selectedPatientIndex = parseInt(radio.value, 10);
                selectBtn.disabled = false;
            });
        });
    }

    async function lookupPatientByMobile(mobile) {
        const requestId = ++lookupRequestId;
        setLookupStatus("Checking mobile number...", "loading");
        resetPatientState();
        lastLookedUpMobile = mobile;
        patientNotFound = false;

        try {
            const response = await fetch(lookupUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify({ mobile: mobile }),
            });
            const data = await response.json();

            if (requestId !== lookupRequestId) return;

            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Could not verify mobile number.");
            }

            if (data.requires_selection && Array.isArray(data.patients) && data.patients.length > 1) {
                lastVerifyPayload = { mobile: mobile, patient_name: "", gender: "" };
                renderPatientSelection(data.patients);
                setLookupStatus("Multiple records found. Please select your profile.", "warning");
                return;
            }

            if (data.not_found) {
                patientNotFound = true;
                setLookupStatus("No existing patient found. Enter name and gender to register.", "warning");
                scheduleRegisterNewPatient();
                return;
            }

            const patient = data.patient;
            if (patient && patient.patient_name && patientNameInput && !patientNameInput.value.trim()) {
                patientNameInput.value = patient.patient_name;
            }

            lastVerifyPayload = {
                mobile: mobile,
                patient_name: patientNameInput ? patientNameInput.value.trim() : (patient.patient_name || ""),
                gender: patientGenderInput ? patientGenderInput.value : "",
            };
            showVerifiedPatient(patient, "lookup", lastVerifyPayload.patient_name, lastVerifyPayload.gender);
            setLookupStatus("Existing patient found.", "success");
        } catch (err) {
            if (requestId !== lookupRequestId) return;
            setLookupStatus(err.message || "Lookup failed.", "error");
        }
    }

    function scheduleLookupPatient() {
        clearTimeout(lookupDebounceTimer);
        const mobile = patientMobileInput ? patientMobileInput.value.replace(/\D/g, "") : "";

        if (mobile.length < 10) {
            if (mobile.length === 0) {
                resetPatientState();
                setLookupStatus("", null);
            } else {
                setLookupStatus("", null);
            }
            return;
        }

        if (!isValidLookupMobile(mobile)) {
            resetPatientState();
            setLookupStatus("Please enter a valid 10-digit mobile number.", "error");
            return;
        }

        if (mobile === lastLookedUpMobile && (verifiedPatient || patientNotFound || !selectPanel.classList.contains("hidden"))) {
            return;
        }

        lookupDebounceTimer = setTimeout(function () {
            lookupPatientByMobile(mobile);
        }, 400);
    }

    async function registerNewPatient() {
        const payload = getFormPayload();
        if (!canRegisterNewPatient(payload)) return;

        const requestId = ++registerRequestId;
        setLookupStatus("Registering new patient...", "loading");

        try {
            const response = await fetch(verifyUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify(payload),
            });
            const data = await response.json();

            if (requestId !== registerRequestId) return;

            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Registration failed.");
            }

            lastVerifyPayload = payload;
            patientNotFound = false;
            showVerifiedPatient(data.patient, data.source, payload.patient_name, payload.gender);
            setLookupStatus("New patient registered successfully.", "success");
        } catch (err) {
            if (requestId !== registerRequestId) return;
            setLookupStatus(err.message || "Registration failed.", "error");
        }
    }

    function scheduleRegisterNewPatient() {
        clearTimeout(registerDebounceTimer);
        registerDebounceTimer = setTimeout(function () {
            if (canRegisterNewPatient(getFormPayload())) {
                registerNewPatient();
            }
        }, 500);
    }

    async function verifyPatient(payload) {
        const response = await fetch(verifyUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", Accept: "application/json" },
            body: JSON.stringify(payload),
        });
        const data = await response.json();

        if (!response.ok || data.status !== "success") {
            const validationMessage = data.errors ? Object.values(data.errors).flat().join(" ") : null;
            throw new Error(data.message || validationMessage || "Patient verification failed.");
        }

        lastVerifyPayload = payload;

        if (data.requires_selection && Array.isArray(data.patients) && data.patients.length > 1) {
            renderPatientSelection(data.patients);
            return { needsSelection: true };
        }

        showVerifiedPatient(data.patient, data.source, payload.patient_name, payload.gender);
        return { needsSelection: false, patient: data.patient };
    }

    async function selectPatientRecord() {
        if (selectedPatientIndex === null || !pendingPatients[selectedPatientIndex] || !lastVerifyPayload) {
            return null;
        }

        const patient = pendingPatients[selectedPatientIndex];
        selectBtn.disabled = true;
        selectBtn.textContent = "Confirming...";
        selectErrorEl.classList.add("hidden");

        try {
            const response = await fetch(selectUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify({
                    mobile: lastVerifyPayload.mobile,
                    external_id: patient.external_id,
                    uh_id: patient.uh_id,
                    patient_name: patient.patient_name,
                    patient_gender: lastVerifyPayload.gender,
                    pre_registration_no: patient.pre_registration_no,
                    registration_type: patient.registration_type,
                }),
            });
            const data = await response.json();

            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Could not select patient.");
            }

            showVerifiedPatient(data.patient, "lookup", lastVerifyPayload.patient_name, lastVerifyPayload.gender);
            selectPanel.classList.add("hidden");
            lastVerifyPayload = {
                mobile: lastVerifyPayload.mobile,
                patient_name: data.patient.patient_name || (patientNameInput ? patientNameInput.value.trim() : ""),
                gender: patientGenderInput ? patientGenderInput.value : "",
            };
            return data.patient;
        } catch (err) {
            const selectMsg = err.message || "Something went wrong.";
            selectErrorEl.textContent = selectMsg;
            selectErrorEl.classList.remove("hidden");
            notify(selectMsg, "error");
            return null;
        } finally {
            selectBtn.disabled = selectedPatientIndex === null;
            selectBtn.textContent = "Continue with selected patient";
        }
    }

    async function bookAppointment() {
        if (!verifiedPatient || !selectedSlot) return;

        const startTime = slotStartTime(selectedSlot);
        const doctorId = slotDoctorId(selectedSlot);
        const mrn = (verifiedPatient.uh_id || "").trim();
        const prn = (verifiedPatient.pre_registration_no || verifiedPatient.mr_code || "").trim();
        const bookingUhId = mrn || prn;
        const patientGender = ((lastVerifyPayload && lastVerifyPayload.gender) || verifiedPatient.patient_gender || "").trim();

        if (!startTime || !doctorId || !bookingUhId || !patientGender) {
            throw new Error("Missing booking details. Please verify patient and slot again.");
        }

        if (isSlotExpired(selectedSlot)) {
            throw new Error("This time slot has already passed. Please choose a later time.");
        }

        const response = await fetch(bookUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", Accept: "application/json" },
            body: JSON.stringify({
                uhId: bookingUhId,
                patient_gender: patientGender,
                treatingDoctorId: doctorId,
                slotStartTime: startTime,
                facilityId: selectedFacilityId,
                serviceItemCode: "opd",
            }),
        });
        const data = await response.json();

        if (!response.ok || data.status !== "success") {
            const validationMessage = data.errors ? Object.values(data.errors).flat().join(" ") : null;
            throw new Error(data.message || validationMessage || "Appointment booking failed.");
        }

        bookingSuccessPanel.classList.remove("hidden");
        const patientId = verifiedPatient.uh_id || verifiedPatient.pre_registration_no || verifiedPatient.mr_code || "";
        bookingSuccessDetails.textContent =
            (verifiedPatient.patient_name || "Patient") +
            (patientId ? " · " + patientId : "") +
            " · " + (selectedSlot.display_time || "Selected slot") +
            (data.appointment && data.appointment.appointment_id ? " · Ref: " + data.appointment.appointment_id : "");

        closeBookingModal();
        selectedSlot = null;
        updateSelectedSlotLabel();
        document.querySelectorAll(".slot-pick").forEach(function (b) {
            b.classList.remove("bg-red-500", "text-white");
            b.classList.add("bg-white", "text-gray-800", "border-red-500");
        });

        hideBookingError();

        const successMsg = "Appointment booked successfully!" +
            (data.appointment && data.appointment.appointment_id ? " Ref: " + data.appointment.appointment_id : "");
        notify(successMsg, "success");
    }

    locationTabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            selectedLocationKey = tab.dataset.locationKey;
            selectedFacilityId = tab.dataset.facilityId || "";
            selectedSlotFacilityId = tab.dataset.slotFacilityId || "Nano";
            updateLocationTabs();
            loadSlots();
        });
    });

    if (datePrevBtn) {
        datePrevBtn.addEventListener("click", function () {
            const nextStart = addDays(carouselStart, -7);
            carouselStart = formatDateISO(nextStart) < todayStr ? parseDate(todayStr) : nextStart;
            ensureSelectedDateInCarouselWeek();
            renderDateCarousel();
            loadSlots();
        });
    }

    if (dateNextBtn) {
        dateNextBtn.addEventListener("click", function () {
            carouselStart = addDays(carouselStart, 7);
            ensureSelectedDateInCarouselWeek();
            renderDateCarousel();
            loadSlots();
        });
    }

    if (selectBtn) {
        selectBtn.addEventListener("click", async function () {
            await selectPatientRecord();
            if (verifiedPatient) {
                setLookupStatus("Existing patient found.", "success");
            }
        });
    }

    if (selectBackBtn) {
        selectBackBtn.addEventListener("click", function () {
            selectPanel.classList.add("hidden");
            pendingPatients = [];
            selectedPatientIndex = null;
            setLookupStatus("Please enter your mobile number again.", "warning");
        });
    }

    if (requestCallbackBtn) {
        requestCallbackBtn.addEventListener("click", function () {
            if (typeof openRequestCallModal === "function") {
                openRequestCallModal();
            }
        });
    }

    if (bookingModalCloseBtn) {
        bookingModalCloseBtn.addEventListener("click", closeBookingModal);
    }

    if (bookingModalCancelBtn) {
        bookingModalCancelBtn.addEventListener("click", closeBookingModal);
    }

    if (bookingModalBackdrop) {
        bookingModalBackdrop.addEventListener("click", closeBookingModal);
    }

    document.addEventListener("keydown", function (e) {
        if (!isSlotFirstScroll && e.key === "Escape" && bookingModal && !bookingModal.classList.contains("hidden")) {
            closeBookingModal();
        }
    });

    if (slotsAvailableOnly) {
        slotsAvailableOnly.addEventListener("change", function () {
            renderSlots(allSlots);
        });
    }

    if (confirmBookingBtn) {
    confirmBookingBtn.addEventListener("click", async function () {
        hideBookingError();
        bookingSuccessPanel.classList.add("hidden");

        const payload = getFormPayload();

        if (!isValidLookupMobile(payload.mobile)) {
            showBookingError("Please enter a valid 10-digit mobile number.");
            patientMobileInput.focus();
            return;
        }

        if (!verifiedPatient) {
            if (selectPanel && !selectPanel.classList.contains("hidden")) {
                showBookingError("Please select your patient profile first.");
            } else if (patientNotFound) {
                showBookingError("Please enter your name and gender to register as a new patient.");
            } else {
                showBookingError("Please wait while we verify your mobile number.");
            }
            return;
        }

        if (!selectedSlot) {
            showBookingError("Please select a time slot.");
            return;
        }

        if (isSlotExpired(selectedSlot)) {
            showBookingError("This time slot has already passed. Please choose a later time.");
            selectedSlot = null;
            updateSelectedSlotLabel();
            closeBookingModal();
            renderSlots(allSlots);
            return;
        }

        const patientGender = ((lastVerifyPayload && lastVerifyPayload.gender) || verifiedPatient.patient_gender || "").trim();
        if (!patientGender) {
            showBookingError("Please select gender before booking.");
            patientGenderInput.focus();
            return;
        }

        if (selectPanel && !selectPanel.classList.contains("hidden")) {
            showBookingError("Please select a patient record to continue.");
            return;
        }

        confirmBookingBtn.disabled = true;
        confirmBookingBtn.textContent = "Booking...";
        notify("Booking your appointment...", "info");

        try {
            await bookAppointment();
        } catch (err) {
            showBookingError(err.message || "Something went wrong. Please try again.");
            confirmBookingBtn.textContent = "Book An Appointment";
            updateConfirmBookingBtnState();
        }
    });
    }

    if (patientMobileInput) {
        patientMobileInput.addEventListener("input", function () {
            const digits = patientMobileInput.value.replace(/\D/g, "");
            if (patientMobileInput.value !== digits) {
                patientMobileInput.value = digits;
            }
            if (digits !== lastLookedUpMobile) {
                resetPatientState();
            }
            scheduleLookupPatient();
        });
    }

    if (patientNameInput) {
        patientNameInput.addEventListener("input", scheduleRegisterNewPatient);
        patientNameInput.addEventListener("change", scheduleRegisterNewPatient);
    }

    if (patientGenderInput) {
        patientGenderInput.addEventListener("change", function () {
            if (verifiedPatient && lastVerifyPayload) {
                lastVerifyPayload.gender = patientGenderInput.value;
                verifiedPatient.patient_gender = patientGenderInput.value;
            }
            scheduleRegisterNewPatient();
        });
    }

    updateLocationTabs();
    syncCarouselToSelectedDate();
    renderDateCarousel();
    loadSlots();
});
</script>
