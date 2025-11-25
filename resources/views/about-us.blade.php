<x-app-layout>

    <!-- Breadcrumb Section -->
    <section
        class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
        style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')"
    >

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">About Us</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ url('/') }}" class="hover:text-white transition me-0">Home ></a>
                <span> About</span>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container mx-auto px-4 py-20 fade-in-section">
        <div class="">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">Why Choose Us?</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-white">Push Your Limits
                    Forward</h2>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Item 1 -->
                <div
                    class="bg-white dark:bg-gray-800/60 rounded-2xl shadow-md p-8 text-center transition-transform transform hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-300 dark:hover:shadow-none">
                    <div class="w-full flex justify-center">
                        <div
                            class="w-20 h-20 rounded-full p-4 mb-4 flex items-center justify-center bg-gray-100 dark:bg-gray-700/30  text-red-500 dark:text-red-400 transition-colors duration-300">
                            <x-hugeicons-treadmill-02 class="w-12 h-12"/>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800 dark:text-gray-100">Modern Equipment</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.
                    </p>
                </div>

                <!-- Item 2 -->
                <div
                    class="bg-white dark:bg-gray-800/60 rounded-2xl shadow-md p-8 text-center transition-transform transform hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-300 dark:hover:shadow-none">
                    <div class="w-full flex justify-center">
                        <div
                            class="w-20 h-20 rounded-full p-4 mb-4 flex items-center justify-center bg-gray-100 dark:bg-gray-700/30 text-red-500 dark:text-red-400 transition-colors duration-300">
                            <x-hugeicons-spoon-and-knife class="w-12 h-12"/>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800 dark:text-gray-100">Healthy Nutrition Plan</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.
                    </p>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-white dark:bg-gray-800/60 rounded-2xl shadow-md p-8 text-center transition-transform transform hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-300 dark:hover:shadow-none">
                    <div class="w-full flex justify-center">
                        <div
                            class="w-20 h-20 rounded-full p-4 mb-4 flex items-center justify-center bg-gray-100 dark:bg-gray-700/30 text-red-500 dark:text-red-400 transition-colors duration-300">
                            <x-hugeicons-dumbbell-02 class="w-12 h-12"/>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800 dark:text-gray-100">Professional Training
                        Plan</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.
                    </p>
                </div>

                <!-- Item 4 -->
                <div
                    class="bg-white dark:bg-gray-800/60 rounded-2xl shadow-md p-8 text-center transition-transform transform hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-300 dark:hover:shadow-none">
                    <div class="w-full flex justify-center">
                        <div
                            class="w-20 h-20 rounded-full p-4 mb-4 flex items-center justify-center bg-gray-100 dark:bg-gray-700/30 text-red-500 dark:text-red-400 transition-colors duration-300">
                            <x-fas-heart-pulse class="w-12 h-12"/>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800 dark:text-gray-100">Unique to Your Needs</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row w-full fade-in-section">
        <!-- Left Side: Video Section -->
        <div
            class="relative w-full lg:w-1/2 h-80 lg:h-auto bg-cover bg-center"
            style="background-image: url('{{ asset('img/about-us.jpg') }}')"
        >
            <a
                href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                class="absolute inset-0 flex items-center justify-center bg-black/40 hover:bg-black/60 transition"
                target="_blank"
            >
                <x-heroicon-o-play
                    class="w-20 h-20 text-white text-5xl bg-red-500 rounded-full p-4 hover:scale-110 transition-transform"/>
            </a>
        </div>

        <!-- Right Side: Text Section -->
        <div class="w-full lg:w-1/2  px-6 lg:px-12 py-12 flex flex-col justify-center">
            <div class="mb-6">
                <span class="text-[#151515] dark:text-white font-semibold uppercase tracking-wide">About Us</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-gray-50 mt-2">What We Have Done</h2>
            </div>

            <p class="text-gray-600 dark:text-gray-50 leading-relaxed mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                viverra maecenas accumsan lacus vel facilisis. Aliquip ex ea commodo consequat sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor.
            </p>

            <!-- Progress Bars -->
            <div class="about-bar">
                <!-- Bar 1 -->
                <div class="ab-item">
                    <p class="text-gray-700 dark:text-gray-50 font-medium mb-2">Body Building</p>
                    <div id="bar1" class="barfiller dark:bg-white rounded-2xl">
                        <span class="fill rounded-2xl" data-percentage="88"></span>
                        <div class="tipWrap">
                            <span class="tip dark:text-white dark:bg-white"></span>
                        </div>
                    </div>
                </div>

                <!-- Bar 2 -->
                <div class="ab-item">
                    <p class="text-gray-700 font-medium mb-2">Training</p>
                    <div class="barfiller rounded-2xl" id="bar2">
                        <span class="fill rounded-2xl" data-percentage="82"></span>
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                    </div>
                </div>

                <!-- Bar 3 -->
                <div class="ab-item">
                    <p class="text-gray-700 font-medium mb-2">Fitness</p>
                    <div class="barfiller rounded-2xl" id="bar3">
                        <span class="fill rounded-2xl" data-percentage="90"></span>
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 fade-in-section">
        <div class="container mx-auto px-6">
            <!-- Section Title -->
            <div class="text-center mb-10 ">
                <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">Our Facilities</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-gray-50">Provide the Best
                    Environment for You</h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/60 rounded-xl shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-heroicon-s-wifi class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">WiFi Access</h4>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/60 rounded-xl shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-fas-heart-circle-plus class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">First Aid</h4>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex items-center gap-4 bg-white rounded-xl dark:bg-gray-800/60 shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-hugeicons-database-locked class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">Lockers</h4>
                </div>

                <!-- Card 4 -->
                <div
                    class="flex items-center gap-4 bg-white rounded-xl dark:bg-gray-800/60 shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-heroicon-o-heart class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">Cardio Area</h4>
                </div>

                <!-- Card 5 -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/60 rounded-xl shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-heroicon-o-plus-circle
                        class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">Expert Coaching</h4>
                </div>

                <!-- Card 6 -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/60 rounded-xl shadow-md hover:shadow-lg transition py-6 px-10">
                    <x-mdi-car-brake-parking class="w-8 h-8 text-red-500"/>
                    <h4 class="font-semibold text-gray-800 dark:text-white">Vehicle Parking</h4>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
