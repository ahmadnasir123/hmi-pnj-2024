<!-- Header -->
<nav x-data="{ navbarMobileOpen: false }" class="bg-white">
    <div class="px-4 pt-6 mx-auto max-w-7xl lg:px-14 lg:py-10">
        <div class="flex justify-between h-16">
            <div class="flex justify-between flex-auto">

                <!-- Logo Brand -->
                <a href="{{ route('index') }}" class="flex items-center flex-shrink-0">
                    <img class="w-auto h-20 max-w-full md:h-16 lg:h-12 xl:h-16" src="{{ asset('assets/frontsite/images/hmi.png') }}"
                        alt="HMI Logo" />
                </a>


                <!-- Navigation Menu -->
                <div class="hidden lg:ml-6 lg:flex lg:space-x-12">



                    <a href="{{ route('index') }}" class="text-[#1E2B4F] relative {{ request()->is('/') ? "
                        after:absolute after:content-[''] after:border-b-2 after:border-[#0D63F5] after:w-8/12
                        after:-translate-x-1/2 after:bottom-3 after:left-1/2 font-semibold inline-flex items-center px-1
                        text-lg" : "hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium" }} ">
                        Home
                    </a>
                    <a href="#pengurus"
                        class="text-[#1E2B4F] relative hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium">
                        Pengurus
                    </a>
                    <a href="{{ route('kader.index') }}" class="text-[#1E2B4F] relative {{ request()->routeIs('kader.index') ? " after:absolute
                        after:content-[''] after:border-b-2 after:border-[#0D63F5] after:w-8/12 after:-translate-x-1/2 after:bottom-3
                        after:left-1/2 font-semibold inline-flex items-center px-1 text-lg"
                        : "hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium" }} ">
                        Kader
                    </a>
                    <a href="{{ route('alumni.index') }}" class="text-[#1E2B4F] relative {{ request()->routeIs('alumni.index') ? "
                        after:absolute after:content-[''] after:border-b-2 after:border-[#0D63F5] after:w-8/12 after:-translate-x-1/2
                        after:bottom-3 after:left-1/2 font-semibold inline-flex items-center px-1 text-lg"
                        : "hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium" }} ">
                        Kahmi
                    </a>
                    <a href="{{ route('documantation.index') }}" class="text-[#1E2B4F] relative {{ request()->routeIs('documantation.index') ? "
                        after:absolute after:content-[''] after:border-b-2 after:border-[#0D63F5] after:w-8/12 after:-translate-x-1/2
                        after:bottom-3 after:left-1/2 font-semibold inline-flex items-center px-1 text-lg"
                        : "hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium" }} ">
                        Galeri
                    </a>
                    <a href="{{ route('tulisan.index') }}" class="text-[#1E2B4F] relative {{ request()->routeIs('tulisan.index') ? "
                        after:absolute after:content-[''] after:border-b-2 after:border-[#0D63F5] after:w-8/12 after:-translate-x-1/2
                        after:bottom-3 after:left-1/2 font-semibold inline-flex items-center px-1 text-lg"
                        : "hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium" }} ">
                        Tulisan Kader
                    </a>
                    <a href="#contact"
                        class="text-[#1E2B4F] relative hover:text-gray-500 inline-flex items-center px-1 pt-1 text-lg font-medium">
                        Kontak
                    </a>
                </div>

            </div>

            @guest

            <!-- Button (no authenticated) -->
            <div class="hidden lg:ml-10 lg:flex lg:items-center">
                <a href="{{ route('login') }}"
                    class="inline-flex items-center rounded-full text-[#1E2B4F] text-lg font-medium bg-[#F2F6FE] px-10 py-3">
                    Sign In
                </a>
            </div>

            <!-- Mobile Toggle button -->
            <div class="flex items-center -mr-2 lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0D63F3]"
                    aria-controls="mobile-menu" aria-expanded="false" @click="navbarMobileOpen = ! navbarMobileOpen">
                    <span class="sr-only">Open main menu</span>

                    <!--
                                Icon when menu is closed.
                                Menu open: "hidden", Menu closed: "block"
                              -->
                    <svg x-show="!navbarMobileOpen" class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!--
                                Icon when menu is open.
                                Menu open: "block", Menu closed: "hidden"
                              -->
                    <svg x-show="navbarMobileOpen" class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            @endguest

            @auth
            <!-- Button (Authenticated) -->
            <div class="hidden pt-2 pl-4 border-l lg:ml-10 lg:flex lg:items-center">
                <div x-data="{ profileDekstopOpen: false }" class="relative ml-3">
                    <div>
                        <button type="button" class="flex text-sm bg-white rounded-full focus:outline-none"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                            @click="profileDekstopOpen = ! profileDekstopOpen">
                            <!-- focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 -->
                            <span class="sr-only">Open user menu</span>
                            <div class="mr-5 text-right">
                                <div class="text-base font-medium text-[#1E2B4F]">
                                    Hi, {{ (Auth::user()->name) }}
                                </div>

                                {{-- this section must read from type user--}}
                                <div class="text-sm text-[#AFAEC3]">User</div>
                            </div>
                            <img class="h-12 w-12 rounded-full ring-1 ring-offset-4 ring-[#0D63F3]"
                                src="{{ asset('/assets/frontsite/images/authenticated-user.svg') }}"
                                alt="User Profile" />
                        </button>
                    </div>
                    <div x-show="profileDekstopOpen" @click.outside="profileDekstopOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-30 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="#" class="block px-4 py-2 text-sm text-[#1E2B4F] hover:bg-gray-100" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[#1E2B4F] hover:bg-gray-100" role="menuitem"
                            tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                            class="block px-4 py-2 text-sm text-[#1E2B4F] hover:bg-gray-100" role="menuitem"
                            tabindex="-1" id="user-menu-item-2">
                            Sign out

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Toggle button -->
            <div class="flex items-center -mr-2 lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0D63F3]"
                    aria-controls="mobile-menu" aria-expanded="false" @click="navbarMobileOpen = ! navbarMobileOpen">
                    <span class="sr-only">Open main menu</span>

                    <!--
                                            Icon when menu is closed.
                                            Menu open: "hidden", Menu closed: "block"
                                        -->
                    <svg x-show="!navbarMobileOpen" class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!--
                                            Icon when menu is open.
                                            Menu open: "block", Menu closed: "hidden"
                                        -->
                    <svg x-show="navbarMobileOpen" class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            @endauth



        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden" id="mobile-menu" x-show="navbarMobileOpen">
        <div class="pt-2 pb-3 space-y-1">

            <!-- 
            Active Link: "bg-indigo-50 border-[#0D63F5] text-[#1E2B4F]", 
            
            Default Link: "border-transparent text-[#1E2B4F] hover:bg-gray-50 
                      hover:border-gray-300 hover:text-gray-700" 
          -->
            <a href="{{ route('index') }}"
                class="bg-indigo-50 border-[#0D63F5] text-[#1E2B4F] block pl-3 pr-4 py-2 border-l-4 text-base font-semibold">Home</a>
            <a href="#kategoru"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Kategori</a>
            <a href="#pengurus"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Pengurus</a>
            <a href="#kader"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Kader</a>
            <a href="#galeri"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Galeri</a
            <a href="#tulisar_kader"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Tulisan Kader</a
            <a href="#kontak"
                class="border-transparent text-[#1E2B4F] hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Kontak</a
            </div>

            <!-- Profile (Mobile no authenticated) -->
            <div class="py-3 border-gray-200">
                <a href="{{ route('login') }}"
                    class="flex items-center justify-center text-center mx-4 rounded-full text-[#1E2B4F] text-lg font-medium bg-[#F2F6FE] px-10 py-3">
                    Sign In
                </a>
            </div>

        </div>
</nav>
<!-- End Header -->