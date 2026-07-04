<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    @php
        $rawTitle = trim($__env->yieldContent('title', 'Nano Hospitals'));
        $pageTitle = str_contains($rawTitle, 'Nano Hospitals') ? $rawTitle : $rawTitle . ' | Nano Hospitals';
    @endphp
    <title>{{ $pageTitle }}</title>

    <meta name="description" content="@yield('meta_description', 'Nano Hospitals - Advanced Healthcare Services')">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', $pageTitle)">
    @php $twitterDesc = trim($__env->yieldContent('twitter_description', '')) ?: trim($__env->yieldContent('meta_description', 'Best multispeciality hospital in Bangalore offering advanced medical care, 24x7 emergency services and top specialists.')); @endphp
    <meta name="twitter:description" content="{{ $twitterDesc }}">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/logo/logo.png'))">
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('og_title', $pageTitle)">
    <meta property="og:description" content="@yield('meta_description', 'Nano Hospitals - Advanced Healthcare Services')">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nano Hospitals">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('assets/logo/logo.png'))">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FGEQ838J3G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-FGEQ838J3G', {
            send_page_view: true,
            engagement_time_msec: 100
        });
    </script>


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '975832011569543');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=975832011569543&ev=PageView&noscript=1" />
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
    @stack('schema')
    @stack('styles')
</head>

<body class="font-sans">

    @include('partials.header')

    <main>
        @yield('content')
        <x-scroll-to-top />
        <x-floating-contact />
        <x-appointment-booking-modal />
        <x-footer />
    </main>

    @stack('scripts')

    <!-- ================= TRACKING SCRIPTS ================= -->

    <!-- Scroll Tracking (25%) -->
    <script>
        let scrollTracked25 = false;

        window.addEventListener('scroll', function() {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;

            if (!scrollTracked25 && scrollPercent > 25) {
                gtag('event', 'scroll_25', {
                    event_category: 'engagement',
                    event_label: '25_percent_scroll'
                });
                scrollTracked25 = true;
            }
        });
    </script>

    <!-- Global Click Tracking -->
    <script>
        document.addEventListener('click', function(e) {
            const el = e.target.closest('[data-track]');
            if (!el) return;

            const type = el.getAttribute('data-track');

            let eventName = '';
            let label = '';

            switch (type) {
                case 'call':
                    eventName = 'call_click';
                    label = 'phone_call';
                    fbq('track', 'Contact');
                    break;

                case 'appointment':
                case 'book-appointment':
                    eventName = 'appointment_click';
                    label = 'book_appointment';
                    fbq('track', 'Lead');
                    break;

                case 'whatsapp':
                    eventName = 'whatsapp_click';
                    label = 'whatsapp_contact';
                    fbq('track', 'Contact');
                    break;

                default:
                    eventName = 'generic_click';
                    label = type;
            }

            gtag('event', eventName, {
                event_category: 'engagement',
                event_label: label
            });
        });
    </script>

    <!-- Form Submit Tracking -->
    <script>
        document.addEventListener('submit', function(e) {
            const form = e.target;

            if (form.matches('[data-track="form"]')) {
                gtag('event', 'form_submit', {
                    event_category: 'engagement',
                    event_label: 'appointment_form'
                });
                fbq('track', 'Lead');
            }

        });
    </script>

</body>

</html>
