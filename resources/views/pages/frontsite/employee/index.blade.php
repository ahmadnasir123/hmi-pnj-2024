@extends('layouts.default')

@section('title', 'Kader')

@section('content')

<!-- Content -->
<main class="min-h-screen">
    <!-- Doctor Schedule -->
    <section id="employee" class="relative mt-12">
        <div class="px-4 py-16 mx-auto max-w-7xl lg:px-14">
            <h3 class="text-2xl font-semibold text-[#1E2B4F]">Kader</h3>
            <p class="text-[#A7B0B5] mt-2">Kader HMI Komisariat PNJ</p>

            <!-- Card -->
            <div class="grid gap-8 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-8">
                @forelse($employee as $employees)
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg transition hover:ring-2 hover:ring-[#0D63F3]">
                    <div class="relative w-full h-[250px] overflow-hidden">
                        <img src="{{ url(Storage::url($employees->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $employees->name ?? '' }}">
                    </div>
                    <div class="p-2">
                        <div class="text-[#1E2B4F] text-base font-semibold">{{ $employees->name ?? '' }}</div>
                        <div class="text-[#AFAEC3] mt-1 text-sm">{{ $employees->category->name ?? '' }}</div>
                        <div class="mt-2">
                            <div class="text-[#1E2B4F] text-base font-semibold">Angkatan</div>
                            <div class="text-[#AFAEC3] mt-1 text-sm">{{ $employees->angkatan }}</div>
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