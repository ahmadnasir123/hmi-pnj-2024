@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Kader')

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
                <h3 class="mb-0 content-header-title d-inline-block">Edit Kader HMI PNJ</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item">Kader HMI PNJ</li>
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
                                        <p>Semua field<code>required</code> harus diisi, sebelum anda mengklik tombol
                                            submit.</p>
                                    </div>
                                    <form class="form form-horizontal" action="{{ route("backsite.employee.update",
                                        [$employee->id]) }}" method="POST" enctype="multipart/form-data">

                                        @method('PUT')
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="fa fa-edit"></i> Form Kader HMI PNJ</h4>

                                            <div class="form-group row {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                                <label class="col-md-3 label-control">Divisi <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <select name="category_id" id="category_id" class="form-control select2" required>
                                                        <option value="{{ '' }}" disabled selected>Choose</option>
                                                        @foreach($category as $key => $category_item)
                                                        <option value="{{ $category_item->id }}" {{ $employee->
                                                            category_id == $category_item->id ? 'selected' : ''
                                                            }}>{{ $category_item->name }}</option>
                                                        @endforeach
                                                    </select>
                                            
                                                    @if($errors->has('category_id'))
                                                    <p style="font-style: bold; color: red;">{{
                                                        $errors->first('category_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="name">Name <code
                                                        style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        placeholder="example Jhon doe or something"
                                                        value="{{ old('name', isset($employee) ? $employee->name : '') }}"
                                                        autocomplete="off" required>

                                                    @if($errors->has('name'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('name')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="angkatan">Angkatan <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="angkatan" name="angkatan" class="form-control" placeholder="example 2020"
                                                        value="{{ old('angkatan', isset($employee) ? $employee->angkatan : '') }}" autocomplete="off" required>
                                            
                                                    @if($errors->has('angkatan'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('angkatan')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="lk1">LK-1 <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="lk1" name="lk1" class="form-control" placeholder="example Komisariat PNJ"
                                                        value="{{ old('lk1', isset($employee) ? $employee->lk1 : '') }}" autocomplete="off" required>
                                            
                                                    @if($errors->has('lk1'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('lk1')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tahun_1">Tahun <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="tahun_1" name="tahun_1" class="form-control" placeholder="example 2021"
                                                        value="{{ old('tahun_1', isset($employee) ? $employee->tahun_1 : '') }}" autocomplete="off" required>
                                            
                                                    @if($errors->has('tahun_1'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('tahun_1')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="lk2">Lk-2 <code style="color:green;">Optional</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="name" name="lk2" class="form-control" placeholder="example Cabang Depok"
                                                        value="{{ old('lk2', isset($employee) ? $employee->lk2 : '') }}" autocomplete="off">
                                            
                                                    @if($errors->has('lk2'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('lk2')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tahun_2">Tahun <code style="color:green;">Optional</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="tahun_2" name="tahun_2" class="form-control" placeholder="example 2022"
                                                        value="{{ old('tahun_2', isset($employee) ? $employee->tahun_2 : '') }}" autocomplete="off">
                                            
                                                    @if($errors->has('tahun_2'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('tahun_2')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="lk3">LK-3 <code style="color:green;">Optional</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="lk3" name="lk3" class="form-control" placeholder="example Badko Jawa Barat"
                                                        value="{{ old('lk3', isset($employee) ? $employee->lk3 : '') }}" autocomplete="off">
                                            
                                                    @if($errors->has('lk3'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('lk3')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tahun_3">Tahun <code style="color:green;">Optional</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <input type="text" id="tahun_3" name="tahun_3" class="form-control" placeholder="example 2023"
                                                        value="{{ old('tahun_3', isset($employee) ? $employee->tahun_3 : '') }}" autocomplete="off">
                                            
                                                    @if($errors->has('tahun_3'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('tahun_3')
                                                        }}</p>
                                                    @endif
                                                </div>
                                            </div>

                            
                                        </div>

                                        <div class="text-right form-actions">
                                            <a href="{{ route('backsite.employee.index') }}" style="width:120px;"
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