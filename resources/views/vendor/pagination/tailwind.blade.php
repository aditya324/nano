@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">

        <div class="flex gap-2 items-center justify-between sm:hidden">

            @if ($paginator->onFirstPage())
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 cursor-not-allowed leading-5 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-700 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-800 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 dark:hover:text-gray-200">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-700 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-800 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 dark:hover:text-gray-200">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 cursor-not-allowed leading-5 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>

        <div class="hidden sm:flex-1 sm:flex sm:gap-2 sm:items-center sm:justify-between">

            <div>
                <p class="text-sm text-gray-700 leading-5 dark:text-gray-600">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="flex items-center justify-center gap-2">

                    {{-- Previous Page --}}
                    @if ($paginator->onFirstPage())
                        <span
                            class="flex items-center justify-center w-10 h-10 text-gray-400 bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                            ‹
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}"
                            class="flex items-center justify-center w-10 h-10 text-red-600 bg-white border border-red-200 rounded-full hover:bg-red-50 hover:border-red-400 transition">
                            ‹
                        </a>
                    @endif


                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- Dots --}}
                        @if (is_string($element))
                            <span class="flex items-center justify-center w-10 h-10 text-gray-400">…</span>
                        @endif

                        {{-- Page Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span
                                        class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-white bg-red-600 rounded-full">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="flex items-center justify-center w-10 h-10 text-sm font-medium text-red-600 bg-white border border-red-200 rounded-full hover:bg-red-50 hover:border-red-400 transition">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach


                    {{-- Next Page --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}"
                            class="flex items-center justify-center w-10 h-10 text-red-600 bg-white border border-red-200 rounded-full hover:bg-red-50 hover:border-red-400 transition">
                            ›
                        </a>
                    @else
                        <span
                            class="flex items-center justify-center w-10 h-10 text-gray-400 bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                            ›
                        </span>
                    @endif

                </span>

            </div>
        </div>
    </nav>
@endif
