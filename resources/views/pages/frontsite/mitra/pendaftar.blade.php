@extends('layouts.mitra')

@section('title', 'Pendaftar')

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
                        Pendaftar PKL </p>
                    <hr class="bg-black">
                </div>
            </div>

            @forelse ($pendaftar as $data)
                <div
                    class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                    <div class="flex items-center gap-5 flex-col lg:flex-row justify-start w-4/6">
                        @if ($data->siswa->foto == null)
                            <div class="hidden lg:flex justify-center w-32">
                                <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt="" class="w-14">
                            </div>
                        @else
                            <div class="hidden lg:flex justify-center w-32">
                                <img src="{{ asset('storage/' . $data->siswa->foto) }}" alt="" class="w-14">
                            </div>
                        @endif
                        <div class="text-left">
                            <h4 class="font-bold flex items-center">{{ $data->siswa->nama . ' - ' . $data->siswa->jurusan->jurusan }}
                                <a href="{{ route('mitra.pendaftar.show', $data->siswa_id) }}" class="scale-75 ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </h4>
                            <p class="text-sm font-bold text-blue-700   ">{{ $data->lowongan->nama }}</p>
                        </div>
                    </div>

                    @if ($data->status == '0')
                        <div class="w-3/6 flex gap-5 justify-end flex-col md:flex-row">
                            <a href=""
                                class="text-white px-3 py-3 block w-full md:w-32 text-center text-sm font-medium bg-red-700 hover:bg-red-800 rounded"
                                id="tolak">
                                Tolak
                                <form action="{{ route('mitra.pendaftar.update', $data->id) }}" method="POST"
                                    id="form-tolak">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="2">
                                    <input type="hidden" name="siswa_id" value="{{ $data->siswa->id }}">
                                </form>
                            </a>
                            <a href=""
                                class="text-white px-3 py-3 block w-full md:w-32 text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded"
                                id="terima">
                                Terima
                                <form action="{{ route('mitra.pendaftar.update', $data->id) }}" method="POST"
                                    id="form-terima">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="1">
                                    <input type="hidden" name="siswa_id" value="{{ $data->siswa->id }}">
                                </form>
                            </a>
                        </div>
                    @else
                        <div class="w-2/6 lg:w-1/6 flex justify-center">
                            @switch($data->status)
                                @case('1')
                                    <p class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-blue-500">
                                        Diterima</p>
                                @break

                                @case('2')
                                    <p class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-red-500">
                                        Ditolak</p>
                                @break

                                @case('3')
                                    <p class="py-3 block w-full md:w-fit text-sm text-center font-medium rounded text-green-500">
                                        Aktif</p>
                                @break

                                @default
                            @endswitch
                        </div>
                    @endif
                </div>

                @empty
                    <div class="flex justify-center items-center py-20">
                        <p>Belum ada pendaftar</p>
                    </div>
                @endforelse
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
                    title: 'Tolak Pendaftaran?',
                    text: "apakah anda yakin!",
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

            $('#terima').on('click', function() {
                event.preventDefault();
                Swal.fire({
                    title: 'Terima Pendaftaran?',
                    text: "siswa akan menerima pemberitahuan pendaftaran diterima!",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Terima',
                    icon: 'warning',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-terima').submit()
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                });
            });
        </script>
    @endpush
