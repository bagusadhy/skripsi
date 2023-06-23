<section class="mx-10">
    <nav class=" bg-white -mx-10 px-10">
        <div class="flex justify-between items-center w-full">
            <div>
                <img src="{{ asset('assets/frontsite/logo.png') }}" alt=""
                    class="scale-50 -mx-8 md:mx-0 md:scale-75">
            </div>

            <div class="">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                    class="flex items-center gap-3 text-red-500 before:w-0.5 before:h-6 before:bg-gray-200 before:mr-10">
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
  \                  <span class="hidden lg:block">
                        Keluar
                    </span>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </nav>
