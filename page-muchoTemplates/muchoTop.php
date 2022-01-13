<article class="shopDetail">
    <div class="shopDetailInner shopInner">

        <div class="shopDetail__left">
            <div class="shopDetail__text">
                <h1 class="h1Text text__title">
                    BELLOTA MUCHO
                </h1>
                <h2 class="h2Text text_subtitle">
                    KYOTO-MUROMACHI
                </h2>
            </div>
            <ul class="shopDetail__nav">
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
            <div class="ham__nav">
                <ul class="ham__target">
                    <span class="target__line"></span>
                    <span class="target__line"></span>
                    <span class="target__line"></span>
                </ul>
                <nav class="globalMenuSp">
                    <ul class="globalMenuSp__wrapper">
                        <li class="nav__item"><a href="#" class="item__link">GALLERY</a></li>
                        <li class="nav__item"><a href="#" class="item__link">PROFILE</a></li>
                        <li class="nav__item"><a href="#" class="item__link">SHOP</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="shopDetail__center">

            <!-- <ul class="img__wrapper">
                <li class="slide__item">
                    <?php
                    $image = get_field('img1', 53);
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </li>
                <li class="slide__item">
                    <?php
                    $image = get_field('img2', 53);
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </li>
                <li class="slide__item">
                    <?php
                    $image = get_field('img3', 53);
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </li>
                <li class="slide__item">
                    <?php
                    $image = get_field('img4', 53);
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </li>
            </ul> -->

            <section class="slide__loop" id="body">
                <!-- 投稿タイプで写真を追加する -->

                <!-- ここでカテゴリ2の写真を出力する開始 -->
                <?php
                $cat_posts = get_posts(array(
                    'post_type' => 'post', // 投稿タイプ
                    'category' => 2, // カテゴリIDを番号で指定する場合
                    'posts_per_page' => 10, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC' // 昇順・降順
                ));
                global $post;
                if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                        <!-- ループはじめ -->

                        <li class="contents_item img__cat2">
                            <a class="fancybox" href="<?php the_post_thumbnail_url('full') ?>">
                                <?php the_post_thumbnail('full') ?></a>
                        </li>
                        <!-- contents_item img__cat2 -->
                        <!-- ループおわり -->

                <?php endforeach;
                endif;
                wp_reset_postdata(); ?>
                <!-- ここでカテゴリ2の写真を出力する終了 -->


            </section>


        </div>


        <div class="shopDetail__right">
            <p class="company__text">REPRESENT.Inc</p>
        </div>










    </div>
    <!-- muchoInner shopInner -->
</article>