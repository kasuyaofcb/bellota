'use strict'
{

  
    const mySwiper = new Swiper(".swiper-container", {
        direction: 'vertical',
        allowSlidePrev: true,
        reverseDirection: true,
        effect: 'slide',
        slidesPerView: 1,
        inverse: false,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        speed: 2000,

    });


}