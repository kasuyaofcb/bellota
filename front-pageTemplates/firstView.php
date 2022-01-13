
<article class="firstView">

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


                <!-- <div class="swiper-slide item--pink slide__item">デモ画像</div>
                <div class="swiper-slide item--green slide__item">デモ画像</div>
                <div class="swiper-slide item--blue slide__item">デモ画像</div> -->

                <!-- 投稿タイプで写真を追加する -->

                <!-- ここでカテゴリ2の写真を出力する開始 -->
                <?php
                $cat_posts = get_posts(array(
                    'post_type' => 'post', // 投稿タイプ
                    // 'category' => 2, // カテゴリIDを番号で指定する場合
                    'posts_per_page' => 100, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC' // 昇順・降順
                ));
                global $post;
                if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                        <!-- ループはじめ -->

                        <li class="swiper-slide">
                            <a href=" <?php
                                        echo get_page_link(5);
                                        ?>">
                                <?php the_post_thumbnail('full') ?></a>
                        </li>
                        <!-- contents_item img__cat2 -->
                        <!-- ループおわり -->

                <?php endforeach;
                endif;
                wp_reset_postdata(); ?>
                <!-- ここでカテゴリ2の写真を出力する終了 -->



            </div>
            <!-- swiper-wrapper -->



        </div>
        <!-- swiper-container firstView__slideWrapper -->
        <h1 class="firstView__logo text--white">BULLICIO</h1>
    </div>
    <!-- firstViewInner -->
</article>

