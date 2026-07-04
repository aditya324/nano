<!-- Desktop Floating Actions -->
<div class="fixed right-0 top-1/2 -translate-y-1/2 z-50 hidden md:flex flex-col items-end gap-2">

    <!-- Book Appointment -->
    <button type="button"
        data-open-appointment-modal
        data-track="book-appointment"
        class="group flex items-center bg-red-500 text-white h-12 w-12 hover:w-56 transition-all duration-300 rounded-l-2xl shadow-lg overflow-hidden px-3">

        <i class="fa-regular fa-calendar-days text-lg min-w-[20px]"></i>
        <span class="ml-3 whitespace-nowrap font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            Book Appointment
        </span>
    </button>

    <!-- Call -->
    <button onclick="openContact('call')"
        data-track="call"
        class="group flex items-center bg-red-500 text-white h-12 w-12 hover:w-40 transition-all duration-300 rounded-l-2xl shadow-lg overflow-hidden px-3">

        <img src="{{ asset('assets/icons/call (2).png') }}" class="w-5 min-w-[20px]">
        <span class="ml-3 whitespace-nowrap font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            Call Us
        </span>
    </button>

    <!-- WhatsApp -->
    <button onclick="openContact('whatsapp')"
        data-track="whatsapp"
        class="group flex items-center bg-green-500 text-white h-12 w-12 hover:w-44 transition-all duration-300 rounded-l-2xl shadow-lg overflow-hidden px-3">

        <img src="{{ asset('assets/icons/whatsapp (2).png') }}" class="w-5 min-w-[20px]">
        <span class="ml-3 whitespace-nowrap font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            WhatsApp
        </span>
    </button>

    <!-- Request Call -->
    <button onclick="openRequestCallModal()"
        class="group flex items-center bg-gray-500 text-white h-12 w-12 hover:w-52 transition-all duration-300 rounded-l-2xl shadow-lg overflow-hidden px-3">

        <i class="fa-solid fa-phone-volume text-lg min-w-[20px]"></i>
        <span class="ml-3 whitespace-nowrap font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            Request a Call
        </span>
    </button>

    <!-- Search -->
    <button onclick="typeof openSearchModal === 'function' && openSearchModal()"
        class="group flex items-center bg-gray-500 text-white h-12 w-12 hover:w-36 transition-all duration-300 rounded-l-2xl shadow-lg overflow-hidden px-3">

        <i class="fa-solid fa-magnifying-glass text-lg min-w-[20px]"></i>
        <span class="ml-3 whitespace-nowrap font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            Search
        </span>
    </button>

</div>

<!-- Mobile Action Bar -->
<div class="fixed bottom-0 left-1/2 z-40 flex -translate-x-1/2 items-center gap-3
            bg-white px-4 py-3 shadow-xl md:hidden w-full justify-center">

    {{-- 1. Book Appointment --}}
    <button type="button"
        data-open-appointment-modal
        data-track="book-appointment"
        class="flex items-center gap-1 rounded-full border border-red-400
              bg-red-50 px-3 py-1.5 text-xs font-medium text-red-500">
        <i class="fa-regular fa-calendar-days text-red-500 text-sm"></i>
        Book An Appointment
    </button>

    {{-- 2. Call Us --}}
    <button type="button" onclick="openContact('call')"
        class="h-11 w-11 rounded-full bg-red-500 flex items-center justify-center shadow-md text-white">
        <img src="{{ asset('assets/icons/call (2).png') }}" class="w-5" />
    </button>

    {{-- 3. WhatsApp --}}
    <button type="button" onclick="openContact('whatsapp')"
        class="h-11 w-11 rounded-full bg-green-500 flex items-center justify-center shadow-md text-white">
        <img src="{{ asset('assets/icons/whatsapp (2).png') }}" class="w-5" />
    </button>

    {{-- 4. Request a Call --}}
    <button type="button"
        onclick="openRequestCallModal()"
        class="h-11 w-11 rounded-full bg-gray-500 flex items-center justify-center shadow-md text-white">
        <i class="fa-solid fa-phone-volume text-base"></i>
    </button>

    {{-- 5. Search --}}
    <button type="button"
        onclick="typeof openSearchModal === 'function' && openSearchModal()"
        class="h-11 w-11 rounded-full bg-gray-500 flex items-center justify-center shadow-md text-white">
        <i class="fa-solid fa-magnifying-glass text-base"></i>
    </button>
</div>

<!-- Contact Modal -->
<div id="contactModal"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">

    <div class="w-[92%] max-w-md rounded-2xl bg-white overflow-hidden">

        <a id="item1" class="flex items-center justify-between px-5 py-4 border-b hover:bg-gray-50">
            <div class="flex items-center gap-4">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                    <img id="icon1" class="w-4" />
                </div>
                <div>
                    <p id="label1" class="text-sm text-gray-500"></p>
                    <p id="value1" class="text-sm font-medium text-red-500"></p>
                </div>
            </div>
            <span class="text-red-400 text-xl">›</span>
        </a>

        <a id="item2" class="flex items-center justify-between px-5 py-4 hover:bg-gray-50">
            <div class="flex items-center gap-4">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                    <img id="icon2" class="w-4" />
                </div>
                <div>
                    <p id="label2" class="text-sm text-gray-500"></p>
                    <p id="value2" class="text-sm font-medium text-red-500"></p>
                </div>
            </div>
            <span class="text-red-400 text-xl">›</span>
        </a>

    </div>
</div>

<!-- Request Call Modal -->
<div id="requestCallModal"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">

    <div class="w-[92%] max-w-md rounded-2xl bg-white p-5 relative">

        <button type="button"
                id="closeRequestCallModal"
                class="absolute top-3 right-3 text-gray-500 hover:text-red-500">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        <h2 class="text-lg font-semibold mb-4 text-gray-800">
            Request a Call Back
        </h2>

        <form id="requestCallForm" class="space-y-4">
            @csrf
            <input type="hidden" name="source" value="Request Call - Floating">

            <div>
                <label class="text-sm text-gray-600">Name *</label>
                <input type="text" name="name" required minlength="2" maxlength="255"
                       autocomplete="name"
                       placeholder="Enter Your Name"
                       class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
            </div>

            <div>
                <label class="text-sm text-gray-600">Mobile Number *</label>
                <input type="tel" name="mobile" required inputmode="tel" maxlength="14"
                       pattern="^(\+91[\s\-]?)?[6-9][0-9]{9}$"
                       title="Enter a valid 10-digit Indian mobile number"
                       autocomplete="tel"
                       placeholder="10-digit mobile (e.g. 9876543210)"
                       class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="email" maxlength="255"
                       autocomplete="email"
                       placeholder="name@example.com"
                       class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
            </div>

            <button type="submit"
                    class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2.5 rounded-full transition">
                Submit
            </button>
        </form>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('contactModal');
    const requestModal = document.getElementById('requestCallModal');
    const closeRequestBtn = document.getElementById('closeRequestCallModal');

    window.openContact = function(type) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        if (type === 'call') {
            setItem(
                'Uttarahalli Number',
                '+91 87672 00300',
                'tel:+918767200300',
                '{{ asset('assets/icons/model-call.png') }}',
                'Hulimavu Number',
                '+91 89295 00500',
                'tel:+918929500500'
            );
        }

        // if (type === 'whatsapp') {
        //     setItem(
        //         'Uttarahalli WhatsApp',
        //         '+91 87672 00300',
        //         'https://wa.me/918767200300?text=Hi',
        //         '{{ asset('assets/icons/model-whatsapp.png') }}',
        //         'Hulimavu WhatsApp',
        //         '+91 89295 00500',
        //         'https://wa.me/918929500500?text=Hi'
        //     );
        // }

        if (type === 'whatsapp') {
            setItem(
                'Uttarahalli WhatsApp',
                '+91 87672 00300',
                'https://wa.me/919364897172?text=Hi',
                '{{ asset('assets/icons/model-whatsapp.png') }}',
                'Hulimavu WhatsApp',
                '+91 89295 00500',
                'https://wa.me/916362469632?text=Hi'
            );
        }
    }

    function setItem(l1, v1, h1, i, l2, v2, h2) {
        document.getElementById('label1').innerText = l1;
        document.getElementById('value1').innerText = v1;
        document.getElementById('item1').href = h1;
        document.getElementById('icon1').src = i;

        document.getElementById('label2').innerText = l2;
        document.getElementById('value2').innerText = v2;
        document.getElementById('item2').href = h2;
        document.getElementById('icon2').src = i;
    }

    modal.addEventListener('click', e => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    // Request Call modal handlers
    window.openRequestCallModal = function () {
        if (!requestModal) return;
        requestModal.classList.remove('hidden');
        requestModal.classList.add('flex');
    };

    if (requestModal) {
        requestModal.addEventListener('click', e => {
            if (e.target === requestModal) {
                requestModal.classList.add('hidden');
                requestModal.classList.remove('flex');
            }
        });
    }

    if (closeRequestBtn) {
        closeRequestBtn.addEventListener('click', () => {
            requestModal.classList.add('hidden');
            requestModal.classList.remove('flex');
        });
    }

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && requestModal && requestModal.classList.contains('flex')) {
            requestModal.classList.add('hidden');
            requestModal.classList.remove('flex');
        }
    });

    // Request Call form submit (simple, only name/mobile/email)
    const requestForm = document.getElementById('requestCallForm');
    if (requestForm) {
        requestForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = this;
            const button = form.querySelector('button[type="submit"]');
            const formData = new FormData(form);
            const csrfInput = form.querySelector('input[name="_token"]');

            if (!csrfInput) {
                alert('Security token missing. Please refresh the page.');
                return;
            }

            button.disabled = true;
            button.textContent = 'Sending...';

            try {
                const response = await fetch("{{ route('request.call.send') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfInput.value,
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const data = await response.json();

                if (response.ok) {
                    alert(data.message || 'Request sent successfully!');
                    form.reset();
                    if (requestModal) {
                        requestModal.classList.add('hidden');
                        requestModal.classList.remove('flex');
                    }
                } else {
                    const message =
                        data.message ||
                        (data.errors && Object.values(data.errors).flat().join(' ')) ||
                        'Please check your input and try again.';
                    alert(message);
                }
            } catch (error) {
                console.error(error);
                alert('Something went wrong. Please try again.');
            } finally {
                button.disabled = false;
                button.textContent = 'Submit';
            }
        });
    }
});
</script>
@endpush
@endonce
