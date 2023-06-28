<!-- nav start -->
<nav class="bg-white py-2 z-50">
    <div class="flex justify-between max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between w-screen">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <img class="block -ml-28 scale-75 md:mx-0" src="{{ asset('assets/frontsite/logo.png') }}"
                    alt="Your Company">
            </div>

            <div class="absolute right-0 md:flex md:items-center mx-10">
                @guest
                    <a href="{{ route('login') }}"
                        class=" bg-primary hover:bg-primaryhover text-white w-40 h-11 font-bold text-center py-2 rounded self-center hidden md:block">
                        Login
                    </a>
                @endguest
                @auth
                    <!-- Button (Authenticated) -->
                    <div class="lg:ml-10 lg:flex lg:items-center border-l pl-4 pt-2">
                        <div x-data="{ profileDekstopOpen: false }" class="ml-3 relative">
                            <div>
                                <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                                    @click="profileDekstopOpen = ! profileDekstopOpen">
                                    <!-- focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 -->
                                    <span class="sr-only">Open user menu</span>
                                    <div class="text-right mr-5 flex gap-3 items-center">
                                        <div class="text-base font-medium text-[#1E2B4F]">
                                            Hi, {{ Auth::user()->name }}
                                        </div>
                                        <img class="h-10 w-10 rounded-full ring-1 ring-offset-4 ring-[#0D63F3]"
                                            src="{{ asset('assets/frontsite/authenticated-user.svg') }}"
                                            alt="User Profile" />
                                    </div>
                                </button>
                            </div>
                            <div x-show="profileDekstopOpen" @click.outside="profileDekstopOpen = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                class="origin-top-right absolute z-30 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <a href="{{ route('backsite.dashboard.index') }}"
                                    class="block px-4 py-2 text-sm text-[#1E2B4F] hover:bg-gray-100" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Dashboard
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                    class="block px-4 py-2 text-sm text-[#1E2B4F] hover:bg-gray-100" role="menuitem"
                                    tabindex="-1" id="user-menu-item-2">Sign out

                                    <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>

                                </a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

            <div class="sm:flex lg:hidden items-center">
                <!-- Hamburger menu button -->
                <button
                    class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                    type="button" data-te-offcanvas-toggle data-te-target="#offcanvasRight"
                    aria-controls="offcanvasRight" data-te-ripple-init data-te-ripple-color="light">
                    <!-- Hamburger menu icon -->
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 w-7">
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
                        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                            <li class="relative">
                                <a href="{{ route('login') }}"
                                    class="flex justify-center h-12 cursor-pointer items-center truncate rounded-[5px] px-4 py-4 text-[0.875rem] font-medium text-white bg-blue-600 outline-none transition duration-300 ease-linear"
                                    data-te-sidenav-link-ref>
                                    <span>Login</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
</nav>
<!-- nav end -->
