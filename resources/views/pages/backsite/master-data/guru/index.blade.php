@extends('layouts.app')

@section('title', 'Guru')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen py-5 overflow-x-hidden">

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
                        Guru</p>
                </div>
            </div>

            <div id="accordionExample" class="shadow-md mb-3 rounded-lg">
                <div class="rounded-lg border border-neutral-200 bg-white px">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 font-medium text-primary bg-blue-100 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none   [&:not([data-te-collapse-collapsed])]:bg-blue-200 [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                            type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Tambah Guru
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
                            <form action="{{ route('backsite.guru.store') }}" method="POST">
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
                                    <label for="nip" class="block">
                                        <span class="font-medium">NIP<code class="text-red-500">*</code></span>
                                    </label>
                                    <input type="number"
                                        class="w-full h-11 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                        name="nip" id="nip" required value="{{ old('nip') }}"></input>
                                    @if ($errors->has('nip'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('nip') }}</p>
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
                                    <label class="block">
                                        <span class="font-medium">Jenis Kelamin<code class="text-red-500">*</code></span>
                                    </label>
                                    <select data-te-select-init data-te-select-placeholder="Pilih Jenis Kelamin"
                                        name="jenis_kelamin" required>
                                        <option disabled selected></option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                    @if ($errors->has('jenis_kelamin'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('jenis_kelamin') }}</p>
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

            <div class="bg-white py-4 md:py-7 px-4 shadow-md rounded-lg">
                <div class="overflow-x-auto">

                    <table id="guru-table" class="stripe">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIP</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @forelse ($data as $guru)
                                <tr data-entry-id="{{ $guru->id }}" class="hover:bg-neutral-200 outline-2">
                                    <td class="whitespace-nowrap">{{ $guru->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $guru->nip }}</td>
                                    <td class="whitespace-nowrap">{{ $guru->user->email }}</td>
                                    <td class="whitespace-nowrap">{{ $guru->jurusan->jurusan }}</td>
                                    @if ($guru->jenis_kelamin == '1')
                                        <td class="whitespace-nowrap">Laki-laki</td>
                                    @else
                                        <td class="whitespace-nowrap">Perempuan</td>
                                    @endif
                                    <td class="whitespace-nowrap">{{ $guru->kontak }}</td>
                                    <td class="whitespace-nowrap">{{ $guru->alamat }}</td>
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
                                                        href="{{ route('backsite.guru.edit', $guru->id) }}"
                                                        data-te-dropdown-item-ref>Edit</a>
                                                </li>
                                                <li>
                                                   <form action="{{ route('backsite.guru.destroy', $guru->id) }}"
                                                        id="form-delete" method="post" data-te-dropdown-item-ref>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="delete-confirm block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm text-left font-normal hover:bg-neutral-200"
                                                            >Hapus</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
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

            var table = $('#guru-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

             $('.delete-confirm').on('click', function() {
                event.preventDefault();
                let form = $(this).closest('form');
                Swal.fire({
                    title: 'Apakah Yakin?',
                    text: "Hapus Guru!",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus',
                    icon: 'warning'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit()
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                });
            });

        });
    </script>
@endpush
