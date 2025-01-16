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
  var jsMenuClone = document.querySelector('.js-menu-clone');
  var jsMenuInner = document.querySelector('.js-menu-inner');
  if (jsMenuClone && jsMenuInner) {
    jsMenuInner.appendChild(jsMenuClone.cloneNode(true));
  }
});

//If you really need Jquery
/*
$(document).ready(function(){

})
 */
/******/ })()
;