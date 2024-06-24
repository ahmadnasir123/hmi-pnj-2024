@extends('layouts.default')

@section('title', 'Home')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!-- Hero -->
    <section id="home" class="relative mt-12">
        <!-- Hero Image -->
       <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0 hero-image" aria-hidden="true">
            <img src="{{ asset('/assets/frontsite/images/bg-hmi-2.png') }}"
                class="bg-cover bg-center object-cover object-center max-h-[580px] hero-image-inner shadow-lg" alt="Hero Image" />
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

    <!-- About section start -->
    <section id="about" class="relative mt-12 g-[#F9FBFC]">

        <div class="relative px-4 mx-auto max-w-7xl lg:px-14 lg:py-16">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="mb-10 lg:col-span-6 lg:mb-0">
                    <h3 class="mb-4 text-4xl font-semibold text-[#1E2B4F] lg:text-5xl">Tentang HMI Komisariat PNJ</h3>
                    <p class="max-w-xl text-lg text-[#AFAEC3]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Minus, sint rem enim assumenda libero tempore rerum delectus deserunt itaque maiores error nemo.
                        Nobis suscipit molestiae facilis doloribus quo magnam corrupti.</p>
                </div>
                <div class="lg:col-span-6">
                    <h3 class="mb-4 text-3xl font-semibold text-[#1E2B4F] lg:pt-10">Mari Berteman</h3>
                    <p class="mb-6 text-lg text-[#AFAEC3]">Ayok ikuti kami di social media yang lain</p>
                    <div class="flex items-center space-x-4">
                        <a href="https://www.instagram.com/hmikomisariatpnj/" target="_blank"
                            class="social-icon instagram">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/hmikomisariatpnj/" target="_blank"
                            class="social-icon youtube">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/hmikomisariatpnj/" target="_blank"
                            class="social-icon tiktok">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>TikTok</title>
                                <path
                                    d="M12.26 7.804v5.43s-.005.15-.057.602c-.117.992-.456 1.683-.939 2.188-.486.51-1.154.823-1.917.835-.007 0-.019.002-.026.002-.374 0-.729-.06-1.056-.172a3.034 3.034 0 0 1-1.576-1.27 2.835 2.835 0 0 1-.468-1.723c.046-.944.437-1.608.771-1.95.67-.687 1.58-.827 2.063-.827.144 0 .261.008.347.013v-3.15a5.733 5.733 0 0 0-.707-.038c-.687 0-2.081.121-3.319 1.237-1.544 1.38-1.366 3.05-1.324 3.476.056.55.269 1.836 1.347 2.923 1.515 1.51 3.308 1.457 4.09 1.415.393-.02 2.48-.102 3.644-1.953.934-1.45.904-3.194.894-3.646V6.92c.432.117.936.215 1.505.284.524.064 1.253.11 2.137.043.13-.01.255-.02.373-.03v-2.72c-.228.026-1.016.039-1.88-.084-.96-.139-1.46-.397-1.63-.504a3.704 3.704 0 0 1-.884-.68c-.577-.59-.96-1.306-1.172-1.878H12.26v5.475z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->



    <!-- Management -->
    <section id="pengurus" class="mt-4 lg:mt-16 ">
        <div class="px-4 mx-auto max-w-7xl lg:px-14 py-14">
            <h3 class="text-[#1E2B4F] text-2xl font-semibold">Pengurus</h3>
            <p class="text-[#A7B0B5] mt-2">Pengurus HMI Komisariat PNJ Tahun {{ \Carbon\Carbon::now()->format('Y') }}
            </p>

            <!-- Card -->
            <div class="grid gap-12 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-10">

                @forelse($management as $key => $management_item)

                {{-- <a href="{{ route('appointment.doctor', $management_item->id) }}" class="group"> --}}
                    <div class="relative z-10 w-full h-[250px] rounded-2xl ">
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
    <section id="contact" class="mt-12 lg:mt-24 bg-[#F9FBFC] py-12">
        <div class="container px-4 mx-auto">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold text-[#2AB49B]">Contact</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Hubungi Kami
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis, nostrum?</p>
                </div>
            </div>
            <form action="{{ route('message.store') }}" method="POST" class="mt-8 space-y-5">
                @csrf
                <div class="w-full px-4 mb-8">
                    <label for="pesan" class="text-base font-bold text-[#2AB49B]">Pesan</label>
                    <textarea name="pesan" id="pesan"
                        class="w-full h-32 p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-2AB49B focus:ring-1 focus:border-2AB49B">{{ old('pesan') }}</textarea>
                    @if($errors->has('pesan'))
                    <p style="font-style: bold; color: red;">{{ $errors->first('pesan') }}</p>
                    @endif
                </div>
                <div class="w-full px-4">
                    <button type="submit"
                        class="w-full px-8 py-3 text-base font-semibold text-white transition duration-500 rounded-full bg-[#2AB49B] hover:opacity-80 hover:shadow-lg"
                        onclick="return confirm('Apakah Anda yakin ingin mengirim pesan?')">Kirim</button>
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
        <p class="text-gray-400 footer-copy">&copy; {{ \Carbon\Carbon::now()->format('Y') }} HMI Komisariat PNJ. All
            rights reserved.</p>
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

    #contact {
        margin-top: 3rem;
        /* 12 for default margin top */
    }

    @media (min-width: 1024px) {
        #contact {
            margin-top: 6rem;
            /* 24 for larger screens */
        }
    }

    #contact h4 {
        color: #2AB49B;
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

    #about {
        padding-bottom: 32px;
        padding-top: 36px;
        background-color: #F9FBFC;
    }


    #about .container {
        display: flex;
        flex-wrap: wrap;
    }



    #about p {
        max-width: 36rem;
        font-size: 1rem;
        font-weight: medium;
        color: #555;
    }


    #about .social-icon {
        margin-right: 10px;
        width: 40px;
        height: 40px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background-color: #fff;
        transition: background-color 0.3s;
    }

    #about .social-icon:hover {
        background-color: #2AB49B;
    }

    #about .social-icon svg {
        fill: #2AB49B;
    }

    #about .social-icon:hover svg {
        fill: #fff;
    }

    /* Specific styles for different social icons */
    .social-icon.instagram {
        background-color: #E1306C;
    }

    .social-icon.instagram:hover {
        background-color: #C13584;
    }

    .social-icon.youtube {
        background-color: #FF0000;
    }

    .social-icon.youtube:hover {
        background-color: #CC0000;
    }

    .social-icon.linkedin {
        background-color: #0077B5;
    }

    .social-icon.linkedin:hover {
        background-color: #005682;
    }

    .social-icon.tiktok {
        background-color: #000000;
    }

    .social-icon.tiktok:hover {
        background-color: #282828;
    }
</style>

<style>
    .hero-image {
    right: 50px; /* Geser gambar ke kiri */
    }
    
    .hero-image-inner {
    max-width: none; /* Pastikan gambar tidak dibatasi lebar */
    width: auto;
    height: auto;
    margin-top: 70px; /* Menambahkan margin atas */
    }
</style>
@endpush

@push('after-script')
<!-- Bootstrap JS -->
<script src="{{ url ('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ url ('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js') }}"></script>
<script src="{{ url ('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
@endpush