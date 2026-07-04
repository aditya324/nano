@props(['source'])

@php
    $isInternational = str_contains(strtolower($source), 'international');
    $mobilePlaceholder = $isInternational
        ? 'Phone with country code (e.g. +14155552671)'
        : '10-digit mobile (e.g. 9876543210)';
    $mobilePattern = $isInternational
        ? '^\+?[0-9\s\-\(\)]{8,20}$'
        : '^(\+91[\s\-]?)?[6-9][0-9]{9}$';
    $mobileTitle = $isInternational
        ? 'Enter 8–15 digits; country code optional'
        : 'Enter a valid 10-digit Indian mobile number';
@endphp

<form id="contactForm"
      enctype="multipart/form-data"
      class="space-y-4">

    @csrf

    <input type="hidden" name="source" value="{{ $source }}">

    <div>
        <label class="text-sm text-gray-600">Name *</label>
        <input type="text" name="name" required minlength="2" maxlength="255"
               autocomplete="name"
               placeholder="Enter Your Name"
               class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
    </div>

    <div>
        <label class="text-sm text-gray-600">Mobile Number *</label>
        <input type="tel" name="mobile" required inputmode="tel" maxlength="20"
               pattern="{{ $mobilePattern }}" title="{{ $mobileTitle }}"
               autocomplete="tel"
               placeholder="{{ $mobilePlaceholder }}"
               class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
    </div>

    <div>
        <label class="text-sm text-gray-600">Email</label>
        <input type="email" name="email" maxlength="255"
               autocomplete="email"
               placeholder="name@example.com"
               class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm">
    </div>

    <div>
        <label class="text-sm text-gray-600">Message</label>
        <textarea name="message" rows="2"
                  placeholder="Enter Your Message"
                  class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm resize-none"></textarea>
    </div>

    <div>
        <label class="text-sm text-gray-600 block mb-1">
            Upload Reports
            <span class="text-xs text-gray-400">(optional – pdf, doc, docx, max 10 MB)</span>
        </label>

        <input type="file" name="report" accept=".pdf,.doc,.docx"
               class="block w-full text-sm text-gray-500
               file:mr-4 file:py-2 file:px-4
               file:rounded-full file:border-0
               file:text-sm file:font-medium
               file:bg-gray-200 file:text-gray-700
               hover:file:bg-gray-300">
    </div>

    <button type="submit"
            class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2.5 rounded-full transition">
        Submit
    </button>

</form>

<script>
document.getElementById('contactForm').addEventListener('submit', async function (e) {
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
        const response = await fetch("{{ route('contact.send') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': csrfInput.value,
                'Accept': 'application/json',
            },
            body: formData,
        });

        let data;
        try {
            data = await response.json();
        } catch {
            alert('Invalid response from server. Please try again.');
            return;
        }

        if (response.ok) {
            alert(data.message || 'Message sent successfully!');
            form.reset();
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
</script>
