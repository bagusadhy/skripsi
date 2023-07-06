@extends('layouts.siswa')

@section('title', 'Pengajuan Mitra')

@section('content')
    <main class="basis-10/12 bg-white min-h-fit px-10 py-5  overflow-x-hidden">

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

        <!-- component -->
        <div class="mb-10">
            <div class="px-2 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Pengajuan Mitra</p>
                    <hr class="bg-black">
                </div>
            </div>

            <!--Tabs navigation-->
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-home02"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-home02" data-te-nav-active role="tab"
                        aria-controls="tabs-home02" aria-selected="true">Pengajuan</a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-profile02"
                        class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02"
                        aria-selected="false">Status</a>
                </li>
            </ul>

            <!--Tabs content-->
            <div class="mb-6 px">
                {{-- pengajuan --}}
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home02" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>

                    <div class="mt-5 mb-10 px-10">
                        <h2 class="font-bold">Alur Pengajuan Mitra</h2>

                        <div class="mt-3 px-10 rounded bg-gray-100 py-5 text-sm">
                            <ul class="list-decimal marker:font-bold marker:">
                                <li class="mb-3">
                                    <p class="ml-3">Masukan data lengkap mitra dan juga alasan pengajuan.</p>
                                </li>
                                <li class="mb-3">
                                    <p class="ml-3">Cek status pengajuan pada tab status untuk melihat pengajuan mitra
                                        diterima atau ditolak.</p>
                                </li>
                                <li class="mb-3">
                                    <p class="ml-3">Jika pengajuan mitra ditolak, silahkan ajukan mitra yang lain atau
                                        dapat mendaftar pada mitra yang telah ada.</p>
                                </li>
                                <li class="mb-3">
                                    <p class="ml-3">Jika pengajuan mitra diterima, melakukan pendaftaran pada mitra di
                                        menu pendaftaran</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:px-10">
                        <form action="{{ route('siswa.pengajuan.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                            <div class="flex items-center justify-between flex-col lg:flex-row gap-5 mb-5">
                                <label for="" class="w-full">
                                    <span class="block font-medium">Nama Mitra</span>

                                    <input type="text"
                                        class="w-full h-12 border-2 border-gray-300 rounded-md px-5 focus:outline-none focus:border-2 focus:border-blue-500"
                                        name="nama" required placeholder="Masukan Nama Mitra">
                                </label>
                                <label for="" class="w-full">
                                    <span class="block font-medium">Kontak Mitra</span>

                                    <input type="number"
                                        class="w-full h-12 border-2 border-gray-300 rounded-md px-5 focus:outline-none focus:border-2 focus:border-blue-500 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                        name="kontak" required placeholder="Masukan Kontak Mitra">
                                </label>
                            </div>
                            <div class="flex items-center justify-between flex-col lg:flex-row gap-5 mb-5">
                                <label for="" class="w-full">
                                    <span class="block font-medium">Alamat Mitra</span>

                                    <input type="text"
                                        class="w-full h-12 border-2 border-gray-300 rounded-md px-5 focus:outline-none focus:border-2 focus:border-blue-500"
                                        name="alamat" required placeholder="Masukan Alamat Mitra">
                                </label>
                                <label for="" class="w-full">
                                    <span class="block font-medium">Email Mitra</span>

                                    <input type="email"
                                        class="w-full h-12 border-2 border-gray-300 rounded-md px-5 focus:outline-none focus:border-2 focus:border-blue-500"
                                        name="email" required placeholder="Masukan Email Mitra">
                                </label>
                            </div>
                            <div class="mb-5">
                                <label for="bidang_usaha" class="block">
                                    <span class="font-medium">Bidang Usaha<code class="text-red-500">*</code></span>
                                </label>
                                <select data-te-select-init data-te-select-placeholder="Pilih Bidang Usaha"
                                    name="bidang_usaha_id" required>
                                    <option hidden selected></option>
                                    @foreach ($bidang as $items)
                                        <option value="{{ $items->id }}">{{ $items->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('bidang_usaha_id'))
                                    <p style="font-style: bold; color: red;">{{ $errors->first('bidang_usaha_id') }}</p>
                                @endif
                            </div>
                            <div class="mb-5">
                                <label for="" class="w-full">
                                    <span class="block font-medium">Alasan Pengajuan</span>
                                    <textarea name="alasan" id=""
                                        class="w-full h-44 border-2 border-gray-300 rounded-md px-5 py-5 resize-none focus:outline-none focus:border-2 focus:border-blue-500"
                                        required placeholder="Deskripsi Kegiatan"></textarea>
                                </label>
                            </div>
                            <div class="flex justify-end items-center">
                                <button type="submit" class="bg-primary text-white px-10 py-2 rounded">
                                    Ajukan
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                {{-- mitra terdaftar --}}
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                    @foreach ($pengajuan as $data)
                        <div
                            class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-10 items-center shadow-md">
                            <div class="flex items-center gap-5 flex-col lg:flex-row w-5/6">
                                <div class="text-center md:text-left">
                                    <h4 class="font-bold">{{ $data->nama }}</h4>
                                    <p class="text-xs font-bold text-blue-700 mb-3">{{ $data->email }}</p>
                                    <p class="flex gap-3 items-center text-justify">
                                        {{ $data->alamat }}
                                    </p>
                                </div>
                            </div>

                            <div class="w-2/6 lg:w-1/6 flex justify-end">
                                @switch($data->status)
                                    @case('2')
                                        <p class="text-sm font-bold text-green-300">Diterima</p>
                                    @break

                                    @case('3')
                                        <p class="text-sm font-bold text-red-300">Ditolak</p>
                                    @break

                                    @default
                                        <p class="text-sm font-bold text-green-300">Diajukan</p>
                                    @break
                                @endswitch
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </main>
    </div>
    </section>
@endsection
