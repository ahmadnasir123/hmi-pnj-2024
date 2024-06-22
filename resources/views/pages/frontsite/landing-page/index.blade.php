@extends('layouts.default')

@section('title', 'Home')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!-- Hero -->
    <section id="home" class="relative mt-12">
        <!-- Hero Image -->
        <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0" aria-hidden="true">
            <img src="{{ asset('/assets/frontsite/images/hmi.png') }}"
                class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="Hero Image" />
            {{-- --}}
        </div>

        <!-- Hero Description -->
        <div class="relative px-4 mx-auto max-w-7xl lg:px-14 lg:py-16">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-6">

                    <!-- Label New -->
                    <h1>
                        <div class="flex items-center">
                            <span
                                class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">HMI
                                PNJ</span>
                            <span
                                class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4">Himpunan
                                Mahasiswa Islam</span>
                        </div>

                        <span class="block mt-6 text-4xl font-semibold sm:text-5xl">
                            <span class="block text-[#1E2B4F] leading-normal">HMI Kom. Politeknik <br>Negeri
                                Jakarta</span>
                        </span>
                    </h1>
                    <!-- End Label New -->

                    <!-- Text -->
                    {{-- <div class="flex flex-wrap gap-16 mt-8">
                        <span
                            class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">"Terbinanya
                            Insan Akademis, Pencipta, Pengabdi, Yang Bernafaskan Islam dan Bertanggung Jawab Atas
                            Terwujudnya Masyarakat
                            Adil Makmur Yang Diridhoi Allah Subhanahu Wa Ta'ala"</span>
                    </div> --}}
                    <div class="flex flex-wrap gap-16 mt-8">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
                            </div>
                            <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">Kader HMI</h5>
                                <p class="text-[#AFAEC3]">Politeknik Negeri Jakarta </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
                            </div>
                            <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">Mission HMI</h5>
                                <p class="text-[#AFAEC3]">AD HMI</p>
                            </div>
                        </div>
                    </div>
                    <!-- Text -->

                    <!-- CTA Button -->
                    <div class="grid flex-wrap gap-5 mt-20 lg:flex">
                        <a href="{{ route('register') }}"
                            class="text-white text-lg font-medium text-center bg-[#2AB49B] rounded-full px-12 py-3">Sign
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
    <section id="categori" class="mt-32 bg-[#F9FBFC]">
        <div class="px-4 py-16 mx-auto max-w-7xl lg:px-14">
            <h3 class="text-2xl font-semibold">Kategori Pengurus</h3>
            <p class="text-[#A7B0B5] mt-2">Kategori kepengurusan HMI Komisariat PNJ</p>

            <div class="grid gap-6 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 sm:gap-8 md:gap-10 lg:gap-12">
                @forelse($category as $key => $category_item)
                <!-- Card -->
                <a href="#"
                    class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">{{ $category_item->name ?? '' }}</h5>
                    <p class="text-[#AFAEC3] mt-1">{{ $category_item->management->count() }} </p>
                </a>
                <!-- End Card -->
                @empty
                {{-- empty --}}
                @endforelse
            </div>

        </div>
    </section>
    <!-- End Popular Categories -->

    <!-- Management -->
    <section id="pengurus" class="mt-4 lg:mt-16 ">
        <div class="px-4 mx-auto max-w-7xl lg:px-14 py-14">
            <h3 class="text-[#1E2B4F] text-2xl font-semibold">Pengurus</h3>
            <p class="text-[#A7B0B5] mt-2">Pengurus HMI Komisariat PNJ {{ \Carbon\Carbon::now()->format('Y') }}</p>

            <!-- Card -->
            <div class="grid gap-12 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-10">

                @forelse($management as $key => $management_item)

                {{-- <a href="{{ route('appointment.doctor', $management_item->id) }}" class="group"> --}}
                    <div class="relative z-10 w-full h-[350px] rounded-2xl ">
                        <img src="{{ url(Storage::url($management_item->photo)) }}"
                            class="object-cover object-center w-full h-full bg-center bg-no-repeat"
                            alt="{{ $management_item->employee->name ?? '' }}">

                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">{{ $management_item->employee->name ??
                                    '' }}</div>
                                <div class="text-[#AFAEC3] mt-1">{{ $management_item->category->name ?? '' }}</div>
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
    <!-- End Best Doctors -->

