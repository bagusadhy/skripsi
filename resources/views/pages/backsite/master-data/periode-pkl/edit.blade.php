@extends('layouts.app')

@section('title', 'Periode PKL')

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
                    <a href="{{ route('backsite.periode.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>


            <div class="px-5 py-4 mb-10">
                <form action="{{ route('backsite.periode.update', $periode->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="relative block mb-5">
                        <span class="font-medium">Tanggal Mulai Pendaftaran<code class="text-red-500">*</code></span>
                        <input type="text" id="pendaftaran" name="pendaftaran"
                            class="block w-full h-11 rounded-lg py-3 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            value="{{ $periode->pendaftaran }}" required />
                        <span class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                    stroke="#AFAEC3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        @if ($errors->has('pendaftaran'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('pendaftaran') }}</p>
                        @endif
                    </label>
                    <label class="relative block mb-5">
                        <span class="font-medium">Tanggal Mulai Kegiatan<code class="text-red-500">*</code></span>
                        <input type="text" id="kegiatan" name="kegiatan"
                            class="block w-full h-11 rounded-lg py-3 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            value="{{ $periode->kegiatan }}" required />
                        <span class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                    stroke="#AFAEC3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        @if ($errors->has('kegiatan'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kegiatan') }}</p>
                        @endif
                    </label>
                    <label class="relative block mb-5">
                        <span class="font-medium">Tanggal Selesai Kegiatan<code class="text-red-500">*</code></span>
                        <input type="text" id="kegiatan_selesai" name="kegiatan_selesai"
                            class="block w-full h-11 rounded-lg py-3 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            value="{{ $periode->kegiatan_selesai }}" required />
                        <span class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                    stroke="#AFAEC3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        @if ($errors->has('kegiatan_selesai'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kegiatan_selesai') }}</p>
                        @endif
                    </label>
                    <label class="relative block mb-5">
                        <span class="font-medium">Status<code class="text-red-500">*</code></span>
                        <select data-te-select-init name="status">
                            <option value="1" {{ $periode->status == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="2" {{ $periode->status == '2' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </label>
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
    <script>
        document.querySelector('select').style.height = '20px !important';
        flatpickr('#kegiatan', {
            enableTime: false,
            dateFormat: 'Y-m-d',
        });
        flatpickr('#pendaftaran', {
            enableTime: false,
            dateFormat: 'Y-m-d',
        });
        flatpickr('#kegiatan_selesai', {
            enableTime: false,
            dateFormat: 'Y-m-d',
        });
    </script>
@endpush
