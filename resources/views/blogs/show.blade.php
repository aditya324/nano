@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title)
@section('meta_description', filled($blog->meta_description)
    ? $blog->meta_description
    : \Illuminate\Support\Str::limit(strip_tags($blog->title . ' - Nano Hospitals health blog'), 155))
@section('meta_keywords', $blog->meta_keywords)
@section('og_image', $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('assets/logo/logo.png'))
@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $blog->title,
    'description' => filled($blog->meta_description) ? $blog->meta_description : \Illuminate\Support\Str::limit(strip_tags($blog->excerpt ?? $blog->title), 160),
    'image' => $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('assets/logo/logo.png'),
    'datePublished' => optional($blog->published_at)->toAtomString(),
    'dateModified' => optional($blog->updated_at)->toAtomString(),
    'author' => [
        '@type' => 'Organization',
        'name' => 'Nano Hospitals',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Nano Hospitals',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => asset('assets/logo/logo.png'),
        ],
    ],
    'mainEntityOfPage' => route('blogs.show', $blog->slug),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush
@section('content')

<main class="container mx-auto px-4 py-10">

    <h1 class="text-3xl md:text-4xl font-bold text-gray-700 mb-6 text-center">
        {{ $blog->h1 ?: $blog->title }}
    </h1>

    {{-- FEATURED IMAGE --}}
    @if($blog->featured_image)
        <div class="mb-8 flex justify-center w-full">
            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                 alt="{{ $blog->title }}"
                 class="w-1/2 h-1/2 rounded-xl shadow align-middle" />
        </div>
    @endif

    {{-- CONTENT BLOCKS --}}
    <div class="prose max-w-none">

        @foreach($blog->content_blocks ?? [] as $block)

            @switch($block['type'])

                {{-- HEADING --}}
                @case('heading')
                    <h2 class="text-2xl font-semibold text-red-700 mb-4">
                        {{ $block['data']['text'] ?? '' }}
                    </h2>
                @break

                {{-- PARAGRAPH --}}
                @case('paragraph')
                    <p class="mb-6">
                        {!! $block['data']['text'] ?? '' !!}
                    </p>
                @break

                {{-- IMAGE --}}
                @case('image')
                    <div class="my-8 flex justify-center">
                        <img src="{{ asset('storage/' . ($block['data']['url'] ?? '')) }}"
                             alt="{{ $block['data']['caption'] ?? '' }}"
                             class="rounded-xl shadow max-w-full" />
                        @if(!empty($block['data']['caption']))
                            <p class="text-sm text-gray-500 mt-2 text-center">
                                {{ $block['data']['caption'] }}
                            </p>
                        @endif
                    </div>
                @break

                {{-- BULLET LIST --}}
                @case('list')
                    <ul class="list-disc pl-6 mb-8 space-y-1">
                        @foreach($block['data']['items'] ?? [] as $item)
                            <li>{!! $item['text'] ?? '' !!}</li>
                        @endforeach
                    </ul>
                @break

                {{-- RELATED SERVICES --}}
                @case('related_services')
                    <div class="mt-10 p-6 bg-gray-50 rounded-xl border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-700 mb-4">
                            {{ $block['data']['title'] ?? 'Related Services' }}
                        </h3>
                        @if(!empty($block['data']['links']))
                            <ul class="space-y-2 mb-6">
                                @foreach($block['data']['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}"
                                           class="text-red-600 hover:underline font-medium">
                                            {{ $link['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <a href="{{ $block['data']['appointment_url'] ?? route('book-appointment.doctors') }}"
                           data-track="book-appointment"
                           class="inline-flex items-center gap-2 bg-red-500 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-red-600 transition">
                            Book an Appointment
                            <span class="text-base leading-none">→</span>
                        </a>
                    </div>
                @break

                {{-- QUOTE --}}
                @case('quote')
                    <blockquote class="border-l-4 border-red-500 pl-4 italic text-gray-600 my-6">
                        "{{ $block['data']['text'] ?? '' }}"
                        @if(!empty($block['data']['author']))
                            <span class="block mt-2 text-sm font-semibold text-gray-500">
                                — {{ $block['data']['author'] }}
                            </span>
                        @endif
                    </blockquote>
                @break

            @endswitch

        @endforeach

    </div>

    @if(!empty($blog->faqs))
        <section id="faqs" class="mt-12 max-w-3xl mx-auto scroll-mt-32">
            <h2 class="text-2xl font-semibold text-gray-800 mb-8">Frequently Asked Questions</h2>
            <div class="space-y-4">
                @foreach($blog->faqs as $faq)
                    <div class="border border-gray-200 rounded-lg p-5 bg-white shadow-sm">
                        <button type="button"
                            class="faq-question w-full flex justify-between items-center text-left font-medium text-gray-800 gap-4">
                            <span>{{ $faq['question'] ?? '' }}</span>
                            <span class="text-red-600 text-xl shrink-0">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600 leading-relaxed">
                            {{ $faq['answer'] ?? '' }}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        @push('schema')
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => collect($blog->faqs)->map(fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'] ?? '',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'] ?? '',
                ],
            ])->values()->all(),
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
        </script>
        @endpush
    @endif

</main>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const ans = btn.parentElement.querySelector('.faq-answer');
            const icon = btn.querySelector('span:last-child');
            ans.classList.toggle('hidden');
            icon.textContent = ans.classList.contains('hidden') ? '+' : '−';
        });
    });
});
</script>
@endpush
