@extends('layouts.app')

@section('title', 'Siswa')

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
            <div class="px-4 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Siswa</p>
                </div>
            </div>

            <div id="accordionExample" class="shadow-lg mb-3 rounded-lg">
                <div class="rounded-lg border border-neutral-200 bg-white px">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 font-medium text-primary bg-blue-100 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none   [&:not([data-te-collapse-collapsed])]:bg-blue-200 [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                            type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Tambah Siswa
                            <span
                                class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="!visible hidden" data-te-collapse-item aria-labelledby="headingOne"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4">
                            <form action="{{ route('backsite.siswa.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="block">
                                        <span class="font-medium">Nama Lengkap<code class="text-red-500">*</code></span>
                                    </label>
                                    <input type="text"
                                        class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                                        name="nama" id="nama" required value="{{ old('nama') }}"></input>
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
                                        name="nisn" id="nisn" required value="{{ old('nisn') }}"></input>
                                    @if ($errors->has('nisn'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('nisn') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="block">
                                        <span class="font-medium">Email<code class="text-red-500">*</code></span>
                                    </label>
                                    <input type="email"
                                        class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                                        name="email" id="email" required value="{{ old('email') }}"
                                        autofocus></input>
                                    @if ($errors->has('email'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="block">
                                        <span class="font-medium">Jurusan<code class="text-red-500">*</code></span>
                                    </label>
                                    <select data-te-select-init data-te-select-placeholder="Pilih Jurusan" name="jurusan_id"
                                        required>
                                        <option disabled selected></option>
                                        @foreach ($jurusan as $items)
                                            <option value="{{ $items->id }}">{{ $items->jurusan }}</option>
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
                                    <select data-te-select-init data-te-select-placeholder="Pilih Kelas" name="kelas_id"
                                        required>
                                        <option disabled selected></option>
                                        @foreach ($kelas as $items)
                                            <option value="{{ $items->id }}">{{ $items->kelas }}</option>
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
                                    <select data-te-select-init data-te-select-placeholder="Pilih Jenis Kelamin"
                                        name="jenis_kelamin" required>
                                        <option disabled selected></option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
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
                                        name="tempat_lahir" id="tempat_lahir" required
                                        value="{{ old('tempat_lahir') }}"></input>
                                    @if ($errors->has('tempat_lahir'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('tempat_lahir') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="relative block mb-5">
                                        <span class="font-medium">Tanggal Lahir<code class="text-red-500">*</code></span>
                                        <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                                            class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                                            required value="{{ old('') }}" />
                                        <span
                                            class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                                    stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                                        name="agama" id="agama" required value="{{ old('agama') }}"></input>
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
                                        name="kontak" id="kontak" required value="{{ old('kontak') }}"></input>
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
                                        id="alamat" required value="{{ old('alamat') }}"></textarea>
                                    @if ($errors->has('alamat'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('alamat') }}</p>
                                    @endif
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit"
                                        class="px-8 py-2 bg-blue-700 text-white rounded-md">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 shadow-lg rounded-lg">
                <div class="overflow-x-auto">

                    <table id="siswa-table">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NISN</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @forelse ($data as $siswa)
                                <tr data-entry-id="{{ $siswa->id }}" class="hover:bg-neutral-200 outline-2">
                                    <td class="whitespace-nowrap">{{ $siswa->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->nisn }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->email }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->jurusan }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->kelas }}</td>
                                    @if ($siswa->jenis_kelamin == '1')
                                        <td class="whitespace-nowrap">Laki-laki</td>
                                    @else
                                        <td class="whitespace-nowrap">Perempuan</td>
                                    @endif
                                    <td class="whitespace-nowrap">{{ $siswa->tempat_lahir }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->tanggal_lahir }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->agama }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->kontak }}</td>
                                    <td class="whitespace-nowrap">{{ $siswa->alamat }}</td>
                                    <td class="whitespace-nowrap">
                                        <div class="relative" data-te-dropdown-ref>
                                            <button
                                                class="flex items-center whitespace-nowrap rounded bg-blue-700 px-5 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref
                                                aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                                Action
                                                <span class="ml-2 w-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="h-5 w-5">
                                                        <path fill-rule="evenodd"
                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                                                aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                                <li>
                                                    <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                        href="{{ route('backsite.siswa.edit', $siswa->id) }}"
                                                        data-te-dropdown-item-ref>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                        href="{{ route('backsite.siswa.destroy', $siswa->id) }}"
                                                        data-te-dropdown-item-ref
                                                        onclick="event.preventDefault(); $('#form-delete').attr('action', '{{ route('backsite.siswa.destroy', $siswa->id) }}'); document.getElementById('form-delete').submit()">Hapus
                                                        <form action="" id="form-delete" method="post"
                                                            style="display: none">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
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
            var table = $('#siswa-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

            $('#siswa-table tfoot th').each(function(i) {
                var title = $('#siswa-table thead th').eq($(this).index()).text();
                $(this).html(
                    '<input type="text" class="rounded-lg border border-gray-400 placeholder:font-normal focus:font-normal mt-3" placeholder="Search ' +
                    title +
                    '" data-index="' + i + '" style="width:100%;"/>');
            });

            // Filter event handler
            $(table.table().container()).on('keyup', 'tfoot input', function() {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });

        });
    </script>
@endpush
