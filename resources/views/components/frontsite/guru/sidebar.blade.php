<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
        <!-- Sidenav -->
        <nav id="sidenav"
            class="hidden lg:block px-2 py-2 h-screen w-64 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
            data-te-sidenav-init data-te-sidenav-menu-ref data-te-sidenav-hidden="false" data-te-sidenav-mode="side"
            data-te-sidenav-content="#content" data-te-sidenav-position="static">
            <a href="{{ route('guru.profile.index') }}">
                <div class="border-2 border-gray-300 rounded-md px-3 mb-5 py-3">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt=""
                            class="rounded-full w-[41px] h-[41px] bg-cover">

                        <div>
                            <h4 class="font-bold">{{ Auth::user()->name }}</h4>
                            <p>{{ Auth::user()->role->title }}</p>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a href="{{ route('guru.dashboard.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/dashboard') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link-ref>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('guru.mitra.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/mitra') || request()->is('guru/mitra/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link-
                        ref>
                        <span>Mitra Terhubung</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('guru.monitoring.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/monitoring') || request()->is('guru/monitoring/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link-
                        ref>
                        <span>Monitoring</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-500 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span>Siswa</span>
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
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/siswa') || request()->is('guru/siswa/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('guru.siswa.index') }}" data-te-sidenav-link-ref>Daftar Siswa</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/aktivitas_siswa') || request()->is('guru/aktivitas_siswa/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('guru.siswa.aktivitas') }}" data-te-sidenav-link-ref>Jurnal & Presensi</a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/laporan') || request()->is('guru/laporan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('guru.siswa.laporan') }}" data-te-sidenav-link-ref>Laporan Akhir
                               </a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('guru/nilai') || request()->is('guru/nilai/*') ? 'bg-slate-300 font-bold' : '' }}"
                                href="{{ route('guru.siswa.nilai') }}" data-te-sidenav-link-ref>Nilai
                                PKL</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Sidenav -->
