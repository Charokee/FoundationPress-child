// Validate contact form
function validateContactForm() {

    var fieldReturnValue = true;

    $('.error').hide();

    if ($('#firstName').val().length == 0) {
        $('#firstName').after('<span class="error">Bitte tragen Sie Ihren Vornamen ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#lastName').val().length == 0) {
        $('#lastName').after('<span class="error">Bitte tragen Sie Ihren Nachnamen ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#email').val().length == 0 || $('#email').val().indexOf('@') == -1 || $('#email').val().indexOf('.') == -1) {
        $('#email').after('<span class="error">Bitte tragen Sie eine gültige E-Mail Adresse ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#message').val().length == 0) {
        $('#message').after('<span class="error">Bitte tragen Sie Ihre Nachricht ein.</span>');
        fieldReturnValue = false;
    }
    
    return fieldReturnValue;
}

$(document).ready(function ($) {

    // Hiding or showing the logo dynamically
    $(window).scroll(function () {
        if ($(window).innerWidth() >= 784) {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 121) {
                $('.header__logo').removeClass('header__logo--show');
                $('.header__logo').addClass('header__logo--hide');
                $('#logo').removeClass('header__logo--show');
                $('#logo').addClass('header__logo--hide');
                $('header').addClass('fixed');
                $('.container').addClass('main-content-area__section--offset');
            } else {
                $('.header__logo').removeClass('header__logo--hide');
                $('.header__logo').addClass('header__logo--show');
                $('#logo').removeClass('header__logo--hide');
                $('#logo').addClass('header__logo--show');
                $('header').removeClass('fixed');
                $('.container').removeClass('main-content-area__section--offset');
            }
        } else {
            $('header').addClass('fixed');
            $('.container').addClass('main-content-area__section--offset');
        }
    });

    // collapsing the mobile menu on menu item click
    $('ul#menu-hauptmenu-medium li a').click(function () {
        $('nav.top-bar').removeClass('expanded');
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

});