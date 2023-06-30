@extends('layouts.auth')

@section('title', 'Sign-Up')

@section('content')

    <section class="sm:px-5 lg:px-0">
        <div class="flex items-center justify-between gap-10">

            {{-- hero image --}}
            <div class="w-full h-full hidden lg:block ml-10">
                <img src="{{ asset('assets/frontsite/login.png') }}" class="h-auto w-full scale-75" alt="">
            </div>

            {{-- login card --}}
            <div class="w-screen h-screen -mx-10">
                <div class="drop-shadow-lg rounded px-10 py-8 bg-white h-full w-full">
                    <a href="{{ route('index') }}" class="w-1/2">
                        <img src="{{ asset('assets/frontsite/logo-smk-dark.png') }}" class="mx-auto scale-75 hidden lg:block"
                            alt="">
                    </a>

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
                    <h2 class="text-center text-4xl font-bold  mb-5 lg:mt-10">Daftar</h2>
                    <form action="{{ route('auth.register_guru.store') }}" method="POST" x-data="{ nama: '', nip: '', jurusan: false, email: '', password: '' }">
                        @csrf

                        <div class="flex justify-between gap-5 flex-col lg:flex-row">
                            <div class="block mb-2 lg:mb-5 w-full">
                                <label for="nama" class="block mb-1 font-medium">Nama Lengkap<code
                                        class="text-red-600">*</code></label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                    class="mb-2 block border w-full rounded-md border-gray-300 h-11 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-1 focus:border-blue-500 px-5"
                                    x-model="nama" required autofocus>
                                @if ($errors->has('nama'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('nama') }}</p>
                                @endif
                            </div>
                            <div class="block mb-2 lg:mb-5 w-full">
                                <label for="nip" class="block mb-1 font-medium">NIP<code
                                        class="text-red-600">*</code></label>
                                <input type="number" name="nip" id="nip" value="{{ old('nip') }}"
                                    class="mb-2 block border w-full rounded-md border-gray-300 h-11 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-1 focus:border-blue-500 px-5 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none bg"
                                    x-model="nip" required autofocus>
                                @if ($errors->has('nip'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('nip') }}</p>
                                @endif
                            </div>
                        </div>


                        <div class="flex justify-between gap-5 flex-col lg:flex-row">
                            <div class="block mb-2 lg:mb-5 w-full">
                                <label for="jurusan" class="block mb-1 font-medium">Jurusan<code
                                        class="text-red-600">*</code></label>
                                <select data-te-select-init id='jurusan' name='jurusan_id' x-model="jurusan" required>
                                    <option value="" hidden selected></option>
                                    @foreach ($jurusan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('jurusan_id'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('jurusan_id') }}</p>
                                @endif
                            </div>
                        </div>


                        <div class="flex justify-between gap-5 flex-col lg:flex-row">

                            <div class="block mb-2 lg:mb-5 w-full">
                                <label for="email" class="block mb-1 font-medium">Email <code
                                        class="text-red-600">*</code></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="mb-2 block border w-full rounded-md border-gray-300 h-11 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-1 focus:border-blue-500 px-5"
                                    x-model="email" required autofocus>
                                @if ($errors->has('email'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="block w-full" x-data="{ show: true }">
                                <label for="password" class="block mb-1 font-medium">Kata Sandi <code
                                        class="text-red-600">*</code></label>
                                <div
                                    class="relative w-full h-11 rounded-md">

                                    <input :type="show ? 'password' : 'text'" name="password" id="password"
                                        value="{{ old('password') }} }}"
                                        class="w-full h-full pl-5 pr-14 rounded-md focus:outline-none border border-gray-300 "
                                       x-model="password" required>
                                    @if ($errors->has('password'))
                                        <p class="text-red mb-3 text-sm">{{ $errors->first('password') }}</p>
                                    @endif

                                    <div class="absolute top-2.5 right-4 flex items-center text-sm leading-5">

                                        <svg class="h-6 text-gray-500" fill="none" @click="show = !show"
                                            :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 640 512">
                                            <path fill="currentColor"
                                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                            </path>
                                        </svg>

                                        <svg class="h-6 text-gray-500" fill="none" @click="show = !show"
                                            :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="block mt-5 mb-3">
                            <button type="submit" class="h-11 w-full rounded-md bg-blue-700 text-white block"
                                id="fill"
                                x-show="nama.length && nip.length && jurusan && email.length && password.length">Daftar</button>

                            <div class=" w-full rounded-md bg-gray-500 cursor-not-allowed text-white text-center py-2.5"
                                x-show="!nama.length || !nip.length || !jurusan || !email.length || !password.length"
                                id="disabled">Daftar</div>
                        </div>
                    </form>
                    <div class="lg:mt-10">
                        <p class="text-sm text-gray-500 text-center">Sudah memiliki akun? <a
                                href="{{ route('auth.register.index') }}"
                                class="text-primary font-bold text-sm">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
