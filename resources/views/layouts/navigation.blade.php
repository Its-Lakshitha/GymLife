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
            <a href="{{ url('/') }}" class="text-white font-medium hover:text-red-600 transition">Home</a>
            <a href="{{ url('/about-us') }}" class="text-white font-medium hover:text-red-600 transition">About
                Us</a>
            <a href="{{ url('/class-details') }}"
               class="text-white font-medium hover:text-red-600 transition">Classes</a>
            <a href="{{ url('/services') }}"
               class="text-white font-medium hover:text-red-600 transition">Services</a>
            <a href="{{ url('/team') }}" class="text-white font-medium hover:text-red-600 transition">Our
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
                    <li><a href="{{ url('/bmi-calculator') }}" class="block px-4 py-2 hover:text-red-500">BMI
                            Calculator</a></li>
                    <li><a href="{{ url('/team') }}" class="block px-4 py-2 hover:text-red-500">Our Team</a></li>
                    <li><a href="{{ url('/gallery') }}" class="block px-4 py-2 hover:text-red-500">Gallery</a></li>
                    <li><a href="{{ url('/blog') }}" class="block px-4 py-2 hover:text-red-500">Our Blog</a></li>
                    <li><a href="{{ url('/404') }}" class="block px-4 py-2 hover:text-red-500">404</a></li>
                </ul>
            </div>

            <a href="{{ url('/contact') }}" class="text-white font-medium hover:text-red-600 transition">Contact</a>
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
            <div class="flex space-x-3">
                <a href="#" class="text-gray-700 hover:text-blue-600"><i class="fa fa-facebook"></i></a>
                <a href="#" class="text-gray-700 hover:text-sky-500"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-gray-700 hover:text-red-600"><i class="fa fa-youtube-play"></i></a>
                <a href="#" class="text-gray-700 hover:text-pink-600"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="lg:hidden text-gray-700 hover:text-red-600">
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200">
        <nav class="flex flex-col space-y-2 p-4">
            <a href="{{ url('/') }}" class="hover:text-red-600">Home</a>
            <a href="{{ url('/about-us') }}" class="hover:text-red-600">About Us</a>
            <a href="{{ url('/class-details') }}" class="hover:text-red-600">Classes</a>
            <a href="{{ url('/services') }}" class="hover:text-red-600">Services</a>
            <a href="{{ url('/team') }}" class="hover:text-red-600">Our Team</a>
            <a href="{{ url('/contact') }}" class="hover:text-red-600">Contact</a>
        </nav>
    </div>
</header>
