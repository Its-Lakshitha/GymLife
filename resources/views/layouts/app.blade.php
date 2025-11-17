<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Theme toggle: wrap icons in fixed container and keep IDs for JS -->
    <style>
        #theme-toggle {
            position: relative;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #theme-toggle svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 28px;
            height: 28px;
            transition: opacity 280ms cubic-bezier(.2, .8, .2, 1), transform 420ms cubic-bezier(.2, .8, .2, 1);
        }

        .anim-in {
            animation: iconIn 420ms cubic-bezier(.2, .8, .2, 1) forwards;
        }

        .anim-out {
            animation: iconOut 320ms cubic-bezier(.2, .8, .2, 1) forwards;
        }

        @keyframes iconIn {
            0% {
                transform: translateY(-6px) scale(0.94) rotate(-10deg);
                opacity: 0;
            }
            60% {
                transform: translateY(4px) scale(1.02) rotate(6deg);
                opacity: 1;
            }
            100% {
                transform: translateY(0) scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        @keyframes iconOut {
            0% {
                transform: translateY(0) scale(1) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(6px) scale(0.92) rotate(10deg);
                opacity: 0;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            #theme-toggle svg, .anim-in, .anim-out {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-[#0a0a0a]">
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


<button id="scrollToTopBtn"
        class="hidden fixed bottom-6 right-6 bg-red-500 text-white p-3 rounded-full shadow-lg hover:bg-red-700 transition-all duration-300 z-50">
    <x-heroicon-o-arrow-small-up class="w-5 h-5"/>
</button>


<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


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

<script>
    const scrollBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({top: 0, behavior: "smooth"});
    });
</script>

<script>

</script>
</body>
</html>
