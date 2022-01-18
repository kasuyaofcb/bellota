<article class="galleryContents">
    <div class="galleryContents__inner">
        <ul class="contents__wrapper">
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
                    <li class="contents_item img__item">
                        <?php the_post_thumbnail() ?>
                        <a href="
                            <?php
                            echo get_page_link(53);
                            ?>" class="row__filter--opacity0">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA MUCHO</p>
                                <p class="row__subtitle">KYOTO-MUROMACHI</p>
                            </div>
                        </a>
                    </li>
                    <!-- contents_item img__cat2 -->
                    <!-- ループおわり -->

            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
            <!-- ここでカテゴリ2の写真を出力する終了 -->

            <!-- ここでカテゴリ3の写真を出力する開始 -->
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'category' => 3, // カテゴリIDを番号で指定する場合
                'posts_per_page' => 10, // 表示件数
                'orderby' => 'date', // 表示順の基準
                'order' => 'DESC' // 昇順・降順
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                    <!-- ループはじめ -->
                    <li class="contents_item img__item">
                        <?php the_post_thumbnail() ?>
                        <a href="
                            <?php
                            echo get_page_link(56);
                            ?>" class="row__filter--opacity0">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA CONCHA</p>
                                <p class="row__subtitle">KYOTO-SHIJYO</p>
                            </div>
                        </a>
                    </li>
                    <!-- contents_item img__cat3 -->
                    <!-- ループおわり -->

            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
            <!-- ここでカテゴリ3の写真を出力する終了 -->

            <!-- ここでカテゴリ4の写真を出力する開始 -->
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'category' => 4, // カテゴリIDを番号で指定する場合
                'posts_per_page' => 10, // 表示件数
                'orderby' => 'date', // 表示順の基準
                'order' => 'DESC' // 昇順・降順
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                    <!-- ループはじめ -->
                    <li class="contents_item img__item">
                        <?php the_post_thumbnail() ?>
                        <a href="
                            <?php
                            echo get_page_link(60);
                            ?>" class="row__filter--opacity0">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA MUAMUA</p>
                                <p class="row__subtitle">KYOTO-KARASUMA</p>
                            </div>
                        </a>
                    </li>
                    <!-- contents_item img__cat4 -->
                    <!-- ループおわり -->
            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
            <!-- ここでカテゴリ4の写真を出力する終了 -->

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
                    <li class="contents_item img__item">
                        <?php the_post_thumbnail() ?>
                        <a href="
                            <?php
                            echo get_page_link(63);
                            ?>" class="row__filter--opacity0">
                            <div class=" row__text--opacity0">
                                <p class="row__title">ROTI CHICKEN & JACKIE TACOS</p>
                                <p class="row__subtitle">KYOTO-KARASUMA</p>
                            </div>
                        </a>
                    </li>
                    <!-- contents_item img__cat5 -->
                    <!-- ループおわり -->

            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
            <!-- ここでカテゴリ5の写真を出力する終了 -->

        </ul>
        <!-- <ul class="contents__wrapper"> -->
    </div>
    <!-- <div class="galleryContents__inner"> -->
</article>
<!-- <article class="galleryContents"> -->