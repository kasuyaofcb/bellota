<article class="firstView">
    <div class="firstView__inner">
        <div class="swiper firstView__slideWrapper ">
            <div class="swiper-wrapper cover__target">
                <!-- 投稿タイプで写真を追加する -->
                <?php
                $cat_posts = get_posts(array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => 100, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC' // 昇順・降順
                ));
                global $post;
                if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                        <!-- ループはじめ -->
                        <div class="swiper-slide ">
                            <?php the_post_thumbnail('full') ?>
                        </div>
                        <!-- <div class="swiper-slide "> -->
                        <!-- ループおわり -->
                <?php endforeach;
                endif;
                wp_reset_postdata(); ?>
                <!-- ここで写真を出力する終了 -->
            </div>
            <!-- <div class="swiper-wrapper cover__target"> -->
        </div>
        <!-- <div class="swiper firstView__slideWrapper "> -->
        <h1 class="firstView__logo text--white">BULLICIO</h1>
    </div>
    <!-- <div class="firstViewInner"> -->
    </div>
    <!-- swiper-container firstView__slideWrapper -->
    <h1 class="firstView__logo text--white">BULLICIO</h1>
    </div>
    <!-- firstViewInner -->
</article>
<!-- <article class="firstView"> -->
<div class="cover"></div>