<x-app-layout>

    <!-- Breadcrumb Section -->
    <section
        class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
        style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')"
    >

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-3">Contact Us</h2>
            <div class="flex justify-center items-center space-x-2 text-gray-300 text-sm bt-option">
                <a href="{{route('welcome')}}" class="hover:text-white transition me-0">Home ></a>
                <a href="#" class="hover:text-white">Pages ></a>
                <span class="font-semibold">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 fade-in-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- Left -->
                <div>
                    <div class="mb-6">
                        <span class="text-red-500 uppercase tracking-wide font-semibold">Contact Us</span>
                        <h2 class="text-4xl font-bold mt-2 text-gray-900 dark:text-white">GET IN TOUCH</h2>
                    </div>

                    <div class="space-y-6">

                        <!-- Address -->
                        <div
                            class="flex items-center space-x-4">
                            <div
                                class="inline-block font-[30px] text-[#ef4444] h-[65px] w-[65px] p-[15px] bg-gray-300 dark:bg-gray-600 rounded-full lh-[65px] text-center float-left mr-5">
                                <x-heroicon-s-map-pin/>
                            </div>
                            <p class="text-gray-700 dark:text-white mb-0">
                                333 Middle Winchendon Rd, Rindge,<br> NH 03461
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center space-x-4">
                            <div
                                class="inline-block font-[30px] text-[#ef4444] h-[65px] w-[65px] p-[15px] bg-gray-300 dark:bg-gray-600 rounded-full lh-[65px] text-center float-left mr-5">
                                <x-heroicon-s-phone/>
                            </div>
                            <ul class="flex items-center text-gray-700 dark:text-white text-sm space-x-6">
                                <li class="relative after:content-['|'] after:absolute after:-right-4 after:text-gray-500 last:after:hidden">
                                    125-711-811
                                </li>

                                <li class="relative after:content-['|'] after:absolute after:-right-4 after:text-gray-500 last:after:hidden">
                                    125-668-886
                                </li>
                            </ul>

                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-4">
                            <div
                                class="inline-block font-[30px] text-[#ef4444] h-[65px] w-[65px] p-[15px] bg-gray-300 dark:bg-gray-600 rounded-full lh-[65px] text-center float-left mr-5">
                                <x-heroicon-s-envelope/>
                            </div>
                            <p class="text-gray-700 dark:text-white mb-0">Support.gymcenter@gmail.com</p>
                        </div>

                    </div>
                </div>

                <!-- Right Form -->
                <div>
                    <div id="contact-success-message" class="hidden mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Message Sent!</strong>
                        <span class="block sm:inline">Thank you for contacting us. We will get back to you soon.</span>
                    </div>
                    <form id="contact-form" action="#" method="post" class="space-y-4 p-6">
                        <input
                            type="text"
                            name="name"
                            placeholder="Name"
                            class="w-full border bg-transparent border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                        >
                        <input
                            type="text"
                            name="email"
                            placeholder="Email"
                            class="w-full border bg-transparent border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                        >
                        <input
                            type="text"
                            name="topic"
                            placeholder="Topic"
                            class="w-full border bg-transparent border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                        >
                        <textarea
                            placeholder="Message"
                            rows="5"
                            class="w-full border bg-transparent border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                        ></textarea>

                        <button
                            type="submit"
                            class="px-6 py-3 w-full bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition"
                        >
                            Submit
                        </button>
                    </form>
                </div>

            </div>

            <!-- Map -->
            <div class="mt-16 w-full h-[550px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                    class="w-full h-full rounded-xl shadow"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </section>


</x-app-layout>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Simulate form submission
        const button = this.querySelector('button[type="submit"]');
        const originalText = button.innerText;
        button.disabled = true;
        button.innerText = 'Sending...';

        setTimeout(() => {
            document.getElementById('contact-success-message').classList.remove('hidden');
            this.reset();
            button.disabled = false;
            button.innerText = originalText;
        }, 1500);
    });
</script>
