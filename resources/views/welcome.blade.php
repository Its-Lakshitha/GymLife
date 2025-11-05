<x-app-layout>

    <!-- Hero Section -->
    <section class="relative w-full h-screen overflow-hidden">
        <!-- Slider main container -->
        <div class="swiper hero-slider w-full h-full">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center"
                         style="background-image: url('{{ asset('img/hero/hero-1.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/40"></div> <!-- Dark overlay -->

                    <div class="container mx-auto px-4 h-full flex items-center justify-end">
                        <div class="hi-text text-right text-white max-w-lg">
                            <span
                                class="block text-lg uppercase tracking-widest text-red-400 mb-3">Shape your body</span>
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                                Be <strong class="text-red-500">strong</strong> training hard
                            </h1>
                            <a href="#"
                               class="inline-block mt-6 bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-8 rounded-full transition primary-btn">
                                Get Info
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center"
                         style="background-image: url('{{ asset('img/hero/hero-2.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="container mx-auto h-full flex items-center justify-end px-6">
                        <div class="hi-text text-right text-white max-w-lg">
                            <span
                                class="block text-lg uppercase tracking-widest text-red-400 mb-3">Shape your body</span>
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                                Be <strong class="text-red-500">strong</strong> training hard
                            </h1>
                            <a href="#"
                               class="inline-block mt-6 bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-8 rounded-full transition primary-btn">
                                Get Info
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>

            <!-- Pagination (dots) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container mx-auto px-4 py-20">
        <div class="">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-[#f36100] uppercase tracking-widest font-semibold text-sm">Why Choose Us?</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900">Push Your Limits Forward</h2>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Item 1 -->
                <div
                    class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl hover:shadow-[#f36100]/20 transition">
                    <div class="w-full flex justify-center">
                        <x-hugeicons-treadmill-02
                            class="w-20 h-20 bg-gray-300 rounded-full p-4 text-[#f36100] text-5xl mb-4"/>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800">Modern Equipment</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.
                    </p>
                </div>

                <!-- Item 2 -->
                <div
                    class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl hover:shadow-[#f36100]/20 transition">
                    <div class="w-full flex justify-center">
                        <x-hugeicons-spoon-and-knife
                            class="w-20 h-20 bg-gray-300 rounded-full p-4 text-[#f36100] text-5xl mb-4"/>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800">Healthy Nutrition Plan</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.
                    </p>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl hover:shadow-[#f36100]/20 transition">
                    <div class="w-full flex justify-center">
                        <x-hugeicons-dumbbell-02
                            class="w-20 h-20 bg-gray-300 rounded-full p-4 text-[#f36100] text-5xl mb-4"/>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800">Professional Training Plan</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.
                    </p>
                </div>

                <!-- Item 4 -->
                <div
                    class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl hover:shadow-[#f36100]/20 transition">
                    <div class="w-full flex justify-center">
                        <x-fas-heart-pulse
                            class="w-20 h-20 bg-gray-300 rounded-full p-4 text-[#f36100] text-5xl mb-4"/>
                    </div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-800">Unique to Your Needs</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Classes Section -->
    <section class="container mx-auto px-4 py-20 ">
        <div class="container mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-[#f36100] uppercase tracking-widest font-semibold text-sm">Our Classes</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900">What We Can Offer</h2>
            </div>

            <!-- Classes Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Class Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('img/classes/class-1.jpg') }}" alt="Weightlifting"
                         class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="block text-sm uppercase tracking-wide text-red-400">Strength</span>
                        <h5 class="text-xl font-semibold">Weightlifting</h5>
                        <a href="#" class="inline-block mt-3 text-red-400 hover:text-[#f36100] transition">
                            <i class="fa fa-angle-right text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Class Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('img/classes/class-2.jpg') }}" alt="Indoor Cycling"
                         class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="block text-sm uppercase tracking-wide text-red-400">Cardio</span>
                        <h5 class="text-xl font-semibold">Indoor Cycling</h5>
                        <a href="#" class="inline-block mt-3 text-red-400 hover:text-[#f36100] transition">
                            <i class="fa fa-angle-right text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Class Item 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('img/classes/class-3.jpg') }}" alt="Kettlebell Power"
                         class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="block text-sm uppercase tracking-wide text-red-400">Strength</span>
                        <h5 class="text-xl font-semibold">Kettlebell Power</h5>
                        <a href="#" class="inline-block mt-3 text-red-400 hover:text-[#f36100] transition">
                            <i class="fa fa-angle-right text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Class Item 4 -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-lg sm:col-span-2 lg:col-span-1 lg:col-start-1">
                    <img src="{{ asset('img/classes/class-4.jpg') }}" alt="Indoor Cycling"
                         class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="block text-sm uppercase tracking-wide text-red-400">Cardio</span>
                        <h4 class="text-2xl font-semibold">Indoor Cycling</h4>
                        <a href="#" class="inline-block mt-3 text-red-400 hover:text-[#f36100] transition">
                            <i class="fa fa-angle-right text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Class Item 5 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg sm:col-span-2 lg:col-span-2">
                    <img src="{{ asset('img/classes/class-5.jpg') }}" alt="Boxing"
                         class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="block text-sm uppercase tracking-wide text-red-400">Training</span>
                        <h4 class="text-2xl font-semibold">Boxing</h4>
                        <a href="#" class="inline-block mt-3 text-red-400 hover:text-[#f36100] transition">
                            <i class="fa fa-angle-right text-xl"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner --->
    <section
        class="relative bg-cover bg-center bg-no-repeat py-20"
        style="background-image: url('{{ asset('img/banner-bg.jpg') }}');"
    >
        <div class="container mx-auto px-4 z-10">
            <div class="text-center">
                <div class="bs-text max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-bold uppercase text-white mb-4">
                        Registration now to get more deals
                    </h2>
                    <div class="text-lg text-gray-200 mb-8">
                        Where health, beauty and fitness meet.
                    </div>
                    <a
                        href="#"
                        class="primary-btn-outline !text-white transition-all duration-300 hover:bg-[#f36100] hover:border-[#f36100]"
                    >
                        Appointment
                    </a>
                </div>
            </div>
        </div>
        {{--        <!-- Optional overlay for better contrast -->--}}
        {{--        <div class="absolute inset-0 bg-black/50"></div>--}}
    </section>

    <!--- Planning packages -->
    <section class="container mx-auto px-4 py-20">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-[#f36100] uppercase tracking-widest font-semibold">Our Plan</span>
                <h2 class="text-4xl font-bold text-gray-800 mt-2">Choose your pricing plan</h2>
            </div>

            <!-- Pricing Cards -->
            <div class="flex flex-wrap lg:flex-nowrap justify-center gap-5">

                <!-- Card 1 -->
                <x-package-card/>
                <x-package-card/>
                <x-package-card/>
            </div>
        </div>
    </section>

    <!-- Gallery --->
    <section class="gallery-section">
        <div class="gallery">
            <div>

                <div class="grid-sizer"></div>
                <!-- Image 1 (Wide) -->
                <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                    <a href="{{ asset('img/gallery/gallery-1.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>

                <!-- Image 2 -->
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                    <a href="{{ asset('img/gallery/gallery-2.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>

                <!-- Image 3 -->
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                    <a href="{{ asset('img/gallery/gallery-3.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>

                <!-- Image 4 -->
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                    <a href="{{ asset('img/gallery/gallery-4.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>

                <!-- Image 5 -->
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                    <a href="{{ asset('img/gallery/gallery-5.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>

                <!-- Image 6 (Wide) -->
                <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                    <a href="{{ asset('img/gallery/gallery-6.jpg') }}"
                       class="">
                        <i class="fa fa-picture-o text-white text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--- Coaches --->
    <section class="container mx-auto px-4 py-16">
        <div class="">
            <!-- Section Header -->
            <div
                class="flex flex-col md:flex-row items-center justify-between mb-10"
            >
                <div class="text-center md:text-left mb-6 md:mb-0">
        <span
            class="text-[#f36100] font-semibold uppercase tracking-wide">Our Team</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                        Train With Experts
                    </h2>
                </div>
                <a
                    href="#"
                    class="primary-btn-outline bg-transparent border-[#f36100] transition-all duration-300 hover:bg-[#f36100]"
                >
                    Appointment
                </a>
            </div>

            <!-- Slider Container -->
            <div class="team-slider-slick">
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-1.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-2.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-3.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-4.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-5.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-md group mx-2">
                        <img src="{{ asset('img/team/team-6.jpg') }}" alt=""
                             class="w-full h-80 object-cover"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-4">
                            <h4 class="text-lg font-semibold">Athart Rachel</h4>
                            <span class="text-sm text-gray-300">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <!-- add more slides -->
            </div>
        </div>
    </section>

    <section class="gettouch-section text-white py-12">
        <div
            class="container max-w-6xl mx-auto px-6 flex flex-col sm:flex-row sm:flex-wrap lg:justify-evenly gap-8 text-center md:text-left">

            <!-- Address -->
            <div class="flex flex-col justify-center sm:flex-row items-center sm:items-start space-y-4 gt-text">
                <x-heroicon-s-map-pin/>
                <p class="text-gray-300">
                    333 Middle Winchendon Rd, Rindge,<br/> NH 03461
                </p>
            </div>

            <!-- Phone Numbers -->
            <div class="flex flex-col justify-center sm:flex-row items-center sm:items-start space-y-4 gt-text">
                <x-hugeicons-smart-phone-01/>
                <ul class="flex space-x-2">
                    <li class="text-gray-300">125-711-811</li>
                    <li class="text-gray-300">
                        125-668-886
                    </li>
                </ul>
            </div>

            <!-- Email -->
            <div
                class="flex flex-col justify-center sm:flex-row items-center sm:items-start space-y-4 gt-text email">
                <x-heroicon-s-envelope/>
                <p class="text-gray-300">Support.gymcenter@gmail.com</p>
            </div>

        </div>
    </section>


</x-app-layout>
