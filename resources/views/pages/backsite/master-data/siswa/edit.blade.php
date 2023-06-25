@extends('layouts.app')

@section('title', 'Siswa')

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
                    <a href="{{ route('backsite.siswa.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>



            <div class="px-5 py-4 mb-10">
                <form action="{{ route('backsite.siswa.update', $data[0]->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="block">
                            <span class="font-medium">Nama Lengkap<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nama" id="nama" required value="{{ $data[0]->nama }}"></input>
                        @if ($errors->has('nama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="block">
                            <span class="font-medium">NISN<code class="text-red-500">*</code></span>
                        </label>
                        <input type="number"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="nisn" id="nisn" required value="{{ $data[0]->nisn }}"></input>
                        @if ($errors->has('nisn'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nisn') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="block">
                            <span class="font-medium">Jurusan<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Jurusan" name="jurusan_id">
                            @foreach ($jurusan as $items)
                                <option value="{{ $items->id }}"
                                    {{ $data[0]->id_jurusan == $items->id ? 'selected' : '' }}>{{ $items->jurusan }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('jurusan'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('jurusan') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="block">
                            <span class="font-medium">Kelas<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Kelas" name="kelas_id">
                            @foreach ($kelas as $items)
                                <option value="{{ $items->id }}"
                                    {{ $data[0]->id_kelas == $items->id ? 'selected' : '' }}>{{ $items->kelas }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('kelas'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kelas') }}</p>
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="block">
                            <span class="font-medium">Jenis Kelamin<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Jenis Kelamin" name="jenis_kelamin">
                            <option value="1" {{ $data[0]->jenis_kelamin == '1' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="2" {{ $data[0]->jenis_kelamin == '2' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                        @if ($errors->has('nama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="tempat_lahir" class="block">
                            <span class="font-medium">Tempat Lahir<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="tempat_lahir" id="tempat_lahir" required value="{{ $data[0]->tempat_lahir }}"></input>
                        @if ($errors->has('tempat_lahir'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('tempat_lahir') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="relative block mb-5">
                            <span class="font-medium">Tanggal Lahir<code class="text-red-500">*</code></span>
                            <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                                class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                                required value="{{ $data[0]->tanggal_lahir }}" />
                            <span class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                        @if ($errors->has('tanggal_lahir'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('tanggal_lahir') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="block">
                            <span class="font-medium">Agama
                                <code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="agama" id="agama" required value="{{ $data[0]->agama }}"></input>
                        @if ($errors->has('agama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('agama') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="block">
                            <span class="font-medium">Kontak
                                <code class="text-red-500">*</code></span>
                        </label>
                        <input type="number"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="kontak" id="kontak" required value="{{ $data[0]->kontak }}"></input>
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
                            id="alamat" required>{{ $data[0]->alamat }}</textarea>
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

@push('after-script')
    <script type="text/javascript">
        $(document).ready(function() {

            const tanggal_mulai = flatpickr('#tanggal_lahir', {
                altInput: true,
                altFormat: 'd F Y',
                dateFormat: 'Y-m-d',
                disableMobile: 'true',
                locale: {
                    "firstDayOfWeek": 1 // start week on Monday
                }
            });

        });
    </script>
@endpush
