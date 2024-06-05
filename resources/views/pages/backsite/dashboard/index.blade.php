@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!--Begin Content -->
<div class="app-content content">
    <div class="content-overlay"> </div>
    <div class="content-wrapper">


        @if(@session('message'))
        <h6 class="alert-success">{{ session('message') }}, </h6>
        @endif

        <div class="me-md-3 me-xl-5">
            <h2>Dashboard</h2>
            <p class="mb-md-0">Your Analytics Dashboard</p>
            <hr>
        </div>

        {{-- <div class="row">
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-primary">
                    <label>Total Appointment</label>
                    <h1 class="text-white">{{ $totalAppointment }}</h1>
                    <a href="{{ route('backsite.appointment.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-success">
                    <label>Today Appointment</label>
                    <h1 class="text-white">{{ $todayAppointment }}</h1>
                    <a href="{{ route('backsite.appointment.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-warning">
                    <label>This Month Appointment</label>
                    <h1 class="text-white">{{ $thisMonthAppointment }}</h1>
                    <a href="{{ route('backsite.appointment.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-danger">
                    <label>This Year Appointment</label>
                    <h1 class="text-white">{{ $thisYearAppointment }}</h1>
                    <a href="{{ route('backsite.appointment.index') }}" class="text-white">View</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-primary">
                    <label>Total Doctor</label>
                    <h1 class="text-white">{{ $totalDoctor }}</h1>
                    <a href="{{ route('backsite.doctor.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-success">
                    <label>Total Specialist</label>
                    <h1 class="text-white">{{ $totalSpecialist }}</h1>
                    <a href="{{ route('backsite.specialist.index') }}" class="text-white">View</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-warning">
                    <label>Consultation</label>
                    <h1 class="text-white">{{ $totalConsultation }}</h1>
                    <a href="{{ route('backsite.consultation.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-danger">
                    <label>Rekam Medis Pasien</label>
                    <h1 class="text-white">{{ $totalMedisPatient }}</h1>
                    <a href="{{ route('backsite.medik.index') }}" class="text-white">View</a>
                </div>
            </div>
        </div>



        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-primary">
                    <label>Total All User</label>
                    <h1 class="text-white">{{ $totalAllUser }}</h1>
                    <a href="{{ route('backsite.user.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-success">
                    <label>Total Super Admin</label>
                    <h1 class="text-white">{{ $totalSuperAdmin }}</h1>
                    <a href="{{ route('backsite.user.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-warning">
                    <label>Total Admin</label>
                    <h1 class="text-white">{{ $totalAdmin }}</h1>
                    <a href="{{ route('backsite.user.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 text-white card card-body bg-danger">
                    <label>Total Patient</label>
                    <h1 class="text-white">{{ $totalPatient }}</h1>
                    <a href="{{ route('backsite.hospital_patient.index') }}" class="text-white">View</a>
                </div>
            </div>
        </div> --}}

    </div>
</div>
<!-- End Content -->

@endsection