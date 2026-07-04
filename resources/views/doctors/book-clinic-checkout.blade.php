@extends('layouts.app')

@section('title', 'Complete Booking | ' . $doctor->name)
@section('robots', 'noindex, follow')

@section('content')
<section class="min-h-screen bg-[#f0f0f5] py-8 sm:py-12">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-start lg:gap-12">
            <div class="lg:w-80 lg:shrink-0">
                @include('doctors.partials.book-clinic-summary')
            </div>

            <div class="flex-1 min-w-0">
                <div
                    id="bookClinicCheckout"
                    class="rounded-xl bg-[#f0f0f5]"
                    data-facility-id="{{ $location['facilityId'] }}"
                    data-slot-date="{{ $checkout['slot_date'] }}"
                    data-slot-start="{{ $checkout['slot_start_time'] }}"
                    data-display-time="{{ $checkout['display_time'] }}"
                    data-doctor-id="{{ $checkout['doctor_id'] ?? $doctor->practitioner_id }}"
                    data-lookup-url="{{ route('api.patient.lookup') }}"
                    data-verify-url="{{ route('api.patient.verify') }}"
                    data-select-url="{{ route('api.patient.select') }}"
                    data-book-url="{{ route('api.appointment.book') }}"
                    data-otp-trigger-url="{{ route('api.otp.trigger') }}"
                    data-otp-verify-url="{{ route('api.otp.verify') }}"
                    data-lookup-allowlist='@json(\App\Rules\IndianMobileNumber::lookupAllowlist())'
                >
                    {{-- Step 1: Mobile --}}
                    <div id="checkoutStepMobile" class="checkout-step">
                        <h2 class="text-2xl font-bold text-gray-800">Enter your mobile number</h2>
                        <div class="mt-8 max-w-md">
                            <label for="checkout_mobile" class="block text-sm font-semibold text-gray-700">
                                Mobile <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="tel"
                                id="checkout_mobile"
                                maxlength="10"
                                inputmode="numeric"
                                autocomplete="tel"
                                placeholder="Mobile Number"
                                class="mt-2 w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-base text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            />
                            <div class="mt-5">
                                <label for="checkout_name" class="block text-sm font-semibold text-gray-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="checkout_name"
                                    minlength="2"
                                    autocomplete="name"
                                    placeholder="Enter full name"
                                    class="mt-2 w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-base text-gray-800 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                                />
                            </div>
                            <div class="mt-5">
                                <label for="checkout_gender" class="block text-sm font-semibold text-gray-700">
                                    Gender <span class="text-red-500">*</span>
                                </label>
                                <select
                                    id="checkout_gender"
                                    class="mt-2 w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-base text-gray-800 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                                >
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <p class="mt-3 text-sm text-gray-500 leading-relaxed">
                                We will send appointment-related communications on this number.
                            </p>

                            <div id="checkoutPatientSelectPanel" class="hidden mt-4 space-y-2 rounded-lg border border-gray-200 bg-white p-4">
                                <p class="text-sm font-semibold text-gray-800">Multiple records found</p>
                                <div id="checkoutPatientSelectList" class="space-y-2"></div>
                            </div>

                            <div id="checkoutVerifiedPanel" class="hidden mt-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800"></div>
                            <p id="checkoutLookupStatus" class="hidden mt-3 text-sm text-gray-500"></p>
                            <p id="checkoutMobileError" class="hidden mt-3 text-sm text-red-600"></p>
                            <button
                                type="button"
                                id="checkoutMobileContinue"
                                disabled
                                class="mt-8 w-full max-w-md rounded-md bg-gray-300 px-6 py-3.5 text-base font-semibold text-white transition enabled:bg-red-500 enabled:hover:bg-red-600 disabled:cursor-not-allowed"
                            >
                                Book Appointment
                            </button>
                        </div>
                    </div>

                    {{-- Step 2: OTP (wired later; UI ready) --}}
                    <div id="checkoutStepOtp" class="checkout-step hidden">
                        <h2 class="text-2xl font-bold text-gray-800">Verify OTP</h2>
                        <p class="mt-2 text-sm text-gray-500">Enter the 6-digit OTP sent to <span id="checkoutOtpMobileLabel" class="font-semibold text-gray-700"></span></p>
                        <div class="mt-8 max-w-md">
                            <label for="checkout_otp" class="block text-sm font-semibold text-gray-700">
                                OTP <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="checkout_otp"
                                maxlength="6"
                                inputmode="numeric"
                                placeholder="Enter OTP"
                                class="mt-2 w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-base tracking-widest text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            />
                            <p id="checkoutOtpStatus" class="hidden mt-3 text-sm"></p>
                            <p id="checkoutOtpError" class="hidden mt-3 text-sm text-red-600"></p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <button type="button" id="checkoutOtpVerify" disabled class="w-full rounded-md bg-gray-300 px-6 py-3.5 text-base font-semibold text-white transition enabled:bg-red-500 enabled:hover:bg-red-600 disabled:cursor-not-allowed">
                                    Verify &amp; Continue
                                </button>
                                <button type="button" id="checkoutOtpResend" class="w-full rounded-md border border-red-500 bg-white px-6 py-3.5 text-base font-semibold text-red-500 hover:bg-red-50">
                                    Resend OTP
                                </button>
                            </div>
                            <button type="button" id="checkoutOtpSkip" class="mt-4 text-sm font-medium text-gray-500 hover:text-gray-700 underline">
                                Skip OTP for now (dev only)
                            </button>
                        </div>
                    </div>

                    {{-- Step 3: Patient details --}}
                    <div id="checkoutStepPatient" class="checkout-step hidden">
                        <h2 class="text-2xl font-bold text-gray-800">Patient Details</h2>
                        <p class="mt-2 text-sm text-gray-600">This in-clinic appointment is for:</p>

                        <div id="checkoutPatientSelectPanelLegacy" class="hidden mt-4 max-w-lg space-y-2 rounded-lg border border-gray-200 bg-white p-4">
                            <p class="text-sm font-semibold text-gray-800">Multiple records found</p>
                            <div id="checkoutPatientSelectListLegacy" class="space-y-2"></div>
                        </div>

                        <div id="checkoutPatientForm" class="mt-6 max-w-lg space-y-5">
                            <div>
                                <label for="checkout_mobile_locked" class="block text-sm font-semibold text-gray-700">
                                    Mobile <span class="text-red-500">*</span>
                                </label>
                                <div class="relative mt-2">
                                    <input
                                        type="text"
                                        id="checkout_mobile_locked"
                                        readonly
                                        class="w-full rounded-md border border-gray-200 bg-gray-50 px-4 py-3 pr-10 text-base text-gray-700"
                                    />
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400" title="Verified">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                    </span>
                                </div>
                            </div>

                            <div id="checkoutVerifiedPanelLegacy" class="hidden rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800"></div>
                            <p id="checkoutPatientError" class="hidden text-sm text-red-600"></p>
                            <p id="checkoutLookupStatusLegacy" class="hidden text-sm text-gray-500"></p>

                            <button
                                type="button"
                                id="checkoutConfirmBtn"
                                disabled
                                class="w-full rounded-md bg-gray-300 px-6 py-3.5 text-base font-bold text-white transition enabled:bg-red-500 enabled:hover:bg-red-600 disabled:cursor-not-allowed"
                            >
                                Confirm Clinic Visit
                            </button>
                        </div>
                    </div>

                    {{-- Success --}}
                    <div id="checkoutStepSuccess" class="checkout-step hidden">
                        <div class="max-w-lg rounded-xl border border-emerald-200 bg-white p-8 shadow-sm">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 text-2xl font-bold">✓</div>
                            <h2 class="mt-4 text-2xl font-bold text-gray-900">Appointment booked!</h2>
                            <p id="checkoutSuccessDetails" class="mt-2 text-sm text-gray-600 leading-relaxed"></p>
                            <a href="{{ route('doctors.show', $doctor) }}" class="mt-6 inline-block rounded-md bg-red-500 px-6 py-3 text-sm font-semibold text-white hover:bg-red-600">
                                Back to doctor profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="checkoutToastHost" class="fixed top-24 right-4 z-[10050] flex flex-col gap-2 w-[calc(100%-2rem)] max-w-sm pointer-events-none sm:top-28 sm:right-6" aria-live="polite" aria-atomic="true"></div>

