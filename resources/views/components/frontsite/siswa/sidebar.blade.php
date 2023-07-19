<section class="bg-[##F9F9F9] mt-10 -mx-10 md:px-10">
    <div class="flex justify-between gap-10 flex-col lg:flex-row">
        <!-- Sidenav -->
        <nav id="sidenav"
            class="hidden lg:block px-2 py-2 h-screen w-64 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
            data-te-sidenav-init data-te-sidenav-menu-ref data-te-sidenav-hidden="false" data-te-sidenav-mode="side"
            data-te-sidenav-content="#content" data-te-sidenav-position="static">
            <a href="{{ route('siswa.profile.index') }}">
                <div class="border-2 border-gray-300 rounded-md px-3 mb-5 py-3">
                    <div class="flex items-center gap-3">
                        @if (Auth::user()->profile_photo_path == null)
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt=""
                                class="rounded-full w-[41px] h-[41px] bg-cover">
                        @else
                            <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt=""
                                class="rounded-full border-2 border-black w-[41px] h-[41px] object-contain">
                        @endif

                        <div>
                            <h4 class="font-bold">{{ Auth::user()->name }}</h4>
                            <p>{{ Auth::user()->role->title }}</p>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a href="{{ route('siswa.dashboard.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('siswa/dashboard') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link-ref>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('siswa.pendaftaran.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('siswa/pendaftaran') || request()->is('siswa/pendaftaran/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link- ref>
                        <span>Pendaftaran</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('siswa.pengajuan.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('siswa/pengajuan') || request()->is('siswa/pengajuan/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link- ref>
                        <span>Pengajuan Mitra</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('siswa.dokumen.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('siswa/dokumen') || request()->is('siswa/dokumen/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link- ref>
                        <span>Dokumen Persyaratan</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="{{ route('siswa.kegiatan.index') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-200 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ request()->is('siswa/kegiatan') || request()->is('siswa/kegiatan/*') ? 'bg-slate-300 font-bold' : '' }}"
                        data-te-sidenav-link- ref>
                        <span>Kegiatan PKL</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidenav -->
