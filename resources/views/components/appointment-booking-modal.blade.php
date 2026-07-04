<div
    id="appointmentBookingModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 sm:p-6 mt-20 bg-black/50 backdrop-blur-sm"
    role="dialog"
    aria-modal="true"
    aria-labelledby="appointmentBookingModalTitle"
>
    <div id="appointmentBookingModalBackdrop" class="absolute inset-0 "></div>

    <div class="relative w-full max-w-4xl max-h-[92vh] overflow-hidden rounded-2xl bg-white shadow-2xl flex flex-col">
        <button
            type="button"
            id="closeAppointmentBookingModal"
            class="absolute top-4 right-4 z-10 flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
            aria-label="Close"
        >
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        <div class="overflow-y-auto flex-1 p-6 sm:p-8">
            <div class="pr-10">
                <h2 id="appointmentBookingModalTitle" class="text-xl sm:text-2xl font-bold text-gray-900">
                    Consult expert doctors in Bangalore
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Experience quality care with our top-rated specialists at Nano Hospitals
                </p>
            </div>

            <form id="appointmentBookingForm" class="mt-6" data-track="form">
                @csrf
                <input type="hidden" name="source" value="Book Appointment Modal">
                <input type="hidden" id="appointmentSpecialityValue" name="speciality" value="">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="space-y-5">
                        <div>
                            <label for="appointmentPatientName" class="block text-sm font-semibold text-gray-700 mb-2">
                                Patient name
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i class="fa-regular fa-user"></i>
                                </span>
                                <input
                                    type="text"
                                    id="appointmentPatientName"
                                    name="name"
                                    required
                                    minlength="2"
                                    autocomplete="name"
                                    placeholder="Enter patient name"
                                    class="w-full rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                                />
                            </div>
                        </div>

                        <div>
                            <label for="appointmentMobile" class="block text-sm font-semibold text-gray-700 mb-2">
                                Mobile number
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm font-medium">
                                    +91
                                </span>
                                <input
                                    type="tel"
                                    id="appointmentMobile"
                                    name="mobile"
                                    required
                                    maxlength="10"
                                    inputmode="numeric"
                                    autocomplete="tel"
                                    placeholder="10-digit mobile number"
                                    class="w-full rounded-lg border border-gray-200 bg-white py-3 pl-12 pr-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                                />
                            </div>
                        </div>

                        <div>
                            <label for="appointmentBranch" class="block text-sm font-semibold text-gray-700 mb-2">
                                Select branch
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <select
                                    id="appointmentBranch"
                                    name="branch"
                                    required
                                    class="w-full appearance-none rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-10 text-sm text-gray-800 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                                >
                                    <option value="">Choose branch</option>
                                    <option value="Uttarahalli">Uttarahalli</option>
                                    <option value="Hulimavu">Hulimavu</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="appointmentSpecialitySearch" class="block text-sm font-semibold text-gray-700 mb-2">
                            Speciality
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fa-solid fa-magnifying-glass text-sm"></i>
                            </span>
                            <input
                                type="text"
                                id="appointmentSpecialitySearch"
                                placeholder="Type to search speciality"
                                autocomplete="off"
                                class="w-full rounded-lg border border-gray-200 bg-white py-3 pl-10 pr-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-red-400 focus:outline-none focus:ring-2 focus:ring-red-100"
                            />
                        </div>

                        <div id="appointmentSpecialityTags" class="mt-3 flex flex-wrap gap-2">
                            @foreach ($featuredSpecialities as $speciality)
                                <button
                                    type="button"
                                    data-speciality="{{ $speciality->name }}"
                                    class="appointment-speciality-tag rounded-md border border-sky-200 bg-sky-50 px-2.5 py-1.5 text-xs font-medium text-sky-700 hover:bg-sky-100 transition"
                                >
                                    {{ $speciality->name }}
                                </button>
                            @endforeach
                        </div>

                        <div class="mt-3 max-h-44 overflow-y-auto rounded-lg border border-gray-200">
                            <ul id="appointmentSpecialityList" class="divide-y divide-gray-100">
                                @foreach ($specialities as $speciality)
                                    <li>
                                        <button
                                            type="button"
                                            data-speciality="{{ $speciality->name }}"
                                            class="appointment-speciality-option w-full px-4 py-2.5 text-left text-sm text-gray-700 hover:bg-gray-50 transition"
                                        >
                                            {{ $speciality->name }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                            <p id="appointmentSpecialityEmpty" class="hidden px-4 py-6 text-center text-sm text-gray-500">
                                No specialities found.
                            </p>
                        </div>
                        <p id="appointmentSpecialitySelected" class="hidden mt-2 text-sm font-medium text-red-600"></p>
                        <p id="appointmentSpecialityError" class="hidden mt-2 text-sm text-red-600">Please select a speciality.</p>
                    </div>
                </div>

                <p id="appointmentBookingStatus" class="hidden mt-4 text-sm"></p>

                <button
                    type="submit"
                    id="appointmentBookingSubmit"
                    data-track="book-appointment"
                    class="mt-6 w-full rounded-xl bg-red-500 py-3.5 text-base font-semibold text-white hover:bg-red-600 transition disabled:opacity-60 disabled:cursor-not-allowed"
                >
                    Book An Appointment
                </button>
            </form>
        </div>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('appointmentBookingModal');
    const backdrop = document.getElementById('appointmentBookingModalBackdrop');
    const closeBtn = document.getElementById('closeAppointmentBookingModal');
    const form = document.getElementById('appointmentBookingForm');
    const searchInput = document.getElementById('appointmentSpecialitySearch');
    const specialityValue = document.getElementById('appointmentSpecialityValue');
    const specialityList = document.getElementById('appointmentSpecialityList');
    const specialityEmpty = document.getElementById('appointmentSpecialityEmpty');
    const specialitySelected = document.getElementById('appointmentSpecialitySelected');
    const specialityError = document.getElementById('appointmentSpecialityError');
    const statusEl = document.getElementById('appointmentBookingStatus');
    const submitBtn = document.getElementById('appointmentBookingSubmit');
    const mobileInput = document.getElementById('appointmentMobile');
    const nameInput = document.getElementById('appointmentPatientName');
    const patientContact = window.NanoPatientContact;

    if (!modal || !form) return;

    let selectedSpeciality = '';

    if (patientContact) {
        patientContact.apply(nameInput, mobileInput);
        patientContact.bind(nameInput, mobileInput);
    }

    function openModal() {
        if (patientContact) {
            patientContact.apply(nameInput, mobileInput, { overwrite: true });
        }
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    window.openAppointmentBookingModal = openModal;

    document.querySelectorAll('[data-open-appointment-modal]').forEach(function (trigger) {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            openModal();
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('flex')) {
            closeModal();
        }
    });

    function setSelectedSpeciality(name) {
        selectedSpeciality = name;
        if (specialityValue) specialityValue.value = name;
        if (searchInput) searchInput.value = name;
        if (specialitySelected) {
            specialitySelected.textContent = 'Selected: ' + name;
            specialitySelected.classList.remove('hidden');
        }
        if (specialityError) specialityError.classList.add('hidden');

        document.querySelectorAll('.appointment-speciality-tag, .appointment-speciality-option').forEach(function (el) {
            const isActive = el.dataset.speciality === name;
            el.classList.toggle('ring-2', isActive);
            el.classList.toggle('ring-red-400', isActive);
            el.classList.toggle('bg-red-50', isActive && el.classList.contains('appointment-speciality-option'));
        });
    }

    document.querySelectorAll('.appointment-speciality-tag, .appointment-speciality-option').forEach(function (el) {
        el.addEventListener('click', function () {
            setSelectedSpeciality(el.dataset.speciality || '');
        });
    });

    if (searchInput && specialityList) {
        searchInput.addEventListener('input', function () {
            const query = searchInput.value.trim().toLowerCase();
            let visibleCount = 0;

            specialityList.querySelectorAll('.appointment-speciality-option').forEach(function (option) {
                const parent = option.closest('li');
                const name = (option.dataset.speciality || '').toLowerCase();
                const show = query === '' || name.includes(query);
                parent.classList.toggle('hidden', !show);
                if (show) visibleCount++;
            });

            specialityList.classList.toggle('hidden', visibleCount === 0);
            if (specialityEmpty) specialityEmpty.classList.toggle('hidden', visibleCount > 0);
        });
    }

    if (mobileInput) {
        mobileInput.addEventListener('input', function () {
            mobileInput.value = mobileInput.value.replace(/\D/g, '').slice(0, 10);
        });
    }

    function setStatus(message, type) {
        if (!statusEl) return;
        statusEl.textContent = message;
        statusEl.classList.remove('hidden', 'text-red-600', 'text-emerald-600', 'text-gray-500');
        if (type === 'error') statusEl.classList.add('text-red-600');
        else if (type === 'success') statusEl.classList.add('text-emerald-600');
        else statusEl.classList.add('text-gray-500');
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!selectedSpeciality) {
            if (specialityError) specialityError.classList.remove('hidden');
            return;
        }

        const formData = new FormData(form);
        const branch = formData.get('branch');

        if (patientContact) {
            patientContact.save({
                name: formData.get('name'),
                mobile: formData.get('mobile'),
            });
        }

        const params = new URLSearchParams();
        if (branch) params.append('location[]', branch);
        if (selectedSpeciality) params.append('specialty[]', selectedSpeciality);

        const redirectUrl = "{{ route('book-appointment.doctors') }}" + (params.toString() ? '?' + params.toString() : '');

        formData.append('message', 'Branch: ' + branch + ', Speciality: ' + selectedSpeciality);
        const csrfInput = form.querySelector('input[name="_token"]');

        closeModal();
        window.location.href = redirectUrl;

        if (csrfInput) {
            fetch("{{ route('request.call.send') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfInput.value,
                    'Accept': 'application/json',
                },
                body: formData,
                keepalive: true,
            }).catch(function () {});
        }
    });
});
</script>
@endpush
@endonce
