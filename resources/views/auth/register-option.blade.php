@extends('layouts.auth')

@section('title', 'Sign-Up')

@section('content')

    <section class="lg:mx-10 px-5 lg:px-10 py-14">
        <div class="flex items-center justify-between">

            {{-- login card --}}
            <div class="w-full">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/frontsite/logo-smk-dark.png') }}" class="mx-auto scale-90" alt="">
                </a>
                <div class="mt-14 bg-white py-10 h-96">

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
                    <form action="{{ route('auth.register.store') }}" method="POST" x-data="{ registrasi: '' }">
                        @csrf

                        <div class="block mb-5 w-full">
                            <div class="w-2/3 mx-auto">
                                <label for='registrasi' class="block mb-3">
                                    <h1 class="font-bold text-3xl mb-5">Pilih Peran Anda</h1>
                                    <p class="text-sm">Pilih peran yang paling sesuai. Pilihan peran akan berpengaruh ke
                                        opsi yang tersedia</p>
                                </label>
                                <select data-te-select-init id='registrasi' name='registrasi' x-model="registrasi">
                                    <option hidden selected></option>
                                    <option value="1">Siswa</option>
                                    <option value="2">Guru</option>
                                    <option value="3">Mitra</option>
                                </select>
                                @if ($errors->has('registrasi'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('registrasi') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="mt-10 mb-3 flex justify-center">
                            <button type="submit" class="py-2 w-1/6 rounded-md bg-blue-700 text-white block" id="fill"
                                x-show="registrasi.length">Lanjutkan</button>

                            <div class=" w-1/6 rounded-md bg-gray-500 cursor-not-allowed text-white text-center py-2"
                                x-show="!registrasi.length " id="disabled">Lanjutkan</div>
                        </div>
                    </form>

                    <div class="flex justify-center flex-col mt-14 w-full">
                        <div class="w-2/3 mx-auto">
                            <hr>
                            <p class="text-sm text-gray-500 text-center mt-5">Sudah Memiliki Akun? <a
                                    href="{{ route('login') }}"
                                    class="text-primary font-bold text-sm">Masuk Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
