<section class="firstView">
    <div class="firstViewInner">

        <div class="swiper-container firstView__slideWrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide item--pink slide__item">デモ画像</div>
                <div class="swiper-slide item--green slide__item">デモ画像</div>
                <div class="swiper-slide item--blue slide__item">デモ画像</div>
            </div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
            <script>
                var mySwiper = new Swiper(".swiper-container", {
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
            </script>
        </div>
        <h1 class="firstView__logo text--white">BULLICIO</h1>
    </div>

</section>