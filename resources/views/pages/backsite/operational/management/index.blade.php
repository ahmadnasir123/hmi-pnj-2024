@extends('layouts.app')

{{-- set title --}}
@section('title', 'Pengurus')

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
                <h3 class="mb-0 content-header-title d-inline-block">Pengurus</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Pengurus</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- add card --}}
        @can('management_create')
        <div class="content-body">
            <section id="add-home">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="text-white card-header bg-success">
                                <a data-action="collapse">
                                    <h4 class="text-white card-title">Add Data</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="mb-0 list-inline">
                                            <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="card-content collapse hide">
                                <div class="card-body card-dashboard">

                                    <form class="form form-horizontal" action="{{ route('backsite.management.store') }}"
                                        method="POST" enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-body">
                                            <div class="form-section">
                                                <p>Please complete the input <code>required</code>, before you click the
                                                    submit
                                                    button.</p>
                                            </div>

                                            <div
                                                class="form-group row {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                                <label class="col-md-3 label-control">Divisi <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <select name="category_id" id="category_id"
                                                        class="form-control select2" required>
                                                        <option value="{{ '' }}" disabled selected>Choose</option>
                                                        @foreach($category as $key => $category_item)
                                                        <option value="{{ $category_item->id }}">{{
                                                            $category_item->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if($errors->has('category_id'))
                                                    <p style="font-style: bold; color: red;">{{
                                                        $errors->first('category_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row {{ $errors->has('employee_id') ? 'has-error' : '' }}">
                                                <label class="col-md-3 label-control">Name <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <select name="employee_id" id="employee_id" class="form-control select2" required>
                                                        <option value="{{ '' }}" disabled selected>Choose</option>
                                                        @foreach($employee as $key => $employee_item)
                                                        <option value="{{ $employee_item->id }}">{{
                                                            $employee_item->name }}</option>
                                                        @endforeach
                                                    </select>
                                            
                                                    @if($errors->has('employee_id'))
                                                    <p style="font-style: bold; color: red;">{{
                                                        $errors->first('employee_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="photo">Photo <code style="color:red;">required</code></label>
                                                <div class="mx-auto col-md-9">
                                                    <div class="custom-file">
                                                        <input type="file" accept="image/png, image/svg, image/jpeg"
                                                            class="custom-file-input" id="photo" name="photo" required>
                                                        <label class="custom-file-label" for="photo"
                                                            aria-describedby="photo">Choose File</label>
                                                    </div>

                                                    <p class="text-muted"><small class="text-danger">Hanya dapat
                                                            mengunggah 1 file</small><small> dan yang dapat digunakan
                                                            JPEG, JPG, SVG, PNG & Maksimal ukuran file hanya 10
                                                            MegaBytes</small></p>

                                                    @if($errors->has('photo'))
                                                    <p style="font-style: bold; color: red;">{{ $errors->first('photo')
                                                        }}</p>
                                                    @endif

                                                </div>
                                            </div>

                                        </div>

                                        <div class="text-right form-actions">
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
        @endcan

        {{-- table card --}}
        @can('management_table')
        <div class="content-body">
            <section id="table-home">
                <!-- Zero configuration table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengurus List</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="mb-0 list-inline">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table
                                            class="table table-striped table-bordered text-inputs-searching default-table">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Divisi</th>
                                                    <th>Nama</th>
                                                    <th>Photo</th>
                                                    <th style="text-align:center; width:150px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($management as $key => $management_item)
                                                <tr data-entry-id="{{ $management_item->id }}">
                                                    <td>{{ isset($management_item->created_at) ? date("d/m/Y
                                                        H:i:s",strtotime($management_item->created_at)) : '' }}</td>
                                                    <td>{{ $management_item->category->name ?? '' }}</td>
                                                    <td>{{ $management_item->employee->name ?? '' }}</td>
                                                    <td>
                                                        @if($management_item->photo)
                                                        <a data-fancybox="gallery"
                                                            href="{{ asset('storage/' . $management_item->photo) }}"
                                                            class="blue accent-4">Show</a>
                                                        @else
                                                        No Photo
                                                        @endif
                                                    </td>
                                                    <td class="text-center">

                                                        <div class="mb-1 mr-1 btn-group">
                                                            <button type="button"
                                                                class="btn btn-info btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">

                                                                @can('management_show')
                                                                <a href="#mymodal"
                                                                    data-remote="{{ route('backsite.management.show', $management_item->id) }}"
                                                                    data-toggle="modal" data-target="#mymodal"
                                                                    data-title="Pengurus Detail" class="dropdown-item">
                                                                    Show
                                                                </a>
                                                                @endcan

                                                                @can('management_edit')
                                                                <a class="dropdown-item"
                                                                    href="{{ route('backsite.management.edit', $management_item->id) }}">
                                                                    Edit
                                                                </a>
                                                                @endcan

                                                                @can('management_delete')
                                                                <form
                                                                    action="{{ route('backsite.management.destroy', $management_item->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <input type="submit" class="dropdown-item"
                                                                        value="Delete">
                                                                </form>
                                                                @endcan

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                {{-- not found --}}
                                                @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Divisi</th>
                                                    <th>Nama</th>
                                                    <th>Photo</th>
                                                    <th style="text-align:center; width:150px;">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endcan

    </div>
</div>
<!-- END: Content-->

@endsection

@push('after-style')
<link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}">

<style>
    .label {
        cursor: pointer;
    }

    .img-container img {
        max-width: 100%;
    }
</style>
@endpush

@push('after-script')

<script src="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js') }}" type="text/javascript">
</script>

<script>
    jQuery(document).ready(function($){
            $('#mymodal').on('show.bs.modal', function(e){
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });

            $('.select-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })

            $('.deselect-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        });

        $('.default-table').DataTable( {
            "order": [],
            "paging": true,
            "lengthMenu": [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"] ],
            "pageLength": 10
        });

        $(function() {
            $(":input").inputmask();
        });

        // fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
            infinite: false
        });
</script>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button class="btn close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner spin"></i>
            </div>
        </div>
    </div>
</div>
@endpush