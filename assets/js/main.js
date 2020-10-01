AOS.init({});
$(document).ready(function () {
    // MAIN MENU ANIMATION
    // Menu change
    $(this).scrollTop(0); // importante <--
    var nav = $('header');
    var navRec = $('.nav-rec');


    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            nav.addClass("active");
            navRec.addClass("active");
        } else {
            nav.removeClass("active");
            navRec.removeClass("active");
        }
    });

    // Hamburg Menu animation
    $('.hamburger-container').click(function () {
        $('#hamburger').toggleClass('open');
        $('header').toggleClass('open');
    });




});

//Parallax 
window.onload = function(){

    //default JS Setting
    var rellax = new Rellax('.rellax', {
    });

    var rellax = new Rellax('.rellax-h', {
        horizontal: true
    });

}

// Cache selectors
var lastId,
    topMenu = $(".menu-item"),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function (e) {

    var href = $(this).attr("href")
    //offsetTop = href === "#" ? 0 : $(href).offset().top+2;  
    $('html, body').stop().animate({
        scrollTop: href === "#" ? 0 : $(href).offset().top - 160
    }, 1000);

    e.preventDefault();
});



// Slider's swipe god

var swiper = new Swiper('.swiper-features', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Accordion

$(document).ready(function () {
    'use strict';

    $('.accordion-group').ariaAccordion({
        //expandOnlyOne: true,
        slideSpeed: 550
    });

});

$(document).ready(function () {


    $(".ancor-trigger").sticky({
        topSpacing: 0
    });

});