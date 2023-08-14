@extends('layouts.auth')

@section('title', 'Sign-in')

@section('content')

    <section class="lg:mx-10 px-5 lg:px-10 py-10">
        <div class="flex items-center justify-between gap-10">

            {{-- hero image --}}
            <div class="w-full h-full hidden lg:block">
                <img src="{{ asset('assets/frontsite/login.png') }}" class="h-auto w-full scale-90" alt="">
            </div>

            {{-- login card --}}
            <div class="w-full">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/frontsite/logo-smk-dark.png') }}" class="mx-auto scale-75" alt="">
                </a>
                <div class="mt-8 drop-shadow-lg rounded px-10 py-10 bg-white">

                    {{-- alert --}}
                    @if (session('status'))
                        <div class="p-7 text-base" style="background-color: rgb(254, 226, 226); color:rgb(185, 28, 28)"
                            role="alert">
                            <ul>
                                <li style="color:rgb(185, 28, 28)">{{ session('status') }}</li>
                            </ul>
                        </div>
                    @endif

                    {{-- login form --}}
                    <h2 class="text-center text-3xl font-semibold  mb-10">Lupa Kata Sandi</h2>
                    <form action="{{ route('password.email') }}" method="POST" x-data="{ username: '' }">
                        @csrf

                        <div class="block mb-5">
                            <label for="email" class="block mb-3 font-medium">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="block border w-full rounded-md border-gray-500 h-11 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-1 focus:border-blue-500 px-5"
                                x-model="username" required autofocus>
                            @if ($errors->has('email'))
                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="block mt-5 mb-3">
                            <button type="submit" class="h-11 w-full rounded-md bg-blue-700 text-white block text-sm"
                                id="fill" x-show="username.length">Lupa Password</button>

                            <div class=" w-full rounded-md bg-gray-500 cursor-not-allowed text-white text-center py-2.5 text-sm"
                                x-show="!username.length" id="disabled">Lupa Password</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
