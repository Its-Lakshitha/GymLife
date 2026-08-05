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

    <section class="container mx-auto px-4 py-16 fade-in-section">
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

    <!-- NEW: Personalized Plan Form -->
    <section class="container mx-auto px-4 py-16 bg-gray-50 dark:bg-gray-900 fade-in-section">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <span class="text-lg text-red-600 font-semibold uppercase tracking-wider">Customized For You</span>
                <h3 class="text-4xl font-bold mt-2 text-gray-900 dark:text-white">Get Your Personalized Plan & Guide to Dream Physique</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4">Fill out the form below to receive a tailored workout and meal plan designed just for you.</p>
            </div>

            <div id="form-success-message" class="hidden mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">Your plan request has been submitted. We will contact you shortly.</span>
            </div>

            <form id="plan-form" class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Full Name</label>
                        <input type="text" id="name" placeholder="John Doe" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="age" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Age</label>
                        <input type="number" id="age" placeholder="25" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="gender" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Gender</label>
                        <select id="gender" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="current_weight" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Current Weight (kg)</label>
                        <input type="number" id="current_weight" placeholder="70" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="target_weight" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Target Weight (kg)</label>
                        <input type="number" id="target_weight" placeholder="65" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="goal" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Primary Goal</label>
                        <select id="goal" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            <option value="weight_loss">Weight Loss</option>
                            <option value="muscle_gain">Muscle Gain</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="endurance">Endurance</option>
                        </select>
                    </div>
                    <div>
                        <label for="plan_type" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Plan Type</label>
                        <select id="plan_type" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            <option value="workout">Workout Plan</option>
                            <option value="meal">Meal Plan</option>
                            <option value="both">Both (Workout & Meal Plan)</option>
                        </select>
                    </div>
                    <div>
                        <label for="activity_level" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Activity Level</label>
                        <select id="activity_level" class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            <option value="sedentary">Sedentary (Little or no exercise)</option>
                            <option value="light">Lightly Active (1-3 days/week)</option>
                            <option value="moderate">Moderately Active (3-5 days/week)</option>
                            <option value="active">Very Active (6-7 days/week)</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-4 rounded-lg transition-transform hover:scale-105">
                    GET MY PLAN
                </button>
            </form>
        </div>
    </section>

    <!-- Disclaimer Section -->
    <section class="container mx-auto px-4 py-8">
        <div class="bg-yellow-50 dark:bg-yellow-900/20 border-l-4 border-yellow-400 p-4 rounded-r-lg">
            <div class="flex">
                <div class="flex-shrink-0">
                    <x-heroicon-s-exclamation-triangle class="h-5 w-5 text-yellow-400" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-yellow-700 dark:text-yellow-200">
                        <strong>Disclaimer:</strong> The workout and meal plans provided are for informational purposes only and are not intended as a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition or before starting any new diet or exercise program.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Option -->
    <section class="container mx-auto px-4 py-12 text-center fade-in-section">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Have Questions?</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-6">Not sure which plan is right for you? Our experts are here to help.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-red-500 font-bold hover:text-red-600 transition">
            <x-heroicon-o-chat-bubble-left-right class="w-5 h-5"/>
            Contact Us
        </a>
    </section>

    <script>
        document.getElementById('plan-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate form submission
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerText;
            button.disabled = true;
            button.innerText = 'Sending...';

            setTimeout(() => {
                document.getElementById('form-success-message').classList.remove('hidden');
                this.reset();
                button.disabled = false;
                button.innerText = originalText;

                // Scroll to message
                document.getElementById('form-success-message').scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 1500);
        });
    </script>

</x-app-layout>
