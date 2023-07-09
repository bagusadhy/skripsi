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

            @foreach ($pendaftar as $data)
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
                        <div class="text-center md:text-left">
                            <h4 class="font-bold mb-3">{{ $data->siswa->nama }}</h4>
                            <p class="flex gap-3 items-center text-justify">
                                <span class="block scale-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </span>
                                {{ $data->siswa->kontak }}
                            </p>
                        </div>
                    </div>

                    <div class="w-3/6 flex gap-5 justify-end">
                        <a href=""
                            class="text-white px-3 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded"
                            onclick="event.preventDefault(); document.getElementById('form-terima').submit()">
                            Terima
                            <form action="{{ route('mitra.pendaftar.update', $data->id) }}" method="POST" id="form-terima">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="1">
                                <input type="hidden" name="siswa_id" value="{{ $data->siswa->id }}">
                            </form>
                        </a>
                        <a href=""
                            class="text-white px-3 py-3 block w-full md:w-fit text-center text-sm font-medium bg-red-700 hover:bg-red-800 rounded"
                            id="tolak">
                            Tolak
                            <form action="{{ route('mitra.pendaftar.update', $data->id) }}" method="POST" id="form-tolak">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="2">
                                <input type="hidden" name="siswa_id" value="{{ $data->siswa->id }}">
                            </form>
                        </a>
                    </div>
                </div>
            @endforeach
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
                text: "Tolak pendaftaran!",
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
