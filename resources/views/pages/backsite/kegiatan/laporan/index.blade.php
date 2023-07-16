@extends('layouts.app')

@section('title', 'Laporan')

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
                        Laporan Siswa</p>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 shadow-md rounded-lg">
                <div class="overflow-x-auto">

                    <table id="laporan-table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Siswa</th>
                                <th class="whitespace-nowrap">Kelas</th>
                                <th class="whitespace-nowrap">Jurusan</th>
                                <th class="whitespace-nowrap">Laporan</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @foreach ($laporan as $data)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $data->siswa->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $data->siswa->kelas->kelas }}</td>
                                    <td class="whitespace-nowrap">{{ $data->siswa->jurusan->jurusan }}</td>
                                    <td class="whitespace-nowrap">
                                        <a href="{{ url($data->laporan) }}" class="text-blue-500 cursor-pointer">Lihat Laporan</a>
                                    </td>
                                </tr>
                            @endforeach
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

            var table = $('#laporan-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

        });
    </script>
@endpush
