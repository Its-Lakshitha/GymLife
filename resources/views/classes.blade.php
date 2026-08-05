<x-app-layout>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
             style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">Our Classes</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span>Classes</span>
            </div>
        </div>
    </section>

    <!-- Classes Section -->
    <section class="py-20 px-4 fade-in-section">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">Our Classes</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-white">WHAT WE CAN OFFER</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Class Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <div class="h-80 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/classes/class-1.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-90"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-red-500 font-bold uppercase text-sm mb-2 block">Strength</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Weight Lifting</h4>
                        <div
                            class="flex items-center justify-between text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-user class="w-5 h-5 text-red-500"/>
                                <span>John Doe</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-clock class="w-5 h-5 text-red-500"/>
                                <span>1 Hr</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <div class="h-80 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/classes/class-2.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-90"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-red-500 font-bold uppercase text-sm mb-2 block">Cardio</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Indoor Cycling</h4>
                        <div
                            class="flex items-center justify-between text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-user class="w-5 h-5 text-red-500"/>
                                <span>Jane Smith</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-clock class="w-5 h-5 text-red-500"/>
                                <span>45 Min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Item 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <div class="h-80 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/classes/class-3.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-90"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-red-500 font-bold uppercase text-sm mb-2 block">Yoga</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Mind & Body</h4>
                        <div
                            class="flex items-center justify-between text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-user class="w-5 h-5 text-red-500"/>
                                <span>Sarah Lee</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-clock class="w-5 h-5 text-red-500"/>
                                <span>90 Min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Item 4 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <div class="h-80 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/classes/class-4.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-90"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-red-500 font-bold uppercase text-sm mb-2 block">Fitness</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Core Strength</h4>
                        <div
                            class="flex items-center justify-between text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-user class="w-5 h-5 text-red-500"/>
                                <span>Mike Ross</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-clock class="w-5 h-5 text-red-500"/>
                                <span>60 Min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Item 5 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <div class="h-80 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                         style="background-image: url('{{ asset('img/classes/class-5.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-90"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-red-500 font-bold uppercase text-sm mb-2 block">Advanced</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Body Building</h4>
                        <div
                            class="flex items-center justify-between text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-user class="w-5 h-5 text-red-500"/>
                                <span>Alex Turner</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-heroicon-o-clock class="w-5 h-5 text-red-500"/>
                                <span>120 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Class Timetable Section -->
    <section class="timetable-section py-20 fade-in-section">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">Class Timetable</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-white">Working Hours</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-center border-collapse">
                    <thead>
                    <tr class="bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-200">
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Time</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Monday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Tuesday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Wednesday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Thursday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Friday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Saturday</th>
                        <th class="p-4 border border-gray-300 dark:border-gray-700">Sunday</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 dark:text-gray-400">
                    <tr>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 font-semibold">6.00am - 8.00am</td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Cardio</span>
                            <span class="text-xs">John Doe</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Crossfit</span>
                            <span class="text-xs">Adam Smith</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Power Lifting</span>
                            <span class="text-xs">James Bond</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Cardio</span>
                            <span class="text-xs">John Doe</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 font-semibold">10.00am - 12.00pm</td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Yoga</span>
                            <span class="text-xs">Sarah Lee</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Boxing</span>
                            <span class="text-xs">Mike Tyson</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Yoga</span>
                            <span class="text-xs">Sarah Lee</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                    </tr>
                    <tr>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 font-semibold">5.00pm - 7.00pm</td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Body Building</span>
                            <span class="text-xs">Arnold</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Karate</span>
                            <span class="text-xs">Bruce Lee</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Body Building</span>
                            <span class="text-xs">Arnold</span>
                        </td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700"></td>
                        <td class="p-4 border border-gray-300 dark:border-gray-700 hover:bg-red-500 hover:text-white transition cursor-pointer">
                            <span class="font-bold block">Karate</span>
                            <span class="text-xs">Bruce Lee</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section relative bg-cover bg-center py-24 fade-in-section"
             style="background-image: url('{{ asset('img/banner-bg.jpg') }}')">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 container mx-auto px-4 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Registration Now To Get More Deals</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Where health, beauty and fitness meet. Join us now to get
                special offers and start your journey.</p>
            <a href="#"
               class="primary-btn-outline !text-white transition-all duration-300 hover:bg-red-500 hover:border-red-500">
                JOIN WITH US
            </a>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const day = new Date().getDay(); // 0 (Sun) - 6 (Sat)
            // Map JS day to table column index (1-based, skipping Time column)
            // Mon(1)->1, Tue(2)->2, ..., Sat(6)->6, Sun(0)->7
            const colIndex = day === 0 ? 7 : day;

            // Highlight header
            const headers = document.querySelectorAll('.timetable-section th');
            if (headers[colIndex]) {
                headers[colIndex].classList.add('bg-red-500', 'text-white');
                headers[colIndex].classList.remove('border-gray-300', 'dark:border-gray-700');
            }

            // Highlight cells
            const rows = document.querySelectorAll('.timetable-section tbody tr');
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                if (cells[colIndex]) {
                    cells[colIndex].classList.add('bg-red-50', 'dark:bg-red-900/20');
                }
            });
        });
    </script>

</x-app-layout>
