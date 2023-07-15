@extends('layouts.app')

@section('title', 'Monitoring')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen px-10 py-5  overflow-x-hidden">

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
        <div class="sm:px-6 mb-10">
            <div class="py-4 md:py-7">
                <div tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    <a href="{{ route('backsite.pengajuan_mitra.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>

            <h1 class="font-bold text-2xl mb-3 mt-5">Detail Pengajuan</h1>
            <hr class="bg-black">

            <div class="mt-5">
                <div class="py-2">
                    <ul class="list-none w-34">
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Nama Siswa</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->siswa->nama }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Nama Mitra</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->nama }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Bidang Usaha</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->bidang_usaha->title }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Email </span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->email }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Kontak</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->kontak }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Alamat</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p>{{ $pengajuan->alamat }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Alasan Pengajuan</span>
                                <pre class="block">: </pre>
                            </div>
                            <div class="w-4/6 md:w-5/6">
                                <p class="text-justify">{{ $pengajuan->alasan }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            @if ($pengajuan->status == '1')
                <div class="flex gap-5">
                    <a class="block whitespace-nowrap bg-blue-500 w-44 py-2 text-sm text-white text-center font-bold rounded leading-normal hover:bg-blue-700"
                        href=""
                        onclick="event.preventDefault(); document.getElementById('form-terima').submit();"
                        id="terima">Terima
                        <form action="{{ route('backsite.pengajuan_mitra.store') }}" id="form-terima"
                            method="POST" style="display: none">
                            @csrf
                            <input type="hidden" name="id_pengajuan" value="{{ $pengajuan->id }}">
                        </form>
                    </a>
                    <a class="block whitespace-nowrap bg-red-500 w-44 py-2 text-sm text-white text-center font-bold rounded leading-normal hover:bg-red-700"
                        href="" id="tolak">Tolak
                        <form action="{{ route('backsite.pengajuan_mitra.update', $pengajuan->id) }}" id="form-tolak"
                            method="POST" style="display: none">
                            @csrf
                            @method('PUT')
                        </form>
                    </a>
                </div>
            @endif
        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script>
        $('#tolak').on('click', function() {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Yakin?',
                text: "Tolak Pengajuan!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tolak',
                icon: 'warning'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-tolak').submit()
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            });
        });
    </script>
@endpush
