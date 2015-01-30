// Hiding or showing the logo dynamically
$(document).ready(function($) {
    logoOffset = 121;
    
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > logoOffset) {
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
    });
});

// Scrolling to anchors in document with Offset
$(function() {
    
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        var headerOffset = 60;

        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - headerOffset // offsets for fixed header
            }, 1000);
            return false;
        }
    }
  });
  
  //Executed on page load with URL containing an anchor tag.
  if($(location.href.split('#')[1])) {
        var target = $('#'+location.href.split('#')[1]);
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - headerOffset // offset height of header here too.
            }, 1000);
            return false;
        }
    }
    
});

$( '.top-bar-menu li a' ).click(function() {
    console.log('.top-bar-menu.left li a clicked!')
    $('nav.top-bar').removeClass('expanded');
});