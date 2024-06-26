@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Divisi')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        {{-- error --}}
        @if ($errors->any())
        <div class="mb-2 alert bg-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- breadcumb --}}
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block">Edit Divisi</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item">Divisi</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- forms --}}
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="mb-0 list-inline">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Semua<code>field</code> harus diisi, sebelum anda mengklik tombol submit.</p>
                                    </div>
                                    <form class="form form-horizontal" action="{{ route("backsite.category.update",
                                        [$category->id]) }}" method="POST" enctype="multipart/form-data">

                                        @method('PUT')
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="fa fa-edit"></i> Form Divisi</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="name">Name <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        placeholder="example PAO"
                                                        value="{{ old('name', isset($category) ? $category->name : '') }}"
                                                        autocomplete="off" required>

                                                    @if($errors->has('name'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('name')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right form-actions">
                                            <a href="{{ route('backsite.category.index') }}" style="width:120px;"
                                                class="mr-1 text-white btn bg-blue-grey"
                                                onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                <i class="ft-x"></i> Cancel
                                            </a>
                                            <button type="submit" style="width:120px;" class="btn btn-cyan"
                                                onclick="return confirm('Are you sure want to save this data ?')">
                                                <i class="la la-check-square-o"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>
<!-- END: Content-->

@endsection


@push('after-script')

{{-- inputmask --}}
<script src="{{ asset('/assets/backsite/third-party/inputmask/dist/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/assets/backsite/third-party/inputmask/dist/inputmask.js') }}"></script>
<script src="{{ asset('/assets/backsite/third-party/inputmask/dist/bindings/inputmask.binding.js') }}"></script>

<script>
    $(function() {
            $(":input").inputmask();
        });
</script>

@endpush