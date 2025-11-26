<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @include('layouts.footer')
</div>


<script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>


<!-- Swiper CSS -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    const swiper = new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {crossFade: true},
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
    jQuery(function ($) {
        $('.team-slider-slick').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 2,
            centerMode: true,      // true if you want centered active card
            centerPadding: '40px',  // visible peek when centerMode true
            dots: true,
            arrows: false,
            autoplay: true,
            speed: 500,
            responsive: [
                {breakpoint: 1024, settings: {slidesToShow: 3}},
                {breakpoint: 768, settings: {slidesToShow: 2}},
                {breakpoint: 640, settings: {slidesToShow: 1}}
            ]
        });
    });
</script>
</body>
</html>
