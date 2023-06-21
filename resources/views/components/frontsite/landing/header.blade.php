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
        </div>
    </div>
</nav>
<!-- nav end -->
