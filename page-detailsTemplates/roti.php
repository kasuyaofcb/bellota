<article class="shopDetail">
    <div class="mask"></div>
    <div class="shopDetailInner shopInner">

        <div class="shopDetail__left">
            <div class="left__text">
                <h1 class="left__title">
                    ROTI CHICKEN <br>& JACKIE TACOS
                </h1>
                <h2 class="left__subtitle">
                    KYOTO-KARASUMA
                </h2>
            </div>
            <ul class="left__nav">
                <li><a class="arrow--active" href="<?php
                                                    echo get_page_link(5);
                                                    ?>">GALLERY</a>
                </li>
                <li><a class="arrow--active" href="<?php
                                                    echo get_page_link(68);
                                                    ?>">PROFILE</a>
                </li>
                <li class="nav__item">
                    <div class="main__box">
                        SHOP
                    </div>
                    <ul class="sub__wrapper">
                        <li class="sub__item"><a class="arrow--active" href="<?php
                                                                                echo get_page_link(53);
                                                                                ?>" class="itemSub__link">BELLOTA MUCHO</a></li>
                        <li class="sub__item"><a class="arrow--active" href="<?php
                                                                                echo get_page_link(56);
                                                                                ?>" class="itemSub__link">BELLOTA CONCHA</a></li>
                        <li class="sub__item"><a class="arrow--active" href="<?php
                                                                                echo get_page_link(60);
                                                                                ?>" class="itemSub__link">BELLOTA MUAMUA</a></li>
                        <li class="sub__item"><a class="arrow--active" href="<?php
                                                                                echo get_page_link(63);
                                                                                ?>" class="itemSub__link">ROTI CHICKEN & JACKIE TACOS</a></li>
                    </ul>
                </li>



            </ul>
            <div class="ham__nav">
                <ul class="ham__target">
                    <span class="target__line target__line1"></span>
                    <span class="target__line target__line2"></span>
                    <span class="target__line target__line3"></span>
                </ul>
                <nav class="globalMenuSp">
                    <ul class="globalMenuSp__wrapper">
                        <li class="nav__item"><a href="<?php
                                                        echo get_page_link(5);
                                                        ?>" class="item__link">GALLERY</a>
                        </li>
                        <li class="nav__item"><a href="<?php
                                                        echo get_page_link(68);
                                                        ?>" class="item__link">PROFILE</a>
                        </li>
                        <li class="nav__item">
                            <div class="main__box">
                                <div class="shop__text">
                                    <p>SHOP</p>
                                </div>
                                <button class="accordion__button">
                                    <div class="button__in">
                                        <div class="button__circle">
                                        </div>
                                        <div class="line1"></div>
                                        <div class="line2"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="sub__box">
                                <ul class="sub__wrapper">
                                    <a href="<?php
                                                echo get_page_link(53);
                                                ?>" class="itemSub__link">
                                        <li class="sub__item">BELLOTA MUCHO</li>
                                    </a>
                                    <a href="<?php
                                                echo get_page_link(56);
                                                ?>" class="itemSub__link">
                                        <li class="sub__item">BELLOTA CONCHA</li>
                                    </a>
                                    <a href="<?php
                                                echo get_page_link(60);
                                                ?>" class="itemSub__link">
                                        <li class="sub__item">BELLOTA MUAMUA</li>
                                    </a>
                                    <a href="<?php
                                                echo get_page_link(63);
                                                ?>" class="itemSub__link">
                                        <li class="sub__item">ROTI CHICKEN & JACKIE TACOS</li>
                                    </a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class=" accordion__target"></div>
            </div>
        </div>

        <div class="shopDetail__center">
            <div class="scroll__box">
                <ul class="scroll__wrapper scroll__wrapperSp--stop">
                    <!-- 投稿タイプで写真を追加する -->

                    <!-- ここでカテゴリ5の写真を出力する開始 -->
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post', // 投稿タイプ
                        'category' => 5, // カテゴリIDを番号で指定する場合
                        'posts_per_page' => 10, // 表示件数
                        'orderby' => 'date', // 表示順の基準
                        'order' => 'DESC' // 昇順・降順
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                            <!-- ループはじめ -->

                            <li class="contents_item ">
                                <a class="img__linkBox fancybox" href="<?php the_post_thumbnail_url('full') ?>">
                                    <?php the_post_thumbnail('full') ?></a>
                            </li>
                            <!-- contents_item  -->
                            <!-- ループおわり -->

                    <?php endforeach;
                    endif;
                    wp_reset_postdata(); ?>
                    <!-- ここでカテゴリ5の写真を出力する終了 -->
                </ul>
            </div>

            <div class="scroll-boxSp">
                <ul class="scroll__wrapperSp scroll__wrapperSp--stop">
                    <!-- 投稿タイプで写真を追加する -->

                    <!-- ここでカテゴリ5の写真を出力する開始 -->
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post', // 投稿タイプ
                        'category' => 5, // カテゴリIDを番号で指定する場合
                        'posts_per_page' => 10, // 表示件数
                        'orderby' => 'date', // 表示順の基準
                        'order' => 'DESC' // 昇順・降順
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                            <!-- ループはじめ -->

                            <li class="contents_item ">
                                <a class="img__linkBox fancybox" href="<?php the_post_thumbnail_url('full') ?>">
                                    <?php the_post_thumbnail('full') ?></a>
                            </li>
                            <!-- contents_item  -->
                            <!-- ループおわり -->

                    <?php endforeach;
                    endif;
                    wp_reset_postdata(); ?>
                    <!-- ここでカテゴリ5の写真を出力する終了 -->
                </ul>
                <ul class="scroll__wrapperSp scroll__wrapperSp--stop">
                    <!-- 投稿タイプで写真を追加する -->

                    <!-- ここでカテゴリ5の写真を出力する開始 -->
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post', // 投稿タイプ
                        'category' => 5, // カテゴリIDを番号で指定する場合
                        'posts_per_page' => 10, // 表示件数
                        'orderby' => 'date', // 表示順の基準
                        'order' => 'DESC' // 昇順・降順
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                            <!-- ループはじめ -->

                            <li class="contents_item ">
                                <a class="img__linkBox fancybox" href="<?php the_post_thumbnail_url('full') ?>">
                                    <?php the_post_thumbnail('full') ?></a>
                            </li>
                            <!-- contents_item  -->
                            <!-- ループおわり -->

                    <?php endforeach;
                    endif;
                    wp_reset_postdata(); ?>
                    <!-- ここでカテゴリ5の写真を出力する終了 -->
                </ul>
                <ul class="scroll__wrapperSp scroll__wrapperSp--stop">
                    <!-- 投稿タイプで写真を追加する -->

                    <!-- ここでカテゴリ5の写真を出力する開始 -->
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post', // 投稿タイプ
                        'category' => 5, // カテゴリIDを番号で指定する場合
                        'posts_per_page' => 10, // 表示件数
                        'orderby' => 'date', // 表示順の基準
                        'order' => 'DESC' // 昇順・降順
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>



                            <!-- ループはじめ -->

                            <li class="contents_item ">
                                <a class="img__linkBox fancybox" href="<?php the_post_thumbnail_url('full') ?>">
                                    <?php the_post_thumbnail('full') ?></a>
                            </li>
                            <!-- contents_item  -->
                            <!-- ループおわり -->

                    <?php endforeach;
                    endif;
                    wp_reset_postdata(); ?>
                    <!-- ここでカテゴリ5の写真を出力する終了 -->
                </ul>

            </div>



        </div>


        <div class="shopDetail__right">
            <p class="company__text">REPRESENT.Inc</p>
        </div>












    </div>
    <!-- muchoInner shopInner -->
</article>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".fancybox").fancybox();
    });
</script>