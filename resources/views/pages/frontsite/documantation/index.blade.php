@extends('layouts.default')

@section('title', 'Galeri')

@section('content')

<!-- Content -->
<main class="min-h-screen">

    <!-- Alumni Schedule -->
    <section id="documentation" class="relative mt-12">
        <div class="px-4 py-16 mx-auto max-w-7xl sm:px-14">
            <h3 class="text-2xl font-semibold text-[#1E2B4F]">Galeri</h3>
            <p class="text-[#A7B0B5] mt-2">Galeri HMI Komisariat PNJ</p>

            <div class="row g-4">
                @forelse($documantation as $documantation_item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ url(Storage::url($documantation_item->photo)) }}" data-toggle="lightbox"
                        data-caption="{{ $documantation_item->name ?? '' }}" data-gallery="mydocumentation">
                        <img src="{{ url(Storage::url($documantation_item->photo)) }}"
                            alt="{{ $documantation_item->name ?? '' }}" class="rounded img-fluid"
                            style="max-height: 250px; object-fit: cover;">
                    </a>
                </div>
                @empty
                <p class="text-center">Tidak ada dokumentasi yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>
</main>
<!-- End Content -->

@endsection

@push('after-style')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endpush

@push('after-script')
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush