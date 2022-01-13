<section class="roti shop">
    <div class="rotiInner shopInner">
        <div class="shopInner__left">
            <div class="shop__text">
                <h1 class="h1Text text__title">
                    ROTI CHICKEN & JACKIE TACOS
                </h1>
                <h2 class="h2Text text_subtitle">
                    KYOTO-KARASUMA
                </h2>
            </div>
            <ul class="shop__nav">
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </div>
        <div class="shopInner__center">
            <div class="swiper-container shop__slideWrapper">
                <div class="swiper-wrapper">




                    <div class="swiper-slide slide__item">
                        <?php
                        $image = get_field('img1', 63);
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                    <div class="swiper-slide slide__item">
                        <?php
                        $image = get_field('img2', 63);
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?></div>
                    <div class="swiper-slide slide__item">
                        <?php
                        $image = get_field('img3', 63);
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?></div>
                    <div class="swiper-slide slide__item">
                        <?php
                        $image = get_field('img4', 63);
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?></div>
                </div>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
                <script>
                    var mySwiper = new Swiper(".swiper-container", {
                        direction: 'vertical',
                        allowSlidePrev: true,
                        reverseDirection: true,
                        loopedSlides: 5,
                        effect: 'slide',
                        autoHeight: true,
                        slidesPerView: 1,
                        loop: true,
                        autoplay: {
                            delay: 1,
                        },
                        speed: 36000,

                    });
                </script>
            </div>
        </div>
        <div class="shopInner__right">
            <p class="company__text">REPRESENT.Inc</p>
        </div>
    </div>
</section>