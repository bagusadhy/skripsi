@extends('layouts.siswa')

@section('title', 'Profil')

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
        <div class="sm:px-6 mb-10">
            <div class="px-2 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Profil</p>
                    <hr class="bg-black">
                </div>
            </div>

            <form action="{{ route('siswa.profile.update', $siswa->id) }}" method="POST" class="mt-5"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-fit mb-10">
                    <label for="input-pic" class="flex gap-10 items-center">
                        @if ($siswa->foto == null)
                            <div id="profil-circle"
                                class="w-[125px] h-[125px] rounded-full border-2 border-dashed border-gray-900 bg-[#C1DBFC] flex flex-col justify-center items-center cursor-pointer">
                                <span><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.99994 7.75839C10.74 7.26392 11.61 7 12.5 7C13.0714 7 13.5346 7.46322 13.5346 8.03464C13.5346 8.60606 13.0714 9.06928 12.5 9.06928C12.0193 9.06928 11.5493 9.21184 11.1496 9.47893C10.7498 9.74602 10.4383 10.1256 10.2543 10.5698C10.0703 11.014 10.0222 11.5027 10.116 11.9742C10.2098 12.4457 10.4413 12.8788 10.7812 13.2188C11.1212 13.5587 11.5543 13.7902 12.0258 13.884C12.4973 13.9778 12.986 13.9297 13.4302 13.7457C13.8744 13.5617 14.254 13.2502 14.5211 12.8504C14.7882 12.4507 14.9307 11.9807 14.9307 11.5C14.9307 10.9286 15.3939 10.4654 15.9654 10.4654C16.5368 10.4654 17 10.9286 17 11.5C17 12.39 16.7361 13.26 16.2416 14.0001C15.7471 14.7401 15.0443 15.3169 14.2221 15.6575C13.3998 15.998 12.495 16.0872 11.6221 15.9135C10.7492 15.7399 9.94736 15.3113 9.31802 14.682C8.68868 14.0526 8.2601 13.2508 8.08647 12.3779C7.91283 11.505 8.00195 10.6002 8.34254 9.77792C8.68314 8.95566 9.25991 8.25285 9.99994 7.75839Z"
                                            fill="#8D98AA" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M34.9802 13C35.5434 13 36 13.4661 36 14.041V22.7574C36 27.2164 35.1375 30.6085 32.9439 32.8604C30.7489 35.1136 27.4407 36 23.094 36H12.906C8.56063 36 5.25258 35.114 3.05723 32.861C0.863226 30.6094 0 27.2173 0 22.7574V19.2528C0 18.6779 0.456559 18.2118 1.01975 18.2118C1.58295 18.2118 2.03951 18.6779 2.03951 19.2528V22.7574C2.03951 27.014 2.87587 29.7227 4.50321 31.3928C6.12922 33.0615 8.76429 33.9181 12.906 33.9181H23.094C27.2371 33.9181 29.8721 33.0611 31.4977 31.3923C33.1248 29.7221 33.9605 27.0134 33.9605 22.7574V14.041C33.9605 13.4661 34.4171 13 34.9802 13Z"
                                            fill="#8D98AA" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.09967 3.07527C5.32422 0.868234 8.6763 0 13.0827 0H19.9716C20.5396 0 21 0.456808 21 1.02031C21 1.58381 20.5396 2.04062 19.9716 2.04062H13.0827C8.87924 2.04062 6.20419 2.88106 4.55405 4.51821C2.90392 6.15535 2.05681 8.80935 2.05681 12.9797C2.05681 13.5432 1.59638 14 1.0284 14C0.460432 14 0 13.5432 0 12.9797C0 8.60801 0.875122 5.28231 3.09967 3.07527Z"
                                            fill="#8D98AA" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 6C23 5.44772 23.4792 5 24.0704 5H33.9296C34.5208 5 35 5.44772 35 6C35 6.55228 34.5208 7 33.9296 7H24.0704C23.4792 7 23 6.55228 23 6Z"
                                            fill="#8D98AA" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M29 0C29.5523 0 30 0.479239 30 1.07041V10.9296C30 11.5208 29.5523 12 29 12C28.4477 12 28 11.5208 28 10.9296V1.07041C28 0.479239 28.4477 0 29 0Z"
                                            fill="#8D98AA" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M28.0496 19.675L20.9723 25.8014L20.9535 25.8173C20.0931 26.5267 19.0135 26.9145 17.8993 26.9145C16.7851 26.9145 15.7055 26.5267 14.8451 25.8173C14.8358 25.8096 14.8267 25.8018 14.8177 25.7939L14.2713 25.3101C13.8139 24.941 13.2519 24.7253 12.6651 24.694C12.0746 24.6624 11.4894 24.8191 10.9934 25.1414L2.59721 30.8241C2.12855 31.1413 1.49204 31.0177 1.17551 30.5481C0.858988 30.0784 0.982315 29.4405 1.45097 29.1233L9.86814 23.4264C10.7295 22.8634 11.7473 22.5897 12.7741 22.6445C13.801 22.6994 14.7839 23.0802 15.5806 23.7318C15.5909 23.7402 15.6011 23.7489 15.6111 23.7578L16.1591 24.2429C16.6508 24.6434 17.2653 24.8622 17.8993 24.8622C18.5351 24.8622 19.1512 24.6422 19.6436 24.2396L26.7209 18.1131L26.7397 18.0972C27.6002 17.3878 28.6797 17 29.7939 17C30.9081 17 31.9877 17.3878 32.8481 18.0972L32.867 18.1132L35.6454 20.5185C36.0734 20.889 36.1206 21.537 35.7509 21.9659C35.3812 22.3947 34.7345 22.4421 34.3066 22.0716L31.5382 19.6749C31.0458 19.2723 30.4297 19.0523 29.7939 19.0523C29.1582 19.0523 28.5421 19.2723 28.0496 19.675Z"
                                            fill="#8D98AA" />
                                    </svg>
                                </span>
                                <p class="w-32 text-center text-gray-600">Upload foto profil</p>
                            </div>
                        @else
                            <img src="{{ asset('storage/' . $siswa->foto) }}" id="profil-circle"
                                class="w-[125px] h-[125px] rounded-full border-2 border-dashed border-gray-900 flex flex-col justify-center items-center cursor-pointer object-contain">
                        @endif
                        <img src=""
                            class="w-[125px] h-[125px] rounded-full border-2 border-dashed border-gray-900 bg-[#C1DBFC] cursor-pointer hidden"
                            alt="" id="profil-pic">

                        <div class="w-fit">
                            <span class="">
                                <h4 class="font-bold">Ketentuan foto :</h4>
                                <p>Tidak melebihi 2 MB</p>
                            </span>
                            <input type="file" name="foto" id="input-pic"
                                class="mt-3 w-fit file:rounded file:px-10 file:py-2 file:bg-transparent file:border file:border-blue-400 file:text-blue-400 text-transparent focus:outline-none focus:border-none"
                                x-model="foto">
                        </div>
                    </label>
                </div>

                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="nama" class="block">
                            <span class="font-medium">Nama Lengkap<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nama" id="nama" required value="{{ $siswa->nama }}"></input>
                        @if ($errors->has('nama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nama') }}</p>
                        @endif
                    </div>
                    <div class="mb-3 w-full">
                        <label for="nisn" class="block">
                            <span class="font-medium">NISN<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="nisn" id="nisn" required value="{{ $siswa->nisn }}"></input>
                        @if ($errors->has('nisn'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('nip') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="jurusan" class="block">
                            <span class="font-medium">Jurusan<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Jurusan" name="jurusan_id" required>
                            <option hidden selected></option>
                            @foreach ($jurusan as $items)
                                <option value="{{ $items->id }}"
                                    {{ $siswa->jurusan_id == $items->id ? 'selected' : '' }}>{{ $items->jurusan }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('jurusan'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('jurusan') }}</p>
                        @endif
                    </div>
                    <div class="mb-3 w-full">
                        <label for="kelas" class="block">
                            <span class="font-medium">Kelas<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Kelas" name="kelas_id" required>
                            <option hidden selected></option>
                            @foreach ($kelas as $items)
                                <option value="{{ $items->id }}"
                                    {{ $siswa->kelas_id == $items->id ? 'selected' : '' }}>{{ $items->kelas }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('kelas'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kelas') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="tempat_lahir" class="block">
                            <span class="font-medium">Tempat Lahir<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="tempat_lahir" id="tempat_lahir" required value="{{ $siswa->tempat_lahir }}"></input>
                        @if ($errors->has('tempat_lahir'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('tempat_lahir') }}</p>
                        @endif
                    </div>
                    <div class="mb-3 w-full">
                        <label class="relative block">
                            <span class="font-medium">Tanggal Lahir<code class="text-red-500">*</code></span>
                            <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                                class="block w-full rounded-lg py-2.5 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-5 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                value="{{ $siswa->tanggal_lahir }}" required />
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
                            <p style="font-style: bold; color: red;">
                                {{ $errors->first('tanggal_lahir') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="agama" class="block">
                            <span class="font-medium">Agama<code class="text-red-500">*</code></span>
                        </label>
                        <input type="text"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="agama" id="agama" required value="{{ $siswa->agama }}"></input>
                        @if ($errors->has('agama'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('agama') }}</p>
                        @endif
                    </div>
                    <div class="mb-3 w-full">
                        <label for="jenis_kelamin" class="block">
                            <span class="font-medium">Jenis Kelamin<code class="text-red-500">*</code></span>
                        </label>
                        <select data-te-select-init data-te-select-placeholder="Pilih Jenis_kelamin"
                            name="jenis_kelamin" required>
                            <option hidden selected></option>
                            <option value="1" {{ $siswa->jenis_kelamin == '1' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="2" {{ $siswa->jenis_kelamin == '2' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @if ($errors->has('jenis_kelamin'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('jenis_kelamin') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="kontak" class="block">
                            <span class="font-medium">Kontak<code class="text-red-500">*</code></span>
                        </label>
                        <input type="number"
                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            name="kontak" id="kontak" required value="{{ $siswa->kontak }}"></input>
                        @if ($errors->has('kontak'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('kontak') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between flex-col lg:flex-row lg:gap-10 lg:mb-3">
                    <div class="mb-3 w-full">
                        <label for="alamat" class="block">
                            <span class="font-medium">Alamat<code class="text-red-500">*</code></span>
                        </label>
                        <textarea class="w-full h-32 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                            name="alamat" id="alamat" required>{{ $siswa->alamat }}</textarea>
                        @if ($errors->has('alamat'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('alamat') }}</p>
                        @endif
                    </div>
                </div>

                <div class="mb-20 mt-5">
                    <div class="w-full flex justify-end gap-3">
                        <button type="submit"
                            class="py-2 px-5 bg-primary hover:bg-primaryhover text-white rounded font-semibold text-sm">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script>
        var profil = document.getElementById("profil-circle");
        var pic = document.getElementById("profil-pic");
        var input = document.getElementById("input-pic");
        var reader = new FileReader();

        input.addEventListener('change', function() {
            if (input.files && input.files[0]) {

                profil.classList.add('hidden');
                reader.onload = function(e) {
                    pic.classList.remove('hidden');
                    pic.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            };
        });
    </script>
@endpush
