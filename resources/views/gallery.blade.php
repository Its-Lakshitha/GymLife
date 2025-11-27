<x-app-layout>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section relative bg-cover bg-center bg-no-repeat py-24"
             style="background-image: url('{{ asset('img/breadcrumb-bg.jpg') }}')">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center text-white breadcrumb-text">
            <h2 class="text-4xl font-bold mb-4">Gallery</h2>
            <div class="flex justify-center items-center gap-2 text-gray-300 text-sm bt-option">
                <a href="{{ route('welcome') }}" class="hover:text-white transition me-0">Home ></a>
                <span>Gallery</span>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 px-4 fade-in-section">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-1.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-2.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-3.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-4.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-5.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-6.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-7.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-8.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>

                <!-- Gallery Item 9 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-64 md:h-80">
                    <div
                        class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3"
                        style="background-image: url('{{ asset('img/gallery/gallery-9.jpg') }}');"></div>
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <x-heroicon-o-plus class="w-12 h-12 text-red-500"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox"
         class="fixed inset-0 z-50 hidden bg-black/90 flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <button id="lightbox-close" class="absolute top-4 right-4 text-white hover:text-red-500 transition">
            <x-heroicon-o-x-mark class="w-10 h-10"/>
        </button>
        <img id="lightbox-img" src="" alt="Gallery Image"
             class="max-w-full max-h-full rounded-lg shadow-2xl transform scale-95 transition-transform duration-300">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const closeBtn = document.getElementById('lightbox-close');
            const galleryItems = document.querySelectorAll('.gallery-section .group');

            galleryItems.forEach(item => {
                item.addEventListener('click', function () {
                    const bgDiv = this.querySelector('div[style*="background-image"]');
                    if (bgDiv) {
                        const style = bgDiv.getAttribute('style');
                        const urlMatch = style.match(/url\(['"]?(.*?)['"]?\)/);
                        if (urlMatch && urlMatch[1]) {
                            lightboxImg.src = urlMatch[1];
                            lightbox.classList.remove('hidden');
                            // Small delay to allow display:block to apply before opacity transition
                            setTimeout(() => {
                                lightbox.classList.remove('opacity-0');
                                lightboxImg.classList.remove('scale-95');
                                lightboxImg.classList.add('scale-100');
                            }, 10);
                        }
                    }
                });
            });

            function closeLightbox() {
                lightbox.classList.add('opacity-0');
                lightboxImg.classList.remove('scale-100');
                lightboxImg.classList.add('scale-95');
                setTimeout(() => {
                    lightbox.classList.add('hidden');
                    lightboxImg.src = '';
                }, 300);
            }

            closeBtn.addEventListener('click', closeLightbox);

            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                    closeLightbox();
                }
            });
        });
    </script>

</x-app-layout>
