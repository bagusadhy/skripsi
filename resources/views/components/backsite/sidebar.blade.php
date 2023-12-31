<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
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
                            <a href="{{ route('backsite.periode.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/periode') || request()->is('backsite/periode/*') ? 'bg-slate-300 font-bold' : '' }}"
                            data-te-sidenav-link-ref>Periode PKL</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.survey.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/survey') || request()->is('backsite/survey/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Survey Kepuasan Mitra</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.bidang_usaha.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/bidang_usaha') || request()->is('backsite/bidang_usaha/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Bidang Usaha Mitra</a>
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
                            <a href="{{ route('backsite.template.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/template') || request()->is('backsite/template/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Template Laporan & Penilaian</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/bimbingan') || request()->is('backsite/bimbingan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.bimbingan.index') }}" data-te-sidenav-link-ref>Guru Pembimbing</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.siswa.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/siswa') || request()->is('backsite/siswa/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Data Siswa</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.guru.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/guru') || request()->is('backsite/guru/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Data Guru</a>
                        </li>
                        <li class="relative">
                            <a href="{{ route('backsite.mitra.index') }}"
                                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/mitra') || request()->is('backsite/mitra/*') ? 'bg-slate-300 font-bold' : '' }}"
                                data-te-sidenav-link-ref>Data Mitra</a>
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
                            <p class="text-xs mx-4 mt-3 font-bold border-b leading-normal text-gray-600">Guru</p>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/monitoring') || request()->is('backsite/monitoring/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.monitoring.index') }}" data-te-sidenav-link-ref>Monitoring</a>
                        </li>


                        <li class="relative">
                            <p class="text-xs mx-4 mt-3 font-bold border-b leading-normal text-gray-600">Siswa</p>
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
                            <p class="text-xs mx-4 mt-3 font-bold border-b leading-normal text-gray-600">Mitra</p>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/lowongan') || request()->is('backsite/lowongan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.lowongan.index') }}" data-te-sidenav-link-ref>Lowongan
                                PKL</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/nilai') || request()->is('backsite/nilai/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.nilai.index') }}" data-te-sidenav-link-ref>Nilai</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/hasil_survey') || request()->is('backsite/hasil_survey/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('backsite.hasil_survey.index') }}" data-te-sidenav-link-ref>Hasil
                                Survey Kepuasan</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Sidenav -->
