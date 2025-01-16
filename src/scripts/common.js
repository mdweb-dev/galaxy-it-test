window.addEventListener("DOMContentLoaded", () => {

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

});


//If you really need Jquery
/*
$(document).ready(function(){

})
 */