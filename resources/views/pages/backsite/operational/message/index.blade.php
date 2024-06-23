@extends('layouts.app')

@section('title', 'Message')

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
            <div class="mb-2 content-header-left col-md-10 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block">Message</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Message</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- table card --}}
    @can('message_table')
    <div class="content-body">
        <section id="table-home">
            <!-- Zero configuration table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Message List</h4>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($message as $key => $message_item)
                                            <tr data-entry-id="{{ $appointment_item->id }}">
                                                <td>{{ isset($message_item->created_at) ? date("d/m/Y
                                                    H:i:s",strtotime($message_item->created_at)) : '' }}</td>
                                                <td>{{ $message_item->user->name ?? '' }}</td>
                                                <td>{{ $message_item->user->email ?? '' }}</td>
                                                <td>{{ $message_item->pesan }}</td>
                                            
                                                <td class="text-center">

                                                    <div class="mb-1 mr-1 btn-group">
                                                        <button type="button"
                                                            class="btn btn-info btn-sm dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">

                                                            @can('message_delete')
                                                            <form
                                                                action="{{ route('backsite.message.destroy', $message_item->id) }}"
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                                <th>Action</th>
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

@push('after-script')
<script>
    $('.default-table').DataTable( {
            "order": [],
            "paging": true,
            "lengthMenu": [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"] ],
            "pageLength": 10
        });
</script>
@endpush