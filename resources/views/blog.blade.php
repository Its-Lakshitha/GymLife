<x-app-layout>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
             style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">Our Blog</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span>Blog</span>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section py-20 px-4 bg-gray-50 dark:bg-gray-900 fade-in-section">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Blog Posts -->
                <div class="w-full lg:w-2/3">
                    <div id="blog-posts" class="space-y-12">
                        <!-- Post 1 -->
                        <div class="blog-post bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden" data-tags="fitness,gym">
                            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ asset('img/classes/class-1.jpg') }}');"></div>
                            <div class="p-8">
                                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <span class="flex items-center gap-1"><x-heroicon-o-calendar class="w-4 h-4"/> May 4, 2024</span>
                                    <span class="flex items-center gap-1"><x-heroicon-o-chat-bubble-left class="w-4 h-4"/> 3 Comments</span>
                                    <span class="text-red-500 font-medium">#Fitness #Gym</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 hover:text-red-500 transition cursor-pointer">
                                    The Secrets to Building Muscle Effectively
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="#" class="inline-block text-red-500 font-bold hover:tracking-wide transition-all">READ MORE ></a>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="blog-post bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden" data-tags="yoga,health">
                            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ asset('img/classes/class-3.jpg') }}');"></div>
                            <div class="p-8">
                                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <span class="flex items-center gap-1"><x-heroicon-o-calendar class="w-4 h-4"/> May 10, 2024</span>
                                    <span class="flex items-center gap-1"><x-heroicon-o-chat-bubble-left class="w-4 h-4"/> 5 Comments</span>
                                    <span class="text-red-500 font-medium">#Yoga #Health</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 hover:text-red-500 transition cursor-pointer">
                                    Benefits of Yoga for Mental Health
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                    Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <a href="#" class="inline-block text-red-500 font-bold hover:tracking-wide transition-all">READ MORE ></a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="blog-post bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden" data-tags="nutrition,diet">
                            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ asset('img/classes/class-2.jpg') }}');"></div>
                            <div class="p-8">
                                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <span class="flex items-center gap-1"><x-heroicon-o-calendar class="w-4 h-4"/> May 15, 2024</span>
                                    <span class="flex items-center gap-1"><x-heroicon-o-chat-bubble-left class="w-4 h-4"/> 2 Comments</span>
                                    <span class="text-red-500 font-medium">#Nutrition #Diet</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 hover:text-red-500 transition cursor-pointer">
                                    Top 10 Foods for a Healthy Diet
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                <a href="#" class="inline-block text-red-500 font-bold hover:tracking-wide transition-all">READ MORE ></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 space-y-8">
                    <!-- Search -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <form action="#" class="relative">
                            <input type="text" placeholder="Search..." class="w-full bg-gray-100 dark:bg-gray-700 border-none rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500">
                            <button type="button" class="absolute right-3 top-3 text-gray-500 hover:text-red-500">
                                <x-hugeicons-search-01 class="w-5 h-5"/>
                            </button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-2">Categories</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-red-500 transition flex justify-between"><span>Fitness</span> <span>(12)</span></a></li>
                            <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-red-500 transition flex justify-between"><span>Yoga</span> <span>(5)</span></a></li>
                            <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-red-500 transition flex justify-between"><span>Nutrition</span> <span>(8)</span></a></li>
                            <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-red-500 transition flex justify-between"><span>Gym</span> <span>(10)</span></a></li>
                        </ul>
                    </div>

                    <!-- Tags -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-2">Tags</h4>
                        <div class="flex flex-wrap gap-2" id="tag-cloud">
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="all">All</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="fitness">Fitness</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="yoga">Yoga</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="nutrition">Nutrition</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="gym">Gym</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="health">Health</button>
                            <button class="tag-btn bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition" data-tag="diet">Diet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tagBtns = document.querySelectorAll('.tag-btn');
            const posts = document.querySelectorAll('.blog-post');

            tagBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const tag = this.getAttribute('data-tag');

                    // Active state
                    tagBtns.forEach(b => b.classList.remove('bg-red-500', 'text-white'));
                    tagBtns.forEach(b => b.classList.add('bg-gray-100', 'dark:bg-gray-700', 'text-gray-600', 'dark:text-gray-300'));
                    this.classList.remove('bg-gray-100', 'dark:bg-gray-700', 'text-gray-600', 'dark:text-gray-300');
                    this.classList.add('bg-red-500', 'text-white');

                    // Filter posts
                    posts.forEach(post => {
                        const postTags = post.getAttribute('data-tags').split(',');
                        if (tag === 'all' || postTags.includes(tag)) {
                            post.style.display = 'block';
                        } else {
                            post.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

</x-app-layout>
