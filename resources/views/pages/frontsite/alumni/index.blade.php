@extends('layouts.default')

@section('title', 'Alumni')

@section('content')

<!-- Content -->
<main class="min-h-screen">
    <!-- Alumni Section -->
    <section id="alumni" class="relative mt-12">
        <div class="px-4 py-16 mx-auto max-w-7xl lg:px-14">
            <h3 class="text-2xl font-semibold text-[#1E2B4F]">Alumni/Kahmi</h3>
            <p class="text-[#A7B0B5] mt-2">Alumni/Kahmi HMI Komisariat PNJ</p>

            <!-- Card -->
            <div class="grid gap-8 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-8">
                @forelse($alumni as $alumni_item)
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition hover:ring-2 hover:ring-[#0D63F3]">
                    <div class="relative w-full h-[250px] overflow-hidden">
                        <img src="{{ url(Storage::url($alumni_item->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $alumni_item->name ?? '' }}">
                    </div>
                    <div class="p-2">
                        <div class="text-[#1E2B4F] text-base font-semibold">{{ $alumni_item->name ?? '' }}</div>
                        {{-- <div class="text-[#AFAEC3] mt-1 text-sm">{{ $alumni_item->category->name ?? '' }}</div> --}}
                        <div class="mt-2">
                            <div class="text-[#1E2B4F] text-base font-semibold">Angkatan</div>
                            <div class="text-[#AFAEC3] mt-1 text-sm">{{ $alumni_item->angkatan }}</div>
                        </div>
                    </div>
                </div>
                @empty
                {{-- empty --}}
                @endforelse
            </div>
            <!-- End Card -->
        </div>
    </section>
    <!-- End Doctor Schedule -->
</main>
<!-- End Content -->

@endsection