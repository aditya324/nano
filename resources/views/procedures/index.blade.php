@extends('layouts.app')

@section('title')
    Medical Procedures in Bangalore | Nano Hospitals
    @if($procedures->currentPage() > 1)
        - Page {{ $procedures->currentPage() }}
    @endif
@endsection

@section('twitter_title', 'All Medical Procedures | Nano Hospitals Bangalore')
@section('twitter_description', 'Explore all medical procedures performed at Nano Hospitals Bangalore — from knee replacement and cardiac surgery to cancer treatment and more.')
@section('meta_description')
Explore surgical and medical procedures at Nano Hospitals Bangalore — from knee replacement and cardiac surgery to cancer treatment and minimally invasive procedures.
    @if($procedures->currentPage() > 1)
        - Page {{ $procedures->currentPage() }}
    @endif
@endsection
@section('meta_keywords', 'all procedures, procedures in Bangalore, procedures in India')
@section('canonical', request('page') > 1 ? url()->current() . '?page=' . request('page') : url()->current())



@section('content')
@php use Illuminate\Support\Str; @endphp

<section class="max-w-7xl mx-auto px-4 py-20">

    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-semibold text-gray-800">All Procedures</h1>
    </div>

    <!-- Search + Alphabet -->
    <form method="GET" action="{{ route('procedures.index') }}"
          class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

        <!-- Search -->
        <div class="flex w-full md:max-w-md">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search for Medical Procedures / Treatment"
                class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none"
            />
            <button class="bg-red-500 text-white px-4 rounded-r-md">
                GO
            </button>
        </div>

        <!-- Alphabet Filter -->
        <select
            name="letter"
            onchange="this.form.submit()"
            class="bg-red-500 text-white px-5 py-2 rounded-full text-sm focus:outline-none w-fit"
        >
            <option value="ALL">Sort By Alphabet</option>
            @foreach(range('A','Z') as $letter)
                <option value="{{ $letter }}" {{ request('letter') == $letter ? 'selected' : '' }}>
                    {{ $letter }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($procedures as $procedure)
            <div class="bg-white rounded-xl shadow p-5">
    <div class="flex items-center justify-between">
        
        <h3 class="font-semibold text-gray-800">
            {{ $procedure->title }}
        </h3>

        <a href="{{ route('procedures.show', $procedure->slug) }}"
           class="w-6 h-6 bg-red-500 text-white rounded-full 
                  flex items-center justify-center text-sm">
            +
        </a>

    </div>
</div>

        @empty
            <div class="col-span-2 text-center text-gray-500">
                No procedures found.
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-10">
        {{ $procedures->links() }}
    </div>

</section>
@endsection