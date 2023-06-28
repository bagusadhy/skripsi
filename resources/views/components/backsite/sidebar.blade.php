<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
        {{-- <aside class="bg-white px-2 py-2 w-screen lg:w-64 rounded-md ">
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
        </aside> --}}


        <!-- Sidenav -->
        <nav id="sidenav"
            class="hidden lg:block px-2 py-2 h-screen w-64 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
            data-te-sidenav-init data-te-sidenav-menu-ref data-te-sidenav-hidden="false" data-te-sidenav-mode="side"
            data-te-sidenav-content="#content" data-te-sidenav-position="static">
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
            <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a href="{{ route('backsite.dashboard.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/dashboard') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link-ref>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-500 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span>Master Data</span>
                        <span
                            class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                            data-te-sidenav-rotate-icon-ref>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                        data-te-sidenav-collapse-ref>
                        <li class="relative">
                            <a href="{{ route('backsite.survey.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/survey') || request()->is('backsite/survey/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Survey</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.periode.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/periode') || request()->is('backsite/periode/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Periode PKL</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.bidang_usaha.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/bidang_usaha') || request()->is('backsite/bidang_usaha/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Bidang Usaha</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.jurusan.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/jurusan') || request()->is('backsite/jurusan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Jurusan</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.kelas.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/kelas') || request()->is('backsite/kelas/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Kelas</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.siswa.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/siswa') || request()->is('backsite/siswa/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Siswa</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.guru.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/guru') || request()->is('backsite/guru/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Guru</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.mitra.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/mitra') || request()->is('backsite/mitra/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Mitra</a>
                        </li>
                    </ul>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-500 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span>Kegiatan</span>
                        <span
                            class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                            data-te-sidenav-rotate-icon-ref>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                        data-te-sidenav-collapse-ref>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/bimbingan') || request()->is('backsite/bimbingan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.bimbingan.index') }}" data-te-sidenav-link-ref>Bimbingan</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/monitoring') || request()->is('backsite/monitoring/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.monitoring.index') }}" data-te-sidenav-link-ref>Monitoring</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/pengajuan_mitra') || request()->is('backsite/pengajuan_mitra/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.pengajuan_mitra.index') }}" data-te-sidenav-link-ref>Pengajuan
                                Mitra</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/pendaftar') || request()->is('backsite/pendaftar/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.pendaftar.index') }}" data-te-sidenav-link-ref>Pendaftar
                                PKL</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/peserta') || request()->is('backsite/peserta/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.peserta.index') }}" data-te-sidenav-link-ref>Peserta PKL</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/dokumen') || request()->is('backsite/dokumen/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.dokumen.index') }}" data-te-sidenav-link-ref>Dokumen Siswa</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/aktivitas') || request()->is('backsite/aktivitas/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.aktivitas.index') }}" data-te-sidenav-link-ref>Aktivitas
                                Siswa</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/laporan') || request()->is('backsite/laporan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.laporan.index') }}" data-te-sidenav-link-ref>Laporan</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/nilai') || request()->is('backsite/nilai/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.nilai.index') }}" data-te-sidenav-link-ref>Nilai</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/hasil_survey') || request()->is('backsite/hasil_survey/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.hasil_survey.index') }}" data-te-sidenav-link-ref>Hasil
                                Survey</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Sidenav -->