<!--Section contact start-->
<section id="contact" class="mt-4 lg:mt-16 bg-[#F9FBFC] py-12">
    <div class="container px-4 mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto mb-16 text-center">
                <h4 class="mb-2 text-lg font-semibold text-[#2AB49B]">Contact</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Hubungi Kami</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Blanditiis, nostrum?</p>
            </div>
        </div>
        <form>
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base font-bold text-[#2AB49B]">Nama</label>
                    <input type="text" id="name"
                        class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-2AB49B focus:ring-1 focus:border-2AB49B">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="email" class="text-base font-bold text-[#2AB49B]">Email</label>
                    <input type="email" id="email"
                        class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-2AB49B focus:ring-1 focus:border-2AB49B">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="message" class="text-base font-bold text-[#2AB49B]">Pesan</label>
                    <textarea id="message"
                        class="w-full h-32 p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-2AB49B focus:ring-1 focus:border-2AB49B"></textarea>
                </div>
                <div class="w-full px-4">
                    <button
                        class="w-full px-8 py-3 text-base font-semibold text-white transition duration-500 rounded-full bg-[#2AB49B] hover:opacity-80 hover:shadow-lg">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!--Section contact end-->

</main>
<!-- End Content -->

<!-- Footer -->
<footer class="mt-12 text-white bg-gray-900 footer">
    <div class="container px-4 py-8 mx-auto text-center">
        <div class="mb-4 footer-brand">
            <a href="/" class="text-2xl font-bold text-white">HMI Komisariat PNJ</a>
        </div>
        <p class="mb-2 footer-address">Alamat: Jl. Politeknik, UI Depok, 16425, Indonesia</p>
        <p class="mb-4 footer-contact">Email: info@hmipnj.com | Tel: +62 21 7270025</p>
        <div class="flex justify-center mb-4 space-x-4 footer-social">
            <a href="https://www.instagram.com/hmikomisariatpnj/" class="text-white hover:text-gray-400">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/hmikomisariatpnj/" class="text-white hover:text-gray-400">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.instagram.com/hmikomisariatpnj/" class="text-white hover:text-gray-400">
                <i class="bi bi-instagram"></i>
            </a>
        </div>
        <p class="text-gray-400 footer-copy">&copy; {{ \Carbon\Carbon::now()->format('Y') }} HMI Komisariat PNJ. All rights reserved.</p>
    </div>
</footer>
<!-- End Footer -->


@endsection

@push('after-style')
<!-- Bootstrap CSS -->
<link href="{{ url ('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet"
    href="{{ url ('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}">

<!-- Custom CSS -->
<style>
    .footer {
        background-color: #1E2B4F;
        padding: 2rem 0;
    }

    .footer .footer-brand a {
        font-size: 1.75rem;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
    }

    .footer .footer-brand a:hover {
        color: #A7B0B5;
    }

    .footer .footer-address,
    .footer .footer-contact {
        color: #A7B0B5;
        margin-bottom: 1rem;
    }

    .footer .footer-social a {
        font-size: 1.5rem;
        transition: color 0.3s;
    }

    .footer .footer-social a:hover {
        color: #A7B0B5;
    }

    .footer .footer-copy {
        color: #A7B0B5;
        margin-top: 1rem;
        font-size: 0.875rem;
    }

    .footer .container {
        max-width: 960px;
    }
</style>

<style>
    #contact {
        background-color: #F9FBFC;
        padding: 3rem 0;
    }

    #contact h4 {
        color: #2AB49B;
    }

    #contact h2 {
        color: #1E2B4F;
    }

    #contact p {
        color: #A7B0B5;
    }

    #contact label {
        color: #2AB49B;
    }

    #contact input,
    #contact textarea {
        background-color: #E5E7EB;
        border: 1px solid transparent;
        border-radius: 0.5rem;
        padding: 0.75rem;
        width: 100%;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    #contact input:focus,
    #contact textarea:focus {
        border-color: #2AB49B;
        box-shadow: 0 0 0 1px #2AB49B;
        outline: none;
    }

    #contact button {
        background-color: #2AB49B;
        border: none;
        border-radius: 9999px;
        color: #fff;
        padding: 0.75rem 1.5rem;
        text-align: center;
        transition: opacity 0.3s, box-shadow 0.3s;
        width: 100%;
    }

    #contact button:hover {
        opacity: 0.8;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
    @endpush

@push('after-script')
<!-- Bootstrap JS -->
<script src="{{ url ('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ url ('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js') }}"></script>
<script src="{{ url ('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
@endpush