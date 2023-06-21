<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
        <aside class="bg-white px-2 py-2 w-screen overflow-hidden rounded-md lg:basis-3/12 h-fit">
            <div class="border-2 border-gray-500 rounded-md px-3 mb-5 py-3">
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
                    <a href="{{ route('backsite.dashboard.index') }}" class="block py-3 px-3 rounded {{ request()->is('backsite/survey') ? 'bg-gray-300 font-bold' : 'hover:bg-gray-300' }}">
                        Survey
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Periode PKL
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Bidang Usaha
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Jurusan
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Kelas
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Siswa
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Guru
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Mitra
                    </a>
                </div>

                <div class="divide-y mt-10">
                    <span class="text-sm font-bold text-gray-500 block mb-3">Kegiatan</span>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Bimbingan
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Monitoring
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Pengajuan Mitra
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Pendaftar PKL
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Peserta PKL
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Dokumen Siswa
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Aktivitas Siswa
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Laporan
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Nilai
                    </a>
                    <a href="../siswa/index.html" class="block py-3 px-3 rounded hover:bg-gray-300">
                        Hasil Survey
                    </a>

                </div>



            </div>
        </aside>