<style>
    #checkoutToastHost {
        overflow: visible;
    }
    #checkoutToastHost > div {
        overflow: visible;
        word-break: break-word;
        overflow-wrap: anywhere;
    }
    @keyframes checkoutToastIn {
        from { opacity: 0; transform: translateY(-12px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes checkoutToastOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-12px); }
    }
    .checkout-toast-enter { animation: checkoutToastIn 0.28s ease-out forwards; }
    .checkout-toast-exit { animation: checkoutToastOut 0.22s ease-in forwards; }
</style>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const root = document.getElementById("bookClinicCheckout");
    if (!root) return;

    const toastHostEl = document.getElementById("checkoutToastHost");
    if (toastHostEl && toastHostEl.parentElement !== document.body) {
        document.body.appendChild(toastHostEl);
    }

    const facilityId = root.dataset.facilityId;
    const slotStartTime = parseInt(root.dataset.slotStart, 10);
    const displayTime = root.dataset.displayTime || "";
    const doctorId = root.dataset.doctorId || "";
    const lookupUrl = root.dataset.lookupUrl;
    const verifyUrl = root.dataset.verifyUrl;
    const selectUrl = root.dataset.selectUrl;
    const bookUrl = root.dataset.bookUrl;
    const otpTriggerUrl = root.dataset.otpTriggerUrl;
    const otpVerifyUrl = root.dataset.otpVerifyUrl;
    const lookupAllowlist = JSON.parse(root.dataset.lookupAllowlist || "[]");

    const stepMobile = document.getElementById("checkoutStepMobile");
    const stepOtp = document.getElementById("checkoutStepOtp");
    const stepPatient = document.getElementById("checkoutStepPatient");
    const stepSuccess = document.getElementById("checkoutStepSuccess");

    const mobileInput = document.getElementById("checkout_mobile");
    const mobileContinue = document.getElementById("checkoutMobileContinue");
    const mobileError = document.getElementById("checkoutMobileError");

    const otpInput = document.getElementById("checkout_otp");
    const otpMobileLabel = document.getElementById("checkoutOtpMobileLabel");
    const otpVerifyBtn = document.getElementById("checkoutOtpVerify");
    const otpResendBtn = document.getElementById("checkoutOtpResend");
    const otpSkipBtn = document.getElementById("checkoutOtpSkip");
    const otpStatus = document.getElementById("checkoutOtpStatus");
    const otpError = document.getElementById("checkoutOtpError");

    const nameInput = document.getElementById("checkout_name");
    const mobileLocked = document.getElementById("checkout_mobile_locked");
    const genderInput = document.getElementById("checkout_gender");
    const confirmBtn = document.getElementById("checkoutConfirmBtn");
    const patientError = document.getElementById("checkoutPatientError");
    const lookupStatus = document.getElementById("checkoutLookupStatus");
    const verifiedPanel = document.getElementById("checkoutVerifiedPanel");
    const selectPanel = document.getElementById("checkoutPatientSelectPanel");
    const selectList = document.getElementById("checkoutPatientSelectList");
    const successDetails = document.getElementById("checkoutSuccessDetails");

    const OTP_ENABLED = false;

    let verifiedMobile = "";
    let verifiedPatient = null;
    let lastVerifyPayload = null;
    let pendingPatients = [];
    let selectedPatientIndex = null;
    let patientNotFound = false;
    let registerTimer = null;

    const patientContact = window.NanoPatientContact;
    if (patientContact) {
        patientContact.apply(nameInput, mobileInput);
        patientContact.bind(nameInput, mobileInput);
    }

    const toastStyles = {
        success: "bg-emerald-600 text-white border-emerald-700",
        error: "bg-red-600 text-white border-red-700",
        warning: "bg-amber-500 text-white border-amber-600",
        info: "bg-gray-800 text-white border-gray-900",
    };

    const toastDurations = { success: 4500, error: 6500, warning: 5500, info: 4000 };

    function showToast(message, type = "info", duration) {
        const host = document.getElementById("checkoutToastHost");
        if (!host || !message) return;

        const toastType = toastStyles[type] ? type : "info";
        const toast = document.createElement("div");
        toast.className = "checkout-toast-enter pointer-events-auto flex items-start gap-3 rounded-xl border px-4 py-3 shadow-xl text-sm font-medium " + toastStyles[toastType];
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
        toast.classList.remove("checkout-toast-enter");
        toast.classList.add("checkout-toast-exit");
        toast.addEventListener("animationend", function () {
            toast.remove();
        }, { once: true });
    }

    function notify(message, type) {
        if (!message) return;
        showToast(message, type || "info");
    }

    function showMobileError(message) {
        if (mobileError) {
            mobileError.textContent = message;
            mobileError.classList.toggle("hidden", !message);
        }
        if (message) notify(message, "error");
    }

    function hideMobileError() {
        showMobileError("");
    }

    function showStep(step) {
        [stepMobile, stepOtp, stepPatient, stepSuccess].forEach(function (el) {
            if (el) el.classList.add("hidden");
        });
        if (step) step.classList.remove("hidden");
    }

    function isValidMobile(mobile) {
        if (lookupAllowlist.includes(mobile)) return true;
        return /^[6-9]\d{9}$/.test(mobile);
    }

    function getPayload() {
        const mobileFromInput = mobileInput ? mobileInput.value.replace(/\D/g, "") : "";

        return {
            patient_name: nameInput ? nameInput.value.trim() : "",
            mobile: verifiedMobile || mobileFromInput,
            gender: genderInput ? genderInput.value : "",
        };
    }

    function showLookupStatus(message, type) {
        if (!lookupStatus) return;
        if (!message) {
            lookupStatus.classList.add("hidden");
            lookupStatus.textContent = "";
            return;
        }
        lookupStatus.textContent = message;
        lookupStatus.classList.remove("hidden", "text-gray-500", "text-emerald-700", "text-amber-700", "text-red-600");
        if (type === "loading") lookupStatus.classList.add("text-gray-500");
        else if (type === "success") lookupStatus.classList.add("text-emerald-700");
        else if (type === "warning") lookupStatus.classList.add("text-amber-700");
        else lookupStatus.classList.add("text-red-600");

        if (type) {
            const toastType = type === "loading" ? "info" : (type === "error" ? "error" : type);
            notify(message, toastType);
        }
    }

    function updateConfirmState() {
        updateMobileContinueState();
    }

    function updateMobileContinueState() {
        if (!mobileContinue) return;
        const digits = mobileInput ? mobileInput.value.replace(/\D/g, "") : "";
        const patientName = nameInput ? nameInput.value.trim() : "";
        const gender = genderInput ? genderInput.value : "";
        const hasValidFields = digits.length === 10 && patientName.length >= 2 && !!gender;
        mobileContinue.disabled = !hasValidFields || !verifiedPatient;
    }

    function showPatientError(msg) {
        if (patientError) {
            patientError.textContent = msg;
            patientError.classList.toggle("hidden", !msg);
        }
        if (msg) notify(msg, "error");
    }

    function resetPatientState() {
        verifiedPatient = null;
        lastVerifyPayload = null;
        pendingPatients = [];
        selectedPatientIndex = null;
        patientNotFound = false;
        if (verifiedPanel) verifiedPanel.classList.add("hidden");
        if (selectPanel) selectPanel.classList.add("hidden");
        updateConfirmState();
    }

    function showVerifiedPatient(patient, source, fallbackName, formGender) {
        patient.patient_gender = formGender || patient.patient_gender || "";
        verifiedPatient = patient;
        if (verifiedPanel) {
            verifiedPanel.classList.remove("hidden");
            const id = patient.uh_id || patient.pre_registration_no || patient.mr_code || "";
            verifiedPanel.textContent = (source === "lookup" ? "Existing patient found" : "Patient registered") +
                (patient.patient_name ? ": " + patient.patient_name : "") +
                (id ? " (" + id + ")" : "");
        }
        if (selectPanel) selectPanel.classList.add("hidden");
        updateConfirmState();
    }

    function renderPatientSelection(patients) {
        pendingPatients = patients;
        selectedPatientIndex = null;
        if (!selectPanel || !selectList) return;
        selectPanel.classList.remove("hidden");
        selectList.innerHTML = patients.map(function (patient, index) {
            const label = patient.patient_name || "Patient " + (index + 1);
            const uhid = patient.uh_id || "—";
            return (
                '<label class="flex cursor-pointer items-start gap-3 rounded-lg border border-gray-200 bg-gray-50 px-3 py-3 hover:border-red-300 has-[:checked]:border-red-400 has-[:checked]:bg-red-50">' +
                    '<input type="radio" name="checkout_patient_record" value="' + index + '" class="mt-1 text-red-500 focus:ring-red-400">' +
                    '<span><span class="block text-sm font-semibold text-gray-800">' + label + '</span>' +
                    '<span class="mt-0.5 block text-xs text-gray-500">UHID: ' + uhid + '</span></span>' +
                '</label>'
            );
        }).join("");

        selectList.querySelectorAll('input[name="checkout_patient_record"]').forEach(function (radio) {
            radio.addEventListener("change", async function () {
                selectedPatientIndex = parseInt(radio.value, 10);
                await selectPatientRecord();
            });
        });
    }

    function apiErrorMessage(response, data, fallback) {
        if (response.status === 429) {
            return "Too many attempts. Please wait a moment and try again.";
        }
        return data?.message || fallback || "Something went wrong.";
    }

    async function lookupPatient(mobile) {
        resetPatientState();
        showLookupStatus("Checking mobile number...", "loading");

        try {
            const response = await fetch(lookupUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify({ mobile: mobile }),
            });
            const data = await response.json();
            if (!response.ok || data.status !== "success") {
                throw new Error(apiErrorMessage(response, data, "Lookup failed."));
            }

            if (data.requires_selection && Array.isArray(data.patients) && data.patients.length > 1) {
                lastVerifyPayload = {
                    mobile: mobile,
                    patient_name: nameInput ? nameInput.value.trim() : "",
                    gender: genderInput ? genderInput.value : "",
                };
                renderPatientSelection(data.patients);
                showLookupStatus("Select your profile below.", "warning");
                return;
            }

            if (data.not_found) {
                patientNotFound = true;
                showLookupStatus("New patient — please enter name and gender.", "warning");
                scheduleRegister();
                return;
            }

            const patient = data.patient;
            if (patient?.patient_name && nameInput && !nameInput.value.trim()) {
                nameInput.value = patient.patient_name;
            }
            lastVerifyPayload = {
                mobile: mobile,
                patient_name: nameInput ? nameInput.value.trim() : (patient.patient_name || ""),
                gender: genderInput ? genderInput.value : "",
            };
            showVerifiedPatient(patient, "lookup", lastVerifyPayload.patient_name, lastVerifyPayload.gender);
            showLookupStatus("Existing patient found.", "success");
        } catch (err) {
            showLookupStatus(err.message || "Lookup failed.", "error");
        }
    }

    async function registerNewPatient() {
        const payload = getPayload();
        if (!patientNotFound || payload.patient_name.length < 2 || !payload.gender) return;

        showLookupStatus("Registering new patient...", "loading");

        try {
            const response = await fetch(verifyUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify(payload),
            });
            const data = await response.json();
            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Registration failed.");
            }
            lastVerifyPayload = payload;
            patientNotFound = false;
            showVerifiedPatient(data.patient, data.source, payload.patient_name, payload.gender);
            showLookupStatus("Patient registered successfully.", "success");
        } catch (err) {
            showLookupStatus(err.message || "Registration failed.", "error");
        }
    }

    function scheduleRegister() {
        clearTimeout(registerTimer);
        registerTimer = setTimeout(registerNewPatient, 500);
    }

    async function selectPatientRecord() {
        if (selectedPatientIndex === null || !pendingPatients[selectedPatientIndex] || !lastVerifyPayload) return;

        const patient = pendingPatients[selectedPatientIndex];
        try {
            const response = await fetch(selectUrl, {
                method: "POST",
                headers: { "Content-Type": "application/json", Accept: "application/json" },
                body: JSON.stringify({
                    mobile: lastVerifyPayload.mobile,
                    external_id: patient.external_id,
                    uh_id: patient.uh_id,
                    patient_name: patient.patient_name,
                    patient_gender: genderInput ? genderInput.value : "",
                    pre_registration_no: patient.pre_registration_no,
                    registration_type: patient.registration_type,
                }),
            });
            const data = await response.json();
            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "Could not select patient.");
            }
            if (nameInput) nameInput.value = data.patient.patient_name || patient.patient_name || "";
            lastVerifyPayload = {
                mobile: verifiedMobile,
                patient_name: nameInput.value.trim(),
                gender: genderInput ? genderInput.value : "",
            };
            showVerifiedPatient(data.patient, "lookup", lastVerifyPayload.patient_name, lastVerifyPayload.gender);
            showLookupStatus("Patient profile selected.", "success");
        } catch (err) {
            showLookupStatus(err.message || "Selection failed.", "error");
        }
    }

    async function triggerOtp(mobile) {
        const response = await fetch(otpTriggerUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", Accept: "application/json" },
            body: JSON.stringify({ mobile: mobile }),
        });
        const data = await response.json();
        if (!response.ok || data.status !== "success") {
            throw new Error(data.message || "Could not send OTP.");
        }
        return data;
    }

    async function verifyOtp(mobile, otp) {
        const response = await fetch(otpVerifyUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", Accept: "application/json" },
            body: JSON.stringify({ mobile: mobile, otp: otp }),
        });
        const data = await response.json();
        if (!response.ok || data.status !== "success") {
            throw new Error(data.message || "Invalid OTP.");
        }
        return data;
    }

    function goToPatientStep() {
        if (mobileLocked) mobileLocked.value = "+91" + verifiedMobile;
        showStep(stepPatient);
        lookupPatient(verifiedMobile);
        if (nameInput) setTimeout(function () { nameInput.focus(); }, 200);
    }

    async function proceedAfterMobile() {
        const mobile = mobileInput.value.replace(/\D/g, "");
        if (!isValidMobile(mobile)) {
            showMobileError("Please enter a valid 10-digit mobile number.");
            return;
        }
        const patientName = nameInput ? nameInput.value.trim() : "";
        if (patientName.length < 2) {
            showMobileError("Please enter full name.");
            return;
        }
        if (!genderInput || !genderInput.value) {
            showMobileError("Please select gender.");
            return;
        }
        hideMobileError();

        if (patientContact) {
            patientContact.save({
                name: patientName,
                mobile: mobile,
            });
        }

        if (!verifiedPatient) {
            if (patientNotFound) {
                showMobileError("Please wait while we register the patient.");
            } else if (selectPanel && !selectPanel.classList.contains("hidden")) {
                showMobileError("Please select a patient profile.");
            } else {
                showMobileError("Please wait while we verify patient details.");
            }
            return;
        }

        if (mobileContinue) {
            mobileContinue.disabled = true;
            mobileContinue.textContent = "Booking...";
        }
        notify("Booking your appointment...", "info");

        try {
            await bookAppointment();
        } catch (err) {
            showMobileError(err.message || "Could not complete booking.");
        } finally {
            if (mobileContinue) {
                mobileContinue.textContent = "Book Appointment";
            }
            updateMobileContinueState();
        }
    }

    function maybeLookupPatient() {
        const mobile = mobileInput ? mobileInput.value.replace(/\D/g, "") : "";
        if (!isValidMobile(mobile)) return;
        if (verifiedMobile === mobile) return;
        verifiedMobile = mobile;
        lookupPatient(mobile);
    }

    function runStoredContactLookup() {
        if (!mobileInput) return;
        const prefilledMobile = mobileInput.value.replace(/\D/g, "");
        if (isValidMobile(prefilledMobile)) {
            maybeLookupPatient();
        }
    }

    async function bookAppointment() {
        if (!verifiedPatient) return;

        const mrn = (verifiedPatient.uh_id || "").trim();
        const prn = (verifiedPatient.pre_registration_no || verifiedPatient.mr_code || "").trim();
        const bookingUhId = mrn || prn;
        const patientGender = ((lastVerifyPayload && lastVerifyPayload.gender) || verifiedPatient.patient_gender || "").trim();

        if (!slotStartTime || !doctorId || !bookingUhId || !patientGender) {
            throw new Error("Missing booking details. Please complete patient information.");
        }

        const response = await fetch(bookUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", Accept: "application/json" },
            body: JSON.stringify({
                uhId: bookingUhId,
                patient_gender: patientGender,
                treatingDoctorId: doctorId,
                slotStartTime: slotStartTime,
                facilityId: facilityId,
                serviceItemCode: "opd",
            }),
        });
        const data = await response.json();
        if (!response.ok || data.status !== "success") {
            const validationMessage = data.errors ? Object.values(data.errors).flat().join(" ") : null;
            throw new Error(data.message || validationMessage || "Booking failed.");
        }

        const patientId = verifiedPatient.uh_id || verifiedPatient.pre_registration_no || verifiedPatient.mr_code || "";
        successDetails.textContent =
            (verifiedPatient.patient_name || "Patient") +
            (patientId ? " · " + patientId : "") +
            " · " + displayTime +
            (data.appointment?.appointment_id ? " · Ref: " + data.appointment.appointment_id : "");

        const successMsg = "Appointment booked successfully!" +
            (data.appointment?.appointment_id ? " Ref: " + data.appointment.appointment_id : "");
        notify(successMsg, "success");

        showStep(stepSuccess);
    }

    if (mobileInput) {
        mobileInput.addEventListener("input", function () {
            const digits = mobileInput.value.replace(/\D/g, "");
            if (mobileInput.value !== digits) mobileInput.value = digits;
            hideMobileError();
            if (digits.length !== 10) {
                verifiedMobile = "";
                resetPatientState();
                showLookupStatus("", null);
            } else {
                maybeLookupPatient();
            }
            updateMobileContinueState();
        });

        mobileInput.addEventListener("blur", maybeLookupPatient);
    }

    if (mobileContinue) {
        mobileContinue.addEventListener("click", proceedAfterMobile);
    }

    if (otpInput && otpVerifyBtn) {
        otpInput.addEventListener("input", function () {
            const digits = otpInput.value.replace(/\D/g, "");
            if (otpInput.value !== digits) otpInput.value = digits;
            otpVerifyBtn.disabled = digits.length < 4;
        });

        otpVerifyBtn.addEventListener("click", async function () {
            otpError.classList.add("hidden");
            try {
                await verifyOtp(verifiedMobile, otpInput.value.trim());
                goToPatientStep();
            } catch (err) {
                otpError.textContent = err.message;
                otpError.classList.remove("hidden");
            }
        });
    }

    if (otpResendBtn) {
        otpResendBtn.addEventListener("click", async function () {
            otpError.classList.add("hidden");
            try {
                await triggerOtp(verifiedMobile);
                if (otpStatus) {
                    otpStatus.textContent = "OTP resent.";
                    otpStatus.className = "mt-3 text-sm text-emerald-600";
                    otpStatus.classList.remove("hidden");
                }
            } catch (err) {
                otpError.textContent = err.message;
                otpError.classList.remove("hidden");
            }
        });
    }

    if (otpSkipBtn) {
        otpSkipBtn.addEventListener("click", goToPatientStep);
    }

    if (nameInput) {
        nameInput.addEventListener("input", function () {
            showPatientError("");
            hideMobileError();
            if (patientNotFound) scheduleRegister();
            updateMobileContinueState();
        });
    }

    if (genderInput) {
        genderInput.addEventListener("change", function () {
            showPatientError("");
            if (verifiedPatient && lastVerifyPayload) {
                lastVerifyPayload.gender = genderInput.value;
                verifiedPatient.patient_gender = genderInput.value;
            }
            if (patientNotFound) scheduleRegister();
            hideMobileError();
            updateMobileContinueState();
        });
    }

    if (confirmBtn) {
        confirmBtn.addEventListener("click", async function () {
            showPatientError("");
            const payload = getPayload();

            if (!payload.patient_name || payload.patient_name.length < 2) {
                showPatientError("Please enter full name.");
                return;
            }
            if (!payload.gender) {
                showPatientError("Please select gender.");
                return;
            }
            if (!verifiedPatient) {
                if (patientNotFound) {
                    showPatientError("Please wait while we register the patient.");
                } else if (selectPanel && !selectPanel.classList.contains("hidden")) {
                    showPatientError("Please select a patient profile.");
                } else {
                    showPatientError("Please wait while we verify patient details.");
                }
                return;
            }

            confirmBtn.disabled = true;
            confirmBtn.textContent = "Booking...";
            notify("Booking your appointment...", "info");

            try {
                await bookAppointment();
            } catch (err) {
                showPatientError(err.message || "Something went wrong.");
                confirmBtn.textContent = "Confirm Clinic Visit";
                updateConfirmState();
            }
        });
    }

    runStoredContactLookup();
    updateMobileContinueState();
});
</script>
@endpush
@endsection
