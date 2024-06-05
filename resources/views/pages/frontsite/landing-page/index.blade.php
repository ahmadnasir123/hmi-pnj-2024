@extends('layouts.default')

@section('title', 'Home')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!-- Hero -->
    <section id="home" class="relative mt-12">
        <!-- Hero Image -->
        <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0" aria-hidden="true">
            <img src="{{ asset('/assets/frontsite/images/hero-image.png') }}"
                class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="Hero Image" />
            <div class="absolute bottom-0 py-5 text-center bg-white shadow-2xl -left-20 -translate-y-14 px-7 rounded-xl">
                <h5 class="font-medium text-[#1E2B4F]">Dr. Kartika Me</h5>
                <p class="text-xs text-[#AFAEC3] mt-1">Nutrionist</h1>
                    <span
                        class="block text-xs text-[#1E2B4F] font-medium bg-[#F2F6FE] px-4 py-2 rounded-full text-center mt-7">Book
                        sekarang</span>
            </div>
        </div>
    
        <!-- Hero Description -->
        <div class="relative px-4 mx-auto max-w-7xl lg:px-14 lg:py-16">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-6">
    
                    <!-- Label New -->
                    <h1>
                        <div class="flex items-center">
                            <span
                                class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">New</span>
                            <span
                                class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4">Emergency
                                call feature updated</span>
                        </div>
    
                        <span class="block mt-6 text-4xl font-semibold sm:text-5xl">
                            <span class="block text-[#1E2B4F] leading-normal">Puskesmas <br />Naga Juang</span>
                        </span>
                    </h1>
                    <!-- End Label New -->
    
                    <!-- Text -->
                    <div class="flex flex-wrap gap-16 mt-8">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
                            </div>
                            <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">Best Recipe</h5>
                                <p class="text-[#AFAEC3]">for your medicine</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
                            </div>
                            <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">Free Consultation</h5>
                                <p class="text-[#AFAEC3]">as we promised</p>
                            </div>
                        </div>
                    </div>
                    <!-- Text -->
    
                    <!-- CTA Button -->
                    <div class="grid flex-wrap gap-5 mt-20 lg:flex">
                        <a href="{{ route('register') }}"
                            class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3">Sign
                            Up</a>
                        <a href="#"
                            class="text-[#1E2B4F] text-lg font-medium text-center bg-[#F2F6FE] rounded-full px-16 py-3">Story</a>
                    </div>
                    <!-- CTA Button -->
    
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Categories -->
    <section id="spesialis" class="mt-32 bg-[#F9FBFC]">
        <div class="px-4 py-16 mx-auto max-w-7xl lg:px-14">
            <h3 class="text-2xl font-semibold">Kategori Spesialis Dokter</h3>
            <p class="text-[#A7B0B5] mt-2">Cara cepat untuk mendapatkan pengalaman pertama anda</p>
    
            <div class="grid gap-6 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 sm:gap-8 md:gap-10 lg:gap-12">
                @forelse($specialist as $key => $specialist_item)
                <!-- Card -->
                <a href="#"
                    class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">{{ $specialist_item->name ?? '' }}</h5>
                    <p class="text-[#AFAEC3] mt-1">{{ $specialist_item->doctor->count() }} Dokter</p>
                </a>
                <!-- End Card -->
                @empty
                {{-- empty --}}
                @endforelse
            </div>
    
        </div>
    </section>
    <!-- End Popular Categories -->
    
    <!-- Best Doctors -->
    <section id="doctor" class="mt-4 lg:mt-16">
        <div class="px-4 mx-auto max-w-7xl lg:px-14 py-14">
            <h3 class="text-[#1E2B4F] text-2xl font-semibold">Dokter</h3>
            <p class="text-[#A7B0B5] mt-2">Membantu hidup anda jauh lebih baik</p>
    
            <!-- Card -->
            <div class="grid gap-12 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-10">
    
                @forelse($doctor as $key => $doctor_item)
    
                <a href="{{ route('appointment.doctor', $doctor_item->id) }}" class="group">
                    <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                        <img src="{{ url(Storage::url($doctor_item->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $doctor_item->name ?? '' }}">
                        <div
                            class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                            <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book
                                Sekarang</span>
                        </div>
                    </div>
    
                    <div class="flex items-center justify-between mt-5">
                        <div>
                            <div class="text-[#1E2B4F] text-lg font-semibold">{{ $doctor_item->name ?? '' }}</div>
                            <div class="text-[#AFAEC3] mt-1">{{ $doctor_item->specialist->name ?? '' }}</div>
                        </div>
                        {{-- <div class="flex items-center space-x-2">
                            <img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="Star">
                            <span class="block text-[#1E2B4F] font-medium">4.5</span>
                        </div> --}}
                    </div>
                </a>
    
                @empty
    
                {{-- empty --}}
    
                @endforelse
    
            </div>
            <!-- End Card -->
        </div>
    </section>
    <!-- End Best Doctors -->
    
    <!-- Documantation -->
    <section id="documantation" class="mt-4 lg:mt-16 bg-[#F9FBFC]">
        <div class="px-4 mx-auto max-w-7xl lg:px-14 py-14">
            <h3 class="text-[#1E2B4F] text-2xl font-semibold">Kegiatan</h3>
            <p class="text-[#A7B0B5] mt-2">List Kegiatan Puskesmas Naga Juang </p>
    
            <!-- Card -->
            <div class="grid gap-12 mt-10 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 xl:gap-10">
    
                @forelse($documantation as $key => $documantation_item)
                <div class="group">
                    <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                        <img src="{{ url(Storage::url($documantation_item->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $documantation_item->name ?? '' }}">
    
                    </div>
    
                    <div class="flex items-center justify-between mt-5">
                        <div>
                            <div class="text-[#1E2B4F] text-lg font-semibold">{{ $documantation_item->name ?? '' }}
                            </div>
                            <div class="text-[#AFAEC3] mt-1">{{ $documantation_item->description ?? '' }}</div>
                        </div>
                        {{-- <div class="flex items-center space-x-2">
                            <img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="Star">
                            <span class="block text-[#1E2B4F] font-medium">4.5</span>
                        </div> --}}
                    </div>
                </div>
                @empty
    
                {{-- empty --}}
    
                @endforelse
    
            </div>
            <!-- End Card -->
        </div>
    </section>
    <!-- End Documantation -->

</main>
<!-- End Content -->

@endsection