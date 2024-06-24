@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<div class="min-h-screen">
    <div class="grid lg:grid-cols-2">
        <!-- Form -->
        <div class="px-4 lg:px-[91px] pt-10">

            <!-- Logo Brand -->
            <a href="{{ route('index') }}" class="inline-flex items-center flex-shrink-0">

                <img class="h-12 lg:h-16" src="{{ asset('/assets/frontsite/images/hmi.png') }}" alt="HMI Logo" />

            </a>

            <div class="flex flex-col justify-center h-full py-14 lg:min-h-screen">
                <h2 class="text-[#1E2B4F] text-4xl font-semibold leading-normal">
                    Improve Your <br />
                    Health With Expert
                </h2>
                <div class="mt-12">

                    <!-- Form input -->
                    <form method="POST" action="{{ route('register') }}" class="grid gap-6">

                        {{-- token here --}}
                        @csrf

                        <label class="block">
                            <input for="name" type="text" id="name" name="name"
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                placeholder="Complete Name" value="{{ old('name') }}" required autofocus />

                            @if ($errors->has('name'))
                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('name') }}</p>
                            @endif
                        </label>

                        <label class="block">
                            <input for="email" type="email" id="email" name="email"
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                placeholder="Email Address" value="{{ old('email') }}" required autofocus />

                            @if ($errors->has('email'))
                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('email') }}</p>
                            @endif
                        </label>

                        <label class="block">
                            <input for="password" type="password" id="password" name="password"
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                placeholder="Password" value="{{ old('password') }}" required autofocus />
                        </label>

                        <label class="block">
                            <input for="password_confirmation" type="password" id="password_confirmation"
                                name="password_confirmation"
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                placeholder="Confirmation Password" required autofocus />

                            @if ($errors->has('password'))
                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('password') }}</p>
                            @endif
                        </label>



                        <div class="grid gap-6 mt-10">
                            <button type="submit"
                                class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full">
                                Continue
                            </button>

                            <a href="{{ route('login') }}"
                                class="text-center text-lg text-[#1E2B4F] font-medium bg-[#F2F6FE] px-10 py-4 rounded-full">
                                Sign In
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Form -->

        <!-- Image -->
        <div class="flex items-center justify-center">
            <img class="object-cover h-auto max-h-full shadow-lg"
                src="{{ asset('/assets/frontsite/images/bg-hmi.png') }}" alt="Background Image">
        </div>
        <!-- End Image -->
    </div>
</div>

@endsection