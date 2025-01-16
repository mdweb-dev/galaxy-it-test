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

    /**
     * clone menu mobile
     */
    const jsMenuClone = document.querySelector('.js-menu-clone');
    const jsMenuInner = document.querySelector('.js-menu-inner');
    if (jsMenuClone && jsMenuInner) {
        jsMenuInner.appendChild(jsMenuClone.cloneNode(true))
    }

    /**
     * TAB | Switcher
     */
    const switcherContentAll = document.querySelectorAll('.js-switcher-content');
    const switcherButtonAll = document.querySelectorAll('.js-switcher-button');
    const switcherScrollContainer = document.querySelector('.js-switcher-scroll');

    if (switcherContentAll.length && switcherButtonAll.length) {
        switcherButtonAll.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                switcherButtonAll.forEach((btn) => btn.classList.remove('active'));
                button.classList.add('active');

                const relatedClass = button.getAttribute('data-related-class');

                switcherContentAll.forEach((content) => {
                    const contentClasses = content.classList;
                    contentClasses.remove('active', 'fade-in');

                    if (contentClasses.contains(relatedClass)) {
                        const elementsToToggle = document.querySelectorAll(`.${relatedClass}`);
                        elementsToToggle.forEach((element) => {
                            element.classList.add('active');
                            setTimeout(() => {
                                element.classList.add('fade-in');
                            }, 100);
                        });
                    }
                });

                if (switcherScrollContainer) {
                    const buttonOffsetLeft = button.offsetLeft;
                    const containerWidth = switcherScrollContainer.offsetWidth;
                    const buttonWidth = button.offsetWidth;
                    const scrollPosition = buttonOffsetLeft - (containerWidth / 2) + (buttonWidth / 2);

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

    /**
     * swiper horizontal card
     */
    const jsBakerSwiper = document.querySelectorAll('.js-baker-swiper');
    if (jsBakerSwiper.length) {
        jsBakerSwiper.forEach(bakerSwiper => {
            const swiperInit = bakerSwiper.querySelector('.swiper');
            const btnPrev = bakerSwiper.querySelector('.js-baker-prev');
            const btnNext = bakerSwiper.querySelector('.js-baker-next');

            new Swiper(swiperInit, {
                loop: true,
                spaceBetween: 45,
                navigation: {
                    nextEl: btnNext,
                    prevEl: btnPrev,
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
            })
        })
    }

});


//If you really need Jquery
/*
$(document).ready(function(){

})
 */