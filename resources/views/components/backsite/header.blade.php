<section class="mx-10">
    <nav class=" bg-white -mx-10 px-10">
        <div class="flex justify-between items-center w-full">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/frontsite/logo.png') }}" alt=""
                    class="scale-50 -mx-8 md:mx-0 md:scale-75">
            </a>

            <div class="">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                    class="hidden lg:flex items-center gap-3 text-red-500 before:w-0.5 before:h-6 before:bg-gray-200 before:mr-10">
                    <span class="">
                        <svg class="w-[25px] h-auto  md:w-[31px] md:h-[27px]" viewBox="0 0 31 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.44372 3.45455H13.939V0.5H2.44372C1.79561 0.5 1.17404 0.811282 0.71575 1.36537C0.257463 1.91945 0 2.67095 0 3.45455V23.5455C0 24.329 0.257463 25.0805 0.71575 25.6346C1.17404 26.1887 1.79561 26.5 2.44372 26.5H13.939V23.5455H2.44372V3.45455Z"
                                fill="#C43E40" />
                            <path
                                d="M30.0091 11.1358L22.1892 4.65942L20.8011 7.02306L26.8225 11.9867H9.11035V14.9649H26.842L20.8207 19.9522L22.2087 22.3158L30.0091 15.8631C30.3162 15.5908 30.5659 15.235 30.738 14.8243C30.9101 14.4137 30.9998 13.9598 30.9998 13.4994C30.9998 13.0391 30.9101 12.5852 30.738 12.1745C30.5659 11.7639 30.3162 11.408 30.0091 11.1358Z"
                                fill="#C43E40" />
                        </svg>
                    </span>
                    <span class="hidden lg:block">
                        Keluar
                    </span>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
                <div class="sm:flex lg:hidden items-center">
                    <!-- Hamburger menu button -->
                    <button
                        class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                        type="button" data-te-offcanvas-toggle data-te-target="#offcanvasRight"
                        aria-controls="offcanvasRight" data-te-ripple-init data-te-ripple-color="light">
                        <!-- Hamburger menu icon -->
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                    </button>

                    <div class="invisible h-full fixed bottom-0 right-0 top-0 z-[1045] flex w-96 max-w-full translate-x-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
                        tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-te-sidenav-init
                        data-te-offcanvas-init>
                        <div class="flex items-center justify-between p-4">
                            <button type="button"
                                class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                data-te-offcanvas-dismiss>
                                <span
                                    class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="offcanvas-body flex-grow overflow-y-auto p-4">

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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
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
                                                href="{{ route('backsite.bimbingan.index') }}"
                                                data-te-sidenav-link-ref>Bimbingan</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/monitoring') || request()->is('backsite/monitoring/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.monitoring.index') }}"
                                                data-te-sidenav-link-ref>Monitoring</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/pengajuan_mitra') || request()->is('backsite/pengajuan_mitra/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.pengajuan_mitra.index') }}"
                                                data-te-sidenav-link-ref>Pengajuan
                                                Mitra</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/pendaftar') || request()->is('backsite/pendaftar/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.pendaftar.index') }}"
                                                data-te-sidenav-link-ref>Pendaftar
                                                PKL</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/peserta') || request()->is('backsite/peserta/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.peserta.index') }}"
                                                data-te-sidenav-link-ref>Peserta
                                                PKL</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/dokumen') || request()->is('backsite/dokumen/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.dokumen.index') }}"
                                                data-te-sidenav-link-ref>Dokumen
                                                Siswa</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/aktivitas') || request()->is('backsite/aktivitas/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.aktivitas.index') }}"
                                                data-te-sidenav-link-ref>Aktivitas
                                                Siswa</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/laporan') || request()->is('backsite/laporan/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.laporan.index') }}"
                                                data-te-sidenav-link-ref>Laporan</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/nilai') || request()->is('backsite/nilai/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.nilai.index') }}"
                                                data-te-sidenav-link-ref>Nilai</a>
                                        </li>
                                        <li class="relative">
                                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 px-8 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('backsite/hasil_survey') || request()->is('backsite/hasil_survey/*') ? 'bg-slate-300 font-bold' : '' }}"
                                                href="{{ route('backsite.hasil_survey.index') }}"
                                                data-te-sidenav-link-ref>Hasil
                                                Survey</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative mt-5">
                                    <a href="{{ route('logout') }}"
                                        class="flex justify-center h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-white bg-red-600 outline-none transition duration-300 ease-linear"
                                        data-te-sidenav-link-ref
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                        <span>Keluar</span>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
