<!-- nav start -->
<nav class="bg-white py-2 z-50">
    <div class="flex justify-between max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="bloc/imagesk -mx-8 md:mx-0 scale-75 md:scale-100"
                        src="{{ asset('assets/frontsite/logo.png') }}" alt="Your Company">
                </div>
            </div>

            <div class="absolute right-0 hidden md:flex md:items-center mx-10">
                @guest
                    <a href="{{ route('login') }}"
                        class="bg-primary hover:bg-primaryhover text-white w-40 h-11 font-bold text-center py-2 rounded self-center hidden md:block">
                        Login
                    </a>
                @endguest
                @auth
                    <!-- Button (Authenticated) -->
                    <div class="hidden lg:ml-10 lg:flex lg:items-center border-l pl-4 pt-2">
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
                                        <img class="h-12 w-12 rounded-full ring-1 ring-offset-4 ring-[#0D63F3]"
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

            <div class="mx-10 absolute flex items-center sm:hidden right-0">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-primaryhover hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false" id="toggler">
                    <span class="sr-only">Open main menu</span>

                    <!-- menu button -->
                    <svg id="openBtn" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <!-- x button -->
                    <svg id="closeBtn" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden sm:hidden py-10" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            @guest
                <a href="{{ route('login') }}"
                    class="bg-primary hover:bg-primaryhover text-white block px-3 py-2 rounded-md text-base font-medium text-center"
                    aria-current="page">Login
                </a>
            @endguest
            @auth
                <a href="{{ route('backsite.dashboard.index') }}"
                    class="bg-primary hover:bg-primaryhover text-white block px-3 py-2 rounded-md text-base font-medium text-center"
                    aria-current="page">Dahboard
                </a>
                <a href="{{ route('logout') }}"
                    class="bg-primary hover:bg-primaryhover text-white block px-3 py-2 rounded-md text-base font-medium text-center"
                    aria-current="page">Logout
                </a>
            @endauth
        </div>
    </div>
</nav>
<!-- nav end -->
