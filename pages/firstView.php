<article class="firstView">
    <div class="firstView__inner">
        <div class="swiper firstView__slideWrapper ">
            <div class="swiper-wrapper cover__target">
                <!--カスタムフィールド（固定ページ）で写真を追加する -->
                <!-- ここでtopの写真を出力する開始 -->
                <?php
                $imggroup = SCF::get('top');
                foreach ($imggroup as $fields) {
                    $imgurl = wp_get_attachment_image_src($fields['top-gallery'], 'full');
                ?>
                    <div class="swiper-slide ">
                        <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                    </div>
                <?php } ?>
                <!-- ここでtopの写真を出力する終了 -->
            </div>
            <!-- <div class="swiper-wrapper cover__target"> -->
        </div>
        <!-- <div class="swiper firstView__slideWrapper "> -->
        <h1 class="firstView__logo text--white">BULLICIO</h1>

    </div>
    <!-- <div class="firstView__inner"> -->
</article>
<!-- <article class="firstView"> -->
<div class="cover"></div>