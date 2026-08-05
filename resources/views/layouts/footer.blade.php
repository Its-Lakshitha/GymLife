<footer class="bg-black text-gray-300 py-16">
    <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

        <!-- About -->
        <div>
            <a href="#" class="inline-block mb-6">
                <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" class="h-12">
            </a>
            <p class="text-gray-400 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                dolore magna aliqua endisse ultrices gravida lorem.
            </p>
            <div class="flex items-center gap-4 mt-6">
                <a href="#" class="hover:text-red-500">
                    <x-fab-facebook-f class="w-5 h-5"/>
                </a>
                <a href="#" class="hover:text-red-500">
                    <x-fab-twitter class="w-5 h-5"/>
                </a>
                <a href="#" class="hover:text-red-500">
                    <x-fab-youtube class="w-5 h-5"/>
                </a>
                <a href="#" class="hover:text-red-500">
                    <x-fab-instagram class="w-5 h-5"/>
                </a>
                <a href="#" class="hover:text-red-500">
                    <x-heroicon-o-envelope class="w-5 h-5"/>
                </a>
            </div>
        </div>

        <!-- Useful Links -->
        <div>
            <h4 class="text-white font-semibold text-lg mb-6">Useful Links</h4>
            <ul class="space-y-3">
                <li><a href="#" class="hover:text-white transition">About</a></li>
                <li><a href="#" class="hover:text-white transition">Blog</a></li>
                <li><a href="#" class="hover:text-white transition">Classes</a></li>
                <li><a href="#" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <!-- Support -->
        <div>
            <h4 class="text-white font-semibold text-lg mb-6">Support</h4>
            <ul class="space-y-3">
                <li><a href="#" class="hover:text-white transition">Login</a></li>
                <li><a href="#" class="hover:text-white transition">My Account</a></li>
                <li><a href="#" class="hover:text-white transition">Subscribe</a></li>
                <li><a href="#" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <!-- Tips & Guides -->
        <div>
            <h4 class="text-white font-semibold text-lg mb-6">Tips & Guides</h4>

            <div class="mb-6">
                <h6 class="text-gray-200 font-medium leading-snug">
                    <a href="#" class="hover:text-red-500 transition">Physical fitness may help prevent depression,
                        anxiety</a>
                </h6>
                <ul class="flex gap-4 text-sm text-gray-500 mt-2">
                    <li>3 min read</li>
                    <li>20 Comments</li>
                </ul>
            </div>

            <div>
                <h6 class="text-gray-200 font-medium leading-snug">
                    <a href="#" class="hover:text-red-500 transition">Fitness: The best exercise to lose belly fat and
                        tone up...</a>
                </h6>
                <ul class="flex gap-4 text-sm text-gray-500 mt-2">
                    <li>3 min read</li>
                    <li>20 Comments</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-700 mt-12 pt-8 text-center text-sm text-gray-500">
        <p>
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            All rights reserved | Made with
            <i class="fa fa-heart text-red-500"></i> by
            <a href="https://colorlib.com" target="_blank" class="text-red-500 hover:underline">Its Lakshitha</a>
        </p>
    </div>
</footer>
