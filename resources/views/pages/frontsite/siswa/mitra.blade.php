@extends('layouts.siswa')

@section('title', 'Mitra')

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
                        Pendaftaran</p>
                    <hr class="bg-black">
                </div>
            </div>

            <!--Tabs navigation-->
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-home02"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-home02" data-te-nav-active role="tab"
                        aria-controls="tabs-home02" aria-selected="true">Lowongan</a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-profile02"
                        class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02"
                        aria-selected="false">Status</a>
                </li>
            </ul>

            <!--Tabs content-->
            <div class="mb-6">
                {{-- daftar mitra --}}
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home02" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>

                    <div class="mb-3">
                        <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                            <input type="search" id="search" name="search"
                                class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-3 text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                placeholder="Cari Lowongan" aria-label="Search" aria-describedby="button-addon1" />

                            <!--Search button-->
                        </div>
                    </div>

                    <div id="lowongan">
                        @forelse ($lowongan as $data)
                            <div
                                class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                                <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-5/6 md:px-10">
                                    @if ($data->mitra->foto == null)
                                        <div class="hidden lg:flex justify-center w-32">
                                            <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt=""
                                                class="w-14">
                                        </div>
                                    @else
                                        <div class="hidden lg:flex justify-center w-32">
                                            <img src="{{ asset('storage/' . $data->mitra->foto) }}" alt=""
                                                class="w-14">
                                        </div>
                                    @endif
                                    <div class="text-left">
                                        <h4 class="font-bold">{{ $data->nama }}</h4>
                                        <p class="text-xs font-bold text-blue-700 mb-3">{{ $data->mitra->nama }}</p>
                                        <p class="flex gap-3 items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                                </svg>
                                            </span>
                                            {{ $data->mitra->alamat }}
                                        </p>
                                    </div>
                                </div>

                                @if ($peserta == null && $pendaftaran_access != null)
                                    <div class="w-2/6 lg:w-1/6 flex justify-center">
                                        <form action="{{ route('siswa.pendaftaran.store') }}" method="POST"
                                            id="form-daftar">
                                            @csrf
                                            <input type="hidden" name="lowongan_id" value="{{ $data->id }}">
                                            <input type="hidden" name="mitra_id" value="{{ $data->mitra->id }}">
                                            <button type="submit" id="daftar"
                                                class="text-white px-10 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded">Daftar</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="w-2/6 lg:w-1/6 flex justify-center">
                                        <div
                                            class="text-white px-10 py-3 block md:w-fit text-center text-sm font-medium bg-gray-400 cursor-not-allowed rounded">
                                            Daftar
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div class="flex justify-center items-center">
                                <p>Belum ada data mitra</p>
                            </div>
                        @endforelse
                    </div>

                </div>
                <div id="empty-lowongan"></div>

                {{-- lowongan terdaftar --}}
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                    @forelse ($lowongan_terdaftar as $data)
                        <div
                            class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                            <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-5/6 md:px-10">
                                @if ($data->mitra->foto == null)
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt=""
                                            class="w-14">
                                    </div>
                                @else
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('storage/' . $data->mitra->foto) }}" alt=""
                                            class="w-14">
                                    </div>
                                @endif
                                <div class="text-left">
                                    <h4 class="font-bold">{{ $data->lowongan->nama }}</h4>
                                    <p class="text-xs font-bold text-blue-700 mb-3">{{ $data->mitra->nama }}
                                    </p>
                                    <p class="flex gap-3 items-start text-left">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>
                                        {{ $data->mitra->alamat }}
                                    </p>
                                </div>
                            </div>

                            <div class="w-2/6 lg:w-1/6 flex justify-center">
                                @switch($data->status)
                                    @case('0')
                                        <p
                                            class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-green-500">
                                            Terdaftar</p>
                                    @break

                                    @case('1')
                                        <div class="w-full lg:w-1/6 flex sm:justify-center md:justify-end">
                                            <form action="{{ route('siswa.pendaftaran.update', $data->id) }}" method="POST" id="form-terima">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" id="terima"
                                                    class="text-white px-10 py-3 block w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded">Terima</button>
                                            </form>
                                        </div>
                                    @break

                                    @case('2')
                                        <p class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-red-500">
                                            Ditolak</p>
                                    @break

                                    @case('3')
                                        <p
                                            class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-blue-500">
                                            Aktif</p>
                                    @break

                                    @default
                                @endswitch
                            </div>
                        </div>
                        @empty
                            <div class="flex justify-center items-center">
                                <p>Belum ada data pendaftaran</p>
                            </div>
                        @endforelse
                    </div>
                </div>


            </div>
        </main>
        </div>
        </section>
    @endsection


    @push('after-script')
        <script>
            $(document).ready(function() {


                function fetch_list_lowongan(query = '') {
                    $.ajax({
                        url: "{{ route('siswa.pendaftaran.cari_lowongan') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        dataType: 'json',
                        success: function(data) {

                            if (data.total_row > 0) {
                                $('#empty-lowongan').html("")
                                $('#lowongan').html(data.lowongan)
                            } else {
                                $('#lowongan').html("")
                                $('#empty-lowongan').html(data.lowongan)
                            }
                        }
                    })
                }

                $('#search').on('keyup', function() {
                    var query = $(this).val();
                    fetch_list_lowongan(query);
                })


                $('#daftar').on('click', function() {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Lanjutkan Pendaftaran?',
                        text: "Dengan melanjutkan pendaftaran, anda setuju untuk melaksanakan rangkaian seleksi!",
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Lanjutkan',
                        cancelButtonText: 'Batalkan',
                        icon: 'warning',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#form-daftar').submit()
                        } else if (result.isDenied) {
                            Swal.fire('Changes are not saved', '', 'info')
                        }
                    });
                });

                $('#terima').on('click', function() {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Selamat Pendaftaran Anda Diterima',
                        text: "Dengan menekan tombol terima, anda setuju untuk melaksanakan kegiatan pkl diperusahaan ini!",
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Terima',
                        cancelButtonText: 'Batalkan',
                        icon: 'success',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#form-terima').submit()
                        } else if (result.isDenied) {
                            Swal.fire('Changes are not saved', '', 'info')
                        }
                    });
                });


            });
        </script>
    @endpush
