<header class="absolute bg-transparent top-0 left-0 w-full z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="hidden lg:flex space-x-8">
            <a href="{{ route('welcome') }}" class="text-white font-medium hover:text-red-600 transition">Home</a>
            <a href="{{ route('about') }}" class="text-white font-medium hover:text-red-600 transition">About
                Us</a>
            <a href="{{ route('classes') }}"
               class="text-white font-medium hover:text-red-600 transition">Classes</a>
            <a href="{{ route('services') }}"
               class="text-white font-medium hover:text-red-600 transition">Services</a>
            <a href="{{ route('team') }}" class="text-white font-medium hover:text-red-600 transition">Our
                Team</a>

            <!-- Dropdown -->
            <div class="relative group">
                <button
                    class="flex items-center space-x-1 text-white font-medium hover:text-red-600 transition">
                    <span>Pages</span>
                    <i class="fa fa-chevron-down text-sm"></i>
                </button>
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-500">
                    <li><a href="{{ url('/about-us') }}" class="block px-4 py-2 hover:text-red-500">About Us</a></li>
                    <li><a href="{{ url('/class-timetable') }}" class="block px-4 py-2 hover:text-red-500">Classes
                            Timetable</a></li>
                    <li><a href="{{ route('bmi') }}" class="block px-4 py-2 hover:text-red-500">BMI
                            Calculator</a></li>
                    <li><a href="{{ route('team') }}" class="block px-4 py-2 hover:text-red-500">Our Team</a></li>
                    <li><a href="{{ route('gallery') }}" class="block px-4 py-2 hover:text-red-500">Gallery</a></li>
                    <li><a href="{{ route('blog') }}" class="block px-4 py-2 hover:text-red-500">Our Blog</a></li>
                    <li><a href="{{ url('/404') }}" class="block px-4 py-2 hover:text-red-500">404</a></li>
                </ul>
            </div>

            <a href="{{ route('contact') }}" class="text-white font-medium hover:text-red-600 transition">Contact</a>
        </nav>

        <!-- Top Options -->
        <div class="flex items-center space-x-4 top-option">
            <!-- Search -->
            <button class="text-gray-700 hover:text-red-600 transition">
                <x-hugeicons-search-01 class="text-md"/>
            </button>

            <!-- Theme Toggle -->
            <button id="theme-toggle" class="text-gray-700 hover:text-red-600 transition relative"
                    aria-label="Toggle theme">
                <span class="theme-container" aria-hidden="true">
                    <x-heroicon-s-moon id="moon-icon" class="w-7 h-7 text-md hidden dark:block"/>
                    <x-heroicon-s-sun id="sun-icon" class="w-7 h-7 text-md block dark:hidden"/>
                </span>
            </button>

            <!-- Socials -->
            <div class="hidden sm:flex space-x-3">
                <a href="#" class="text-gray-700 hover:text-blue-600"><i class="fa fa-facebook"></i></a>
                <a href="#" class="text-gray-700 hover:text-sky-500"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-gray-700 hover:text-red-600"><i class="fa fa-youtube-play"></i></a>
                <a href="#" class="text-gray-700 hover:text-pink-600"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden lg:flex items-center space-x-3">
                @guest
                    <a href="{{ route('login') }}"
                       class="text-white text-sm font-semibold uppercase tracking-wide font-['Oswald'] border border-white/30 px-5 py-2 rounded-lg hover:border-red-500 hover:text-red-500 transition-all duration-300">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="text-white text-sm font-semibold uppercase tracking-wide font-['Oswald'] bg-red-500 px-5 py-2 rounded-lg hover:bg-red-600 transition-all duration-300 shadow-lg shadow-red-500/20">
                        Sign Up
                    </a>
                @endguest

                @auth
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-white hover:text-red-500 transition-all duration-300">
                            <div class="w-9 h-9 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-bold uppercase">
                                {{ Auth::user()->initials() }}
                            </div>
                            <span class="text-sm font-medium font-['Oswald'] uppercase tracking-wide">{{ Auth::user()->name }}</span>
                            <i class="fa fa-chevron-down text-xs"></i>
                        </button>
                        <ul class="absolute right-0 mt-2 w-52 bg-gray-900/95 backdrop-blur-lg border border-white/10 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 py-2 z-50">
                            <li>
                                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:text-white hover:bg-white/5 transition text-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:text-white hover:bg-white/5 transition text-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                    Profile
                                </a>
                            </li>
                            <li class="border-t border-white/10 mt-1 pt-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:text-red-500 hover:bg-white/5 transition text-sm w-full text-left">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="lg:hidden text-gray-700 hover:text-red-600">
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-gray-900/95 backdrop-blur-lg border-t border-white/10">
        <nav class="flex flex-col space-y-1 p-4">
            <a href="{{ url('/') }}" class="text-gray-200 hover:text-red-500 py-2 transition">Home</a>
            <a href="{{ url('/about-us') }}" class="text-gray-200 hover:text-red-500 py-2 transition">About Us</a>
            <a href="{{ url('/class-details') }}" class="text-gray-200 hover:text-red-500 py-2 transition">Classes</a>
            <a href="{{ url('/services') }}" class="text-gray-200 hover:text-red-500 py-2 transition">Services</a>
            <a href="{{ url('/team') }}" class="text-gray-200 hover:text-red-500 py-2 transition">Our Team</a>
            <a href="{{ url('/contact') }}" class="text-gray-200 hover:text-red-500 py-2 transition">Contact</a>

            {{-- Mobile Auth Links --}}
            <div class="border-t border-white/10 pt-3 mt-2">
                @guest
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('login') }}"
                           class="text-center text-white text-sm font-semibold uppercase tracking-wide font-['Oswald'] border border-white/30 px-5 py-2.5 rounded-lg hover:border-red-500 hover:text-red-500 transition-all duration-300">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                           class="text-center text-white text-sm font-semibold uppercase tracking-wide font-['Oswald'] bg-red-500 px-5 py-2.5 rounded-lg hover:bg-red-600 transition-all duration-300">
                            Sign Up
                        </a>
                    </div>
                @endguest

                @auth
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-9 h-9 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-bold uppercase">
                            {{ Auth::user()->initials() }}
                        </div>
                        <span class="text-white text-sm font-medium">{{ Auth::user()->name }}</span>
                    </div>
                    <a href="{{ route('dashboard') }}" class="text-gray-200 hover:text-red-500 py-2 transition block">Dashboard</a>
                    <a href="{{ route('profile.edit') }}" class="text-gray-200 hover:text-red-500 py-2 transition block">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="mt-1">
                        @csrf
                        <button type="submit" class="text-gray-200 hover:text-red-500 py-2 transition w-full text-left">
                            Log Out
                        </button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
</header>
