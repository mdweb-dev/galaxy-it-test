window.addEventListener("DOMContentLoaded", () => {

    const bodyHtml = document.body;

    /**
     * STICKY-HEADER
     */
    let header = document.querySelector('header.header'),
        scrollPrev = 0;
    window.addEventListener('scroll', function() {
        let scrolled = document.documentElement.scrollTop;
        if ( scrolled >= 50 && scrolled > scrollPrev ) {
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
    const menuButton = document.querySelector('.button-menu');
    if ( menuButton ) {
        menuButton.addEventListener('click', (e) => {
            e.preventDefault();
            bodyHtml.classList.toggle('menu-open');
        })
    }

    const jsMenuClone = document.querySelector('.js-menu-clone');
    const jsMenuInner = document.querySelector('.js-menu-inner');
    if (jsMenuClone && jsMenuInner) {
        jsMenuInner.appendChild(jsMenuClone.cloneNode(true))
    }

    /**
     * swiper js slider hero section
     */
    const jsHeroSwiper = document.querySelector('.js-hero-swiper');
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
            },
        })
    }

});


//If you really need Jquery
/*
$(document).ready(function(){

})
 */