@extends('layouts.default')

@section('title', 'Tulisan Kader')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!--Section blog start-->
    <section id="alumni" class="relative mt-12">
        <div class="px-4 py-16 mx-auto max-w-7xl lg:px-14">
            <h3 class="text-2xl font-semibold text-[#1E2B4F]">Tulisan Kader</h3>
            <p class="text-[#A7B0B5] mt-2">Tulisan Kader HMI Komisariat PNJ</p>

            <!-- Card -->
            <div class="grid gap-8 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-8">
                @forelse($tulisan as $tulisan_item)
                <div class="mb-8 overflow-hidden transition bg-white shadow-lg rounded-xl card-tulisan">
                    <div class="relative w-full h-[250px] overflow-hidden">
                        <img src="{{ url(Storage::url($tulisan_item->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $tulisan_item->name ?? '' }}">
                    </div>
                    <div class="p-2">
                        <div class="text-[#1E2B4F] text-base font-semibold">{{ $tulisan_item->judul ?? '' }}</div>
                        {{-- <div class="text-[#AFAEC3] mt-1 text-sm">{{ $alumni_item->category->name ?? '' }}</div>
                        --}}
                        <div class="mt-2">
                            <div class="text-[#AFAEC3] mt-1 text-sm">{{ $tulisan_item->deskripsi }}</div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ $tulisan_item->link }}" class="hover-button">Baca
                                Selengkapnya
                            </a>
                            
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
    <!--Section blog end-->

</main>
<!-- End Content -->

@endsection