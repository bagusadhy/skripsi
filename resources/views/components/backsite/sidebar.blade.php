<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
        <aside class="bg-white px-2 py-2 w-screen lg:w-64 rounded-md">
            <div class="border-2 border-gray-300 rounded-md px-3 mb-5 py-3">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt=""
                        class="rounded-full w-[41px] h-[41px] bg-cover">

                    <div>
                        <h4 class="font-bold">{{ Auth::user()->name }}</h4>
                        <p>Admin</p>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('backsite.dashboard.index') }}"
                    class="block py-3 px-2 rounded {{ request()->is('backsite/dashboard') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                    Dashboard
                </a>

                <div class="divide-y mt-10">
                    <span class="text-sm font-bold text-gray-500 block mb-3">Master Data</span>
                    <a href="{{ route('backsite.survey.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/survey') || request()->is('backsite/survey/*') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Survey
                    </a>
                    <a href="{{ route('backsite.periode.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/periode') || request()->is('backsite/periode/*') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Periode PKL
                    </a>
                    <a href="{{ route('backsite.bidang_usaha.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/bidang_usaha') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Bidang Usaha
                    </a>
                    <a href="{{ route('backsite.jurusan.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/jurusan') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Jurusan
                    </a>
                    <a href="{{ route('backsite.kelas.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/kelas') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Kelas
                    </a>
                    <a href="{{ route('backsite.siswa.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/siswa') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Siswa
                    </a>
                    <a href="{{ route('backsite.guru.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/guru') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Guru
                    </a>
                    <a href="{{ route('backsite.mitra.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/mitra') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Mitra
                    </a>
                </div>

                <div class="divide-y mt-10">
                    <span class="text-sm font-bold text-gray-500 block mb-3">Kegiatan</span>
                    <a href="{{ route('backsite.bimbingan.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/bimbingan') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Bimbingan
                    </a>
                    <a href="{{ route('backsite.monitoring.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/monitoring') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Monitoring
                    </a>
                    <a href="{{ route('backsite.pengajuan_mitra.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/pengajuan_mitra') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Pengajuan Mitra
                    </a>
                    <a href="{{ route('backsite.pendaftar.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/pendaftar') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Pendaftar PKL
                    </a>
                    <a href="{{ route('backsite.peserta.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/peserta') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Peserta PKL
                    </a>
                    <a href="{{ route('backsite.dokumen.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/dokumen') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Dokumen Siswa
                    </a>
                    <a href="{{ route('backsite.aktivitas.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/aktivitas') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Aktivitas Siswa
                    </a>
                    <a href="{{ route('backsite.laporan.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/laporan') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Laporan
                    </a>
                    <a href="{{ route('backsite.nilai.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/nilai') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Nilai
                    </a>
                    <a href="{{ route('backsite.hasil_survey.index') }}"
                        class="block py-3 px-3 rounded {{ request()->is('backsite/hasil_survey') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Hasil Survey
                    </a>

                </div>



            </div>
        </aside>
