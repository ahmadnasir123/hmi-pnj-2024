@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="grid min-h-screen lg:grid-cols-2">
    <!-- Form -->
    <div class="px-4 lg:px-[91px] pt-10 flex flex-col justify-center">

        <!-- Logo Brand -->
        <a href="{{ route('index') }}" class="inline-flex items-center flex-shrink-0">
            <img class="h-12 lg:h-16" src="{{ asset('/assets/frontsite/images/hmi.png') }}" alt="HMI Logo" />
        </a>

        <div class="flex flex-col justify-center lg:min-h-screen py-14">
            <h2 class="text-[#1E2B4F] text-4xl font-semibold leading-normal">
                Himpunan Mahasiswa Islam <br />
                Komisariat Politeknik Negeri Jakarta
            </h2>

            <div class="mt-12">
                @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Form input -->
                <form method="POST" action="{{ route('login') }}" class="grid gap-6">
                    @csrf

                    <label class="block">
                        <input type="email" id="email" name="email"
                            class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            placeholder="Email Address" value="{{ old('email') }}" required autofocus />
                        @if ($errors->has('email'))
                        <p class="mb-3 text-sm text-red-500">{{ $errors->first('email') }}</p>
                        @endif
                    </label>

                    <label class="block">
                        <input type="password" id="password" name="password"
                            class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            placeholder="Password" />
                        @if ($errors->has('password'))
                        <p class="mb-3 text-sm text-red">{{ $errors->first('password') }}</p>
                        @endif
                    </label>

                    <div class="grid gap-6 mt-10">
                        <button class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full">
                            Sign In
                        </button>
                        <a href="{{ route('register') }}"
                            class="text-center text-lg text-[#1E2B4F] font-medium bg-[#F2F6FE] px-10 py-4 rounded-full">
                            New Account
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Form -->

   <!-- Image -->
    <div class="flex items-center justify-center">
        <img class="object-cover h-auto max-h-full shadow-lg" src="{{ asset('/assets/frontsite/images/bg-hmi.png') }}"
            alt="Background Image">
    </div>
    <!-- End Image -->
</div>

@endsection