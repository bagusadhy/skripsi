@extends('layouts.app')

@section('title', 'Mitra')

@section('content')
    <main class="basis-10/12 bg-white h-fit">

        @if ($errors->any())
            <div class="mb-3 hidden w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-warning-800 data-[te-alert-show]:inline-flex"
                role="alert" data-te-alert-init data-te-alert-show>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        <div class="sm:px-4">
            <div class="px-4 py-4 md:py-7">
                <div tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    <a href="{{ route('backsite.mitra.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>



            <div class="px-5 py-4 mb-10">
                <form action="{{ route('backsite.mitra.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="block">
                            <span class="font-medium">Nama Perusahaan<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nama" id="nama" required value="{{ $data->nama }}"></input>
                        @if ($errors->has('nama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nama_pimpinan" class="block">
                            <span class="font-medium">Nama Pimpinan<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nama_pimpinan" id="nama_pimpinan" required value="{{ $data->nama_pimpinan }}"></input>
                        @if ($errors->has('nama_pimpinan'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama_pimpinan') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nama_pembimbing" class="block">
                            <span class="font-medium">Nama Pembimbing<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nama_pembimbing" id="nama_pembimbing" required
                            value="{{ $data->nama_pembimbing }}"></input>
                        @if ($errors->has('nama_pembimbing'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama_pembimbing') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="bidang_usaha" class="block">
                            <span class="font-medium">Bidang Usaha<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Bidang Usaha" name="bidang_usaha_id"
                            required>
                            @foreach ($bidang_usaha as $items)
                                <option value="{{ $items->id }}" {{ $data->id_bidang_usaha == $items->id ? "selected" : "" }}>{{ $items->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('bidang_usaha'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('bidang_usaha') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="block">
                            <span class="font-medium">Kontak
                                <code class="text-red-500">*</code></span>
                        </label>
                        <input type="number"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="kontak" id="kontak" required value="{{ $data->kontak }}"></input>
                        @if ($errors->has('kontak'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kontak') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="block">
                            <span class="font-medium">Alamat
                                <code class="text-red-500">*</code></span>
                        </label>
                        <textarea type="text"
                            class="w-full h-20 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none" name="alamat"
                            id="alamat" required value="">{{ $data->alamat }}</textarea>
                        @if ($errors->has('alamat'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('alamat') }}</p>
                        @endif
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="px-8 py-2 bg-blue-700 text-white rounded-md">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- component -->
    </main>
    </div>
    </section>
@endsection
