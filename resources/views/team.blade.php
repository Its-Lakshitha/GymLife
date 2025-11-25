<x-app-layout>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
             style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">Our Team</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span>Our Team</span>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-20 px-4 fade-in-section">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">Our Team</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-white">TRAIN WITH EXPERTS</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-1.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">Athart Rachel</h4>
                        <span class="text-red-500 font-medium">Gym Trainer</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-2.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">Sarah Lee</h4>
                        <span class="text-red-500 font-medium">Yoga Instructor</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-3.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">John Doe</h4>
                        <span class="text-red-500 font-medium">Body Builder</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-4.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">Mike Ross</h4>
                        <span class="text-red-500 font-medium">Cardio Expert</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-5.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">Alex Turner</h4>
                        <span class="text-red-500 font-medium">Fitness Coach</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="h-96 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/team/team-6.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-white">Emily Blunt</h4>
                        <span class="text-red-500 font-medium">Nutritionist</span>
                        <div class="flex gap-4 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-red-500"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
