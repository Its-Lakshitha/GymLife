<x-app-layout>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
             style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">BMI Calculator</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span>BMI Calculator</span>
            </div>
        </div>
    </section>

    <!-- BMI Calculator Section -->
    <section class="py-20 px-4 fade-in-section">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <!-- Calculator Form -->
                <div class="w-full lg:w-1/2">
                    <div class="text-left mb-8">
                        <span class="text-red-500 uppercase tracking-widest font-semibold text-sm">BMI Calculator</span>
                        <h2 class="text-3xl md:text-4xl font-bold mt-3 text-gray-900 dark:text-white">Calculate Your
                            Body Mass Index</h2>
                        <p class="text-gray-600 dark:text-gray-300 mt-4 leading-relaxed">
                            The Body Mass Index (BMI) calculator calculates body mass index from your weight and height.
                        </p>
                    </div>

                    <form id="bmi-form" class="bg-white dark:bg-gray-800/60 p-8 rounded-2xl shadow-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="height" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Height
                                    / cm</label>
                                <input type="number" id="height" placeholder="Height" required
                                       class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            </div>
                            <div>
                                <label for="weight" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Weight
                                    / kg</label>
                                <input type="number" id="weight" placeholder="Weight" required
                                       class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            </div>
                            <div>
                                <label for="age"
                                       class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Age</label>
                                <input type="number" id="age" placeholder="Age"
                                       class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            </div>
                            <div>
                                <label for="sex"
                                       class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Sex</label>
                                <select id="sex"
                                        class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                                class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-4 rounded-lg transition-transform hover:scale-105">
                            Calculate
                        </button>
                    </form>
                </div>

                <!-- Result Chart -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-900 text-white p-8 rounded-2xl shadow-lg relative overflow-hidden">
                        <h3 class="text-2xl font-bold mb-6">BMI Chart</h3>
                        <table class="w-full text-left border-collapse">
                            <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-3">BMI</th>
                                <th class="py-3">WEIGHT STATUS</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-300">
                            <tr class="border-b border-gray-700" id="row-underweight">
                                <td class="py-3">Below 18.5</td>
                                <td class="py-3">Underweight</td>
                            </tr>
                            <tr class="border-b border-gray-700" id="row-healthy">
                                <td class="py-3">18.5 - 24.9</td>
                                <td class="py-3">Healthy</td>
                            </tr>
                            <tr class="border-b border-gray-700" id="row-overweight">
                                <td class="py-3">25.0 - 29.9</td>
                                <td class="py-3">Overweight</td>
                            </tr>
                            <tr id="row-obese">
                                <td class="py-3">30.0 and Above</td>
                                <td class="py-3">Obese</td>
                            </tr>
                            </tbody>
                        </table>

                        <div id="result-display" class="mt-8 hidden">
                            <p class="text-lg">Your BMI is: <span id="bmi-value"
                                                                  class="font-bold text-red-500 text-2xl"></span></p>
                            <p class="text-lg mt-2">Status: <span id="bmi-status" class="font-bold text-white"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('bmi-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const height = parseFloat(document.getElementById('height').value);
            const weight = parseFloat(document.getElementById('weight').value);

            if (height > 0 && weight > 0) {
                const bmi = (weight / ((height / 100) * (height / 100))).toFixed(1);
                const resultDisplay = document.getElementById('result-display');
                const bmiValue = document.getElementById('bmi-value');
                const bmiStatus = document.getElementById('bmi-status');

                // Reset highlights
                ['row-underweight', 'row-healthy', 'row-overweight', 'row-obese'].forEach(id => {
                    document.getElementById(id).classList.remove('bg-red-500/20', 'text-red-500');
                });

                let status = '';
                let rowId = '';

                if (bmi < 18.5) {
                    status = 'Underweight';
                    rowId = 'row-underweight';
                } else if (bmi >= 18.5 && bmi <= 24.9) {
                    status = 'Healthy';
                    rowId = 'row-healthy';
                } else if (bmi >= 25.0 && bmi <= 29.9) {
                    status = 'Overweight';
                    rowId = 'row-overweight';
                } else {
                    status = 'Obese';
                    rowId = 'row-obese';
                }

                bmiValue.textContent = bmi;
                bmiStatus.textContent = status;
                resultDisplay.classList.remove('hidden');

                // Highlight row
                const row = document.getElementById(rowId);
                row.classList.add('bg-red-500/20', 'text-red-500');
            }
        });
    </script>

</x-app-layout>
