
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./jquery');
require('./bootstrap');
// require('./materialize');
// require('./init');
require('./slick');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$('.hamburger').click(function() {
    $(this).toggleClass('open');
    $('.side-nav').toggleClass('side-nav--open');
    $('.brand-logo img').toggleClass('brand-logo__close');
    $('.user-actions').toggleClass('user-actions__close');
    $('.header_nav-menu--mobile').toggleClass('display-menu-mobile');
    $('.overlay').toggle();
});

$('.close-dialog').click(function() {
    $($('.close-dialog').data('target')).fadeOut();
});

$(window).scroll(function(){
    var scroll = $(window).scrollTop(),
        brand  = $('.brand-logo img');

    if (scroll >= 50) {
        brand.addClass('img-sm');
    } else {
        brand.removeClass('img-sm');
    }
});

$(document).ready(function(){
    var homeSlider = $('.home_hero__slider');
    var mode = {
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        cssEase: 'linear',
        dots: false,
        prevArrow: false,
        nextArrow: false
    };
    if (homeSlider.length) {
        homeSlider.slick(mode);
    }
});      
