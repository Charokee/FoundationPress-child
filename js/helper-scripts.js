// Hiding or showing the logo dynamically
$(document).ready(function ($) {

    $(window).scroll(function () {
        if ($(window).innerWidth() >= 784) {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 121) {
                $('.header__logo').removeClass('header__logo--show');
                $('.header__logo').addClass('header__logo--hide');
                $('#logo').removeClass('header__logo--show');
                $('#logo').addClass('header__logo--hide');
                $('header').addClass('fixed');
                $('.container').addClass('main-content-area__section--offset-medium');
            } else {
                $('.header__logo').removeClass('header__logo--hide');
                $('.header__logo').addClass('header__logo--show');
                $('#logo').removeClass('header__logo--hide');
                $('#logo').addClass('header__logo--show');
                $('header').removeClass('fixed');
                $('.container').removeClass('main-content-area__section--offset-medium');
            }
        } else {
            $('header').addClass('fixed');
            $('.container').addClass('main-content-area__section--offset-small');
        }
    });

    $('ul#menu-hauptmenue li a').click(function () {
        $('nav.top-bar').removeClass('expanded');
    });

});

// Scrolling to anchors in document with Offset
$(function () {

    if ($(window).innerWidth() <= 784) {
        headerOffset = 40;
    } else {
        headerOffset = 60;
    }

    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - headerOffset // offsets for fixed header
                }, 1000);
                return false;
            }
        }
    });

    //Executed on page load with URL containing an anchor tag.
    if ($(location.href.split('#')[1])) {
        var target = $('#' + location.href.split('#')[1]);
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - headerOffset // offset height of header here too.
            }, 1000);
            return false;
        }
    }

});