/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./src/scripts/common.js ***!
  \*******************************/
window.addEventListener("DOMContentLoaded", function () {
  var bodyHtml = document.body;

  /**
   * STICKY-HEADER
   */
  var header = document.querySelector('header.header'),
    scrollPrev = 0;
  window.addEventListener('scroll', function () {
    var scrolled = document.documentElement.scrollTop;
    if (scrolled >= 50 && scrolled > scrollPrev) {
      header.classList.add('out');
      header.classList.add('fixed');
    } else if (scrolled < 50) {
      header.classList.remove('fixed');
      header.classList.remove('out');
    } else {
      header.classList.remove('out');
    }
    scrollPrev = scrolled;
  });

  /**
   * menu mobile
   */
  var menuButton = document.querySelector('.button-menu');
  if (menuButton) {
    menuButton.addEventListener('click', function (e) {
      e.preventDefault();
      bodyHtml.classList.toggle('menu-open');
    });
  }

  /**
   * clone menu mobile
   */
  var jsMenuClone = document.querySelector('.js-menu-clone');
  var jsMenuInner = document.querySelector('.js-menu-inner');
  if (jsMenuClone && jsMenuInner) {
    jsMenuInner.appendChild(jsMenuClone.cloneNode(true));
  }

  /**
   * TAB | Switcher
   */
  var switcherContentAll = document.querySelectorAll('.js-switcher-content');
  var switcherButtonAll = document.querySelectorAll('.js-switcher-button');
  var switcherScrollContainer = document.querySelector('.js-switcher-scroll');
  if (switcherContentAll.length && switcherButtonAll.length) {
    switcherButtonAll.forEach(function (button) {
      button.addEventListener('click', function (event) {
        event.preventDefault();
        switcherButtonAll.forEach(function (btn) {
          return btn.classList.remove('active');
        });
        button.classList.add('active');
        var relatedClass = button.getAttribute('data-related-class');
        switcherContentAll.forEach(function (content) {
          var contentClasses = content.classList;
          contentClasses.remove('active', 'fade-in');
          if (contentClasses.contains(relatedClass)) {
            var elementsToToggle = document.querySelectorAll(".".concat(relatedClass));
            elementsToToggle.forEach(function (element) {
              element.classList.add('active');
              setTimeout(function () {
                element.classList.add('fade-in');
              }, 100);
            });
          }
        });
        if (switcherScrollContainer) {
          var buttonOffsetLeft = button.offsetLeft;
          var containerWidth = switcherScrollContainer.offsetWidth;
          var buttonWidth = button.offsetWidth;
          var scrollPosition = buttonOffsetLeft - containerWidth / 2 + buttonWidth / 2;
          switcherScrollContainer.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  /**
   * swiper js slider hero section
   */
  var jsHeroSwiper = document.querySelector('.js-hero-swiper');
  if (jsHeroSwiper) {
    jsHeroSwiperInit = new Swiper(jsHeroSwiper, {
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      pagination: {
        el: '.js-hero-pagination',
        type: 'bullets',
        clickable: true
      }
    });
  }

  /**
   * swiper horizontal card
   */
  var jsBakerSwiper = document.querySelectorAll('.js-baker-swiper');
  if (jsBakerSwiper.length) {
    jsBakerSwiper.forEach(function (bakerSwiper) {
      new Swiper(bakerSwiper, {
        loop: true,
        spaceBetween: 45,
        navigation: {
          nextEl: '.js-baker-next',
          prevEl: '.js-baker-prev'
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 15
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          1450: {
            slidesPerView: 4,
            spaceBetween: 45
          }
        }
      });
    });
  }
});

//If you really need Jquery
/*
$(document).ready(function(){

})
 */
/******/ })()
;