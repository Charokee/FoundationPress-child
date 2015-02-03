// Initialize google maps
function initializeGoogleMaps() {
    var latlng = new google.maps.LatLng(52.55028, 13.42261);
    var myOptions = {
        zoom: 16,
        center: latlng,
        panControl: true,
        zoomControl: true,
        scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map-container'), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map
    });
}

// Validate contact form
function validateContactForm() {

    var fieldReturnValue = true;

    $('.error').hide();

    if ($('#formFirstName').val().length == 0) {
        $('#formFirstName').after('<span class="error">Bitte tragen Sie Ihren Vornamen ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#formLastName').val().length == 0) {
        $('#formLastName').after('<span class="error">Bitte tragen Sie Ihren Nachnamen ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#formEmail').val().length == 0 || $('#formEmail').val().indexOf('@') == -1 || $('#formEmail').val().indexOf('.') == -1) {
        $('#formEmail').after('<span class="error">Bitte tragen Sie eine gültige E-Mail Adresse ein.</span>');
        fieldReturnValue = false;
    }

    if ($('#formMessage').val().length == 0) {
        $('#formMessage').after('<span class="error">Bitte tragen Sie Ihre Nachricht ein.</span>');
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

    // Scrolling to anchors links
    $(function () {

        // Header offset
        if ($(window).innerWidth() <= 784) {
            headerOffset = 40;
        } else {
            headerOffset = 60;
        }

        // Executed on click with URL containing an anchor tag
        $('a[href*=#]:not([href=#])').click(function () {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - headerOffset
                }, 1000);
            }
        });

    });

    // Executed on page load with URL containing an anchor tag
    $(window).load(function () {

        var anchor = window.location.hash;
        if (anchor.length) {
            location.href = anchor;
        }

    });

});