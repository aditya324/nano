@extends('layouts.app')


@section('title')
Health Blogs & Articles at Nano Hospitals
    @if($blogs->currentPage() > 1)
        - Page {{ $blogs->currentPage() }}
    @endif
@endsection
@section('meta_description')
Health blogs and expert articles from Nano Hospitals covering treatments, prevention tips, and medical insights for patients in Bangalore.
    @if($blogs->currentPage() > 1)
        - Page {{ $blogs->currentPage() }}
    @endif
@endsection
@section('meta_keywords', 'health blogs, health articles, Nano Hospitals, health news, medical treatments')
@section('canonical', request('page') > 1 ? url()->current() . '?page=' . request('page') : url()->current())
@section('content')
    <h1 class="text-2xl md:text-3xl font-semibold text-center text-[#737373] mb-12 pt-28">
        Health Blogs & Articles
    </h1>

    <div class="container mx-auto grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 mb-10">

        @foreach ($blogs as $blog)
            <div class="max-w-sm rounded overflow-hidden shadow-lg h-full">

                <div class="w-full relative">
                    <img loading="lazy" class="w-full h-full object-cover"
                        src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('assets/blogs/default.webp') }}"
                        alt="{{ $blog->title }}">

                    <p class="absolute bottom-25 text-center w-full bg-white text-xs p-2 text-[#FA424A] font-semibold">
                        {{ $blog->title }}
                    </p>
                </div>

                <div class="px-6 py-4">
                    <div class="text-lg font-medium mt-5 text-[#525252] ">
                        {{ $blog->excerpt ?? 'Read more about this health topic...' }}
                    </div>

                    <div class="flex justify-center pt-10">
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="text-[#6C3130] text-xl font-medium" aria-label="Read article: {{ $blog->title }}">
                            Read post
                        </a>
                    </div>
                </div>

            </div>
        @endforeach


    </div>
    
    <div class="flex justify-center mt-10 mb-10">
        {{ $blogs->links() }}
    </div>
@endsection
