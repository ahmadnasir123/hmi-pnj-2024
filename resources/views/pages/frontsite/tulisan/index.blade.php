@extends('layouts.default')

@section('title', 'Tulisan Kader')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!--Section blog start-->
    <section id="blog" class="pb-32 pt-36 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary">Blog</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Tulisan
                        terkini
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ea in consequatur asperiores culpa quae aspernatur enim repellendus excepturi
                        sequi qui.</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden bg-white shadow-lg rounded-xl dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full">

                        <div class="px-6 py-8">
                            <h3>
                                <a href="#"
                                    class="block mb-3 text-xl font-semibold truncate text-dark hover:text-primary dark:text-white">Tips
                                    Belajar Programming</a>
                            </h3>
                            <p class="font=font-medium text-base text-secondary mb-6">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Reprehenderit placeat blanditiis odit vitae autem
                                voluptatibus
                                suscipit. Harum similique adipisci aliquid?</p>
                            <a href="#"
                                class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>

                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden bg-white shadow-lg rounded-xl dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?laptop+gaming" alt="Laptop Gaming" class="w-full">

                        <div class="px-6 py-8">
                            <h3>
                                <a href="#"
                                    class="block mb-3 text-xl font-semibold truncate text-dark hover:text-primary dark:text-white">Review
                                    Laptop Gaming</a>
                            </h3>
                            <p class="font=font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Quibusdam velit in aspernatur!</p>
                            <a href="#"
                                class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>

                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden bg-white shadow-lg rounded-xl dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?coffe" alt="Coffe" class="w-full">

                        <div class="px-6 py-8">
                            <h3>
                                <a href="#"
                                    class="block mb-3 text-xl font-semibold truncate text-dark hover:text-primary dark:text-white">Menikmati
                                    secangkir kopi</a>
                            </h3>
                            <p class="font=font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Odio, cumque natus! Quibusdam, pariatur nihil.</p>
                            <a href="#"
                                class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section blog end-->

</main>
<!-- End Content -->

@endsection