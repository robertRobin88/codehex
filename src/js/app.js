import style from "../scss/main.scss";

window.$ = window.jQuery = require('jquery');
import Popper from 'popper.js';

window.Popper = Popper;
import 'bootstrap';
import 'slick-carousel';
import 'jquery.mmenu/dist/jquery.mmenu.all';

const fancybox = require("@fancyapps/fancybox");


var template = "<?php echo get_bloginfo('template_url); ?>";
var content = jQuery('.js-content');
content.find('img').addClass('img-fluid');
content.find('table').addClass('table').wrap('<div class="table-responsive"></div>');


$(document).ready(function () {
    $("a[href='#top']").on('click', function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });

    var menuDesktop = jQuery('.js-menu-desktop');
    $('.fancybox').fancybox();
    jQuery('#mmenu-menu').mmenu();
});


$(window).scroll(function () {
    if ($(this).scrollTop()) {
        $('.scroll-top').fadeIn();
    } else {
        $('.scroll-top').fadeOut();
    }
});
window.onscroll = function() {myFunction()};

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

$(document).ready(function () {


// menu js
    var menu = jQuery('.js-menu');
});
$('.realizacjeSlider').slick({
    dots: true,
    arrows: false,
    pauseOnHover: false,
    slidesToShow: 3,
    lazyLoad: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {


            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }
    ]

});
$('.slickGraphic').slick({
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }

        }
    ]

});
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
});
let elementHide = $('.hideElement');
setTimeout(function() {
    elementHide.removeClass('hideElement');

}, 500);
