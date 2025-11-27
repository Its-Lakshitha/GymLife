<x-app-layout>

    <!-- Breadcrumb Section -->
    <section
        class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
        style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')"
    >

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">Services</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span> Services</span>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-lg text-red-600 font-semibold uppercase tracking-wider">What we do?</span>
                <h2 class="text-4xl font-bold mt-2 text-gray-900 dark:text-white">Push Your Limits Forward</h2>
            </div>

            <!-- Service Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 grid-auto-center">
                <x-service-card/>
                <x-service-card/>
                <x-service-card/>
                <x-service-card/>
            </div>
        </div>
    </section>

    <section
        class="relative bg-cover bg-center bg-no-repeat py-40 text-white fade-in-section"
        style="background-image: url('{{asset('img/banner-bg.jpg')}}');">

        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center uppercase">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                Exercise until the body obeys.
            </h2>
            <p class="text-lg text-gray-200 mb-10">
                Where health, beauty and fitness meet.
            </p>
            <a
                href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                class="inline-flex items-center justify-center transition"
                target="_blank"
            >
                <x-heroicon-o-play
                    class="w-20 h-20 text-white text-5xl bg-red-500 rounded-full p-4 hover:scale-110 transition-transform"/>
            </a>
        </div>
    </section>

    <!-- NEW: Meal Plans Section -->
    <section class="container mx-auto px-4 py-16 fade-in-section">
        <div class="text-center mb-8">
            <span class="text-lg text-red-600 font-semibold uppercase tracking-wider">Nutrition</span>
            <h3 class="text-4xl font-bold mt-2 text-gray-900 dark:text-white">Meal Plans to Fuel Your Progress</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-200">
                            <x-bi-fork-knife class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Starter Plan</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">From $19</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">3 meals/day, balanced macros, easy shopping
                    list for beginners.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Balanced macros
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Weekly grocery list
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Choose
                    Plan</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-200">
                            <x-bi-circle class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Performance Plan</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">From $39</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Higher calories and targeted macros for
                    performance and recovery.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Macro-focused meals
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Post-workout recipes
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Choose
                    Plan</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-200">
                            <x-bi-heart-fill class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Custom Plan</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">Custom</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Tailored meals based on allergies, preferences
                    and goals.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Allergy-aware
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Weekly check-ins
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Request
                    Quote</a>
            </div>
        </div>
    </section>

    <!-- NEW: Workout Plans Section -->
    <section class="container mx-auto px-4 py-16 fade-in-section">
        <div class="text-center mb-8">
            <span class="text-lg text-red-600 font-semibold uppercase tracking-wider">Training</span>
            <h3 class="text-4xl font-bold mt-2 text-gray-900 dark:text-white">Workout Plans for Every Goal</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Workout Card A -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-200">
                            <x-hugeicons-dumbbell-02 class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Beginner</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">4 weeks</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Foundation-building workouts with focus on form
                    and mobility.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        3 sessions/week
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Video demos
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Start
                    Now</a>
            </div>

            <!-- Workout Card B -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-200">
                            <x-bi-lightning class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Intermediate</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">8 weeks</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Progressive overload programs to build strength
                    and size.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Strength-focused
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Periodized plan
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Start
                    Now</a>
            </div>

            <!-- Workout Card C -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition p-6 flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-lg bg-teal-100 dark:bg-teal-900 text-teal-600 dark:text-teal-200">
                            <x-bi-stopwatch class="w-6 h-6"/>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Advanced</h4>
                    </div>
                    <div class="text-sm font-bold text-gray-900 dark:text-white">12+ weeks</div>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">High-intensity and sport-specific programs for
                    seasoned athletes.</p>

                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        High intensity
                    </li>
                    <li class="flex items-center gap-2">
                        <x-bi-check class="w-4 h-4 text-red-600 dark:text-red-300"/>
                        Performance testing
                    </li>
                </ul>

                <a href="#"
                   class="mt-auto inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition">Start
                    Now</a>
            </div>
        </div>
    </section>

</x-app-layout>
