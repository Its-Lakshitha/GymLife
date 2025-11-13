import './bootstrap';

import Alpine from 'alpinejs';
import '../css/barfiller.css';
import '../js/jquery.barfiller.js';

window.Alpine = Alpine;

Alpine.start();

/*  ---------------------------------------------------
  Template Name: Gym
  Description:  Gym Fitness HTML Template
  Author: Colorlib
  Author URI: https://colorlib.com
  Version: 1.0
  Created: Colorlib
---------------------------------------------------------  */

'use strict';


// Replace the previous theme toggle and animation handlers with the improved version:
const themeToggle = document.getElementById('theme-toggle');

// Apply theme on load
function applyTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}

function initTheme() {
    const storedTheme = localStorage.getItem('theme');
    if (storedTheme) {
        applyTheme(storedTheme);
    } else {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDark ? 'dark' : 'light');
    }
    // safe update (may be no toggle on some pages)
    updateIconAnimation();
}

function updateIconAnimation() {
    if (!themeToggle) return;
    // find SVG elements by id; may be null if component not present
    const sunIcon = themeToggle.querySelector('#sun-icon');
    const moonIcon = themeToggle.querySelector('#moon-icon');
    const isDark = document.documentElement.classList.contains('dark');

    // remove previous animation classes
    [sunIcon, moonIcon].forEach(el => {
        if (!el) return;
        el.classList.remove('anim-in', 'anim-out');
        // ensure will-change is set so transitions use compositor
        el.style.willChange = 'transform, opacity';
    });

    // Use rAF to batch DOM changes for smoother animation
    requestAnimationFrame(() => {
        if (isDark) {
            // moon appears, sun disappears
            moonIcon && moonIcon.classList.add('anim-in');
            sunIcon && sunIcon.classList.add('anim-out');
        } else {
            sunIcon && sunIcon.classList.add('anim-in');
            moonIcon && moonIcon.classList.add('anim-out');
        }

        // clean-up after animation completes (match durations in CSS)
        const cleanup = () => {
            [sunIcon, moonIcon].forEach(el => {
                if (!el) return;
                el.classList.remove('anim-in', 'anim-out');
                el.style.willChange = '';
            });
        };
        // safe timeout slightly longer than CSS animation
        setTimeout(cleanup, 600);
    });
}

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme);
        updateIconAnimation();
    });
}

initTheme();

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Canvas Menu
    $(".canvas-open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".canvas-close, .offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    // Search model
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    //Masonary
    $('.gallery').masonry({
        itemSelector: '.gs-item',
        columnWidth: '.grid-sizer',
        gutter: 10
    });

    /*------------------
		Navigation
	--------------------*/
    // $(".mobile-menu").slicknav({
    //     prependTo: '#mobile-menu-wrap',
    //     allowParentLinks: true
    // });

    /*------------------
        Carousel Slider
    --------------------*/
    var hero_s = $(".hs-slider");
    // hero_s.owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     nav: true,
    //     items: 1,
    //     dots: false,
    //     animateOut: 'fadeOut',
    //     animateIn: 'fadeIn',
    //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    //     smartSpeed: 1200,
    //     autoHeight: false,
    //     autoplay: false
    // });

    /*------------------
        Team Slider
    --------------------*/
    // $(".ts-slider").owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     items: 3,
    //     dots: true,
    //     dotsEach: 2,
    //     smartSpeed: 1200,
    //     autoHeight: false,
    //     autoplay: true,
    //     responsive: {
    //         320: {
    //             items: 1,
    //         },
    //         768: {
    //             items: 2,
    //         },
    //         992: {
    //             items: 3,
    //         }
    //     }
    // });

    /*------------------
        Testimonial Slider
    --------------------*/
    // $(".ts_slider").owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     items: 1,
    //     dots: false,
    //     nav: true,
    //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    //     smartSpeed: 1200,
    //     autoHeight: false,
    //     autoplay: true
    // });

    /*------------------
        Image Popup
    --------------------*/
    // $('.image-popup').magnificPopup({
    //     type: 'image'
    // });
    //
    // /*------------------
    //     Video Popup
    // --------------------*/
    // $('.video-popup').magnificPopup({
    //     type: 'iframe'
    // });
    // console.log('hello');
    /*------------------
        Barfiller
    --------------------*/
    $('#bar1').barfiller({
        barColor: '#000000',
        duration: 2000
    });
    $('#bar2').barfiller({
        barColor: '#000000',
        duration: 2000
    });
    $('#bar3').barfiller({
        barColor: '#000000',
        duration: 2000
    });

    $('.table-controls ul li').on('click', function () {
        var tsfilter = $(this).data('tsfilter');
        $('.table-controls ul li').removeClass('active');
        $(this).addClass('active');

        if (tsfilter == 'all') {
            $('.class-timetable').removeClass('filtering');
            $('.ts-meta').removeClass('show');
        } else {
            $('.class-timetable').addClass('filtering');
        }
        $('.ts-meta').each(function () {
            $(this).removeClass('show');
            if ($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });

})(jQuery);
