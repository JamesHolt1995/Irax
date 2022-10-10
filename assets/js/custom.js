"use strict";

jQuery(document).ready(function ($) {
  var height = $('.typed-height').outerHeight();
  console.log(height);
  $('.typed-height').hide();
  $('.hero__title--typed').css('min-height', height); //headroom

  var elem = document.querySelector("header");
  var headroom = new Headroom(elem, {
    "offset": 50,
    "tolerance": 5,
    "classes": {
      "pinned": "header--slideDown",
      "unpinned": "header--slideUp"
    }
  });
  headroom.init(); //change header color on scroll

  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      $('.header').addClass('header__scrolled');
    } else {
      $('.header').removeClass('header__scrolled');
    }
  } //show sub menu on click


  $('.menu-item-has-children').click(function () {
    $(this).children('.sub-menu').toggleClass('sub-menu--show');
  }); //hide sub menu if clicked elsewhere

  $(document).click(function (event) {
    if (!$(event.target).is('.menu-item-has-children, .menu-item-has-children a')) {
      $('.menu-item-has-children').children('.sub-menu').removeClass('sub-menu--show');
    }
  }); // Burger menu

  $('#burger-menu').click(function () {
    $(this).find('.burger').toggleClass('open');
    $('.header__menu-wrapper').toggleClass('header__menu-wrapper--open');
  });
});
var typed = new Typed('#typed', {
  stringsElement: '#typed-strings',
  //loop: true,
  typeSpeed: 40,
  backSpeed: 20,
  startDelay: 500,
  backDelay: 1000
});