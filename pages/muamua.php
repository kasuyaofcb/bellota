<article class="shopDetail">
    <div class="shopDetail__inner shop__inner">
        <div class="shopDetail__left">
            <div class="left__text">
                <h1 class="left__title">
                    BELLOTA<br>MUAMUA
                </h1>
                <!-- <h1 class="left__title"> -->
                <h2 class="left__subtitle">
                    KYOTO-KARASUMA
                </h2>
                <!-- <h2 class="left__subtitle"> -->
            </div>
            <!-- <div class="left__text"> -->
            <ul class="left__nav">
                <li>
                    <a class="arrow--active" href="<?php
                                                    echo get_page_link(5);
                                                    ?>">GALLERY</a>
                </li>
                <li>
                    <a class="arrow--active" href="<?php
                                                    echo get_page_link(68);
                                                    ?>">PROFILE</a>
                </li>
                <li class="nav__item nav__3rd">
                    <div class="main__box">
                        SHOP
                    </div>
                    <!-- <div class="main__box"> -->
                    <ul class="sub__wrapper">
                        <li class="sub__item">
                            <a class="arrow--active" href="<?php
                                                            echo get_page_link(179);
                                                            ?>" class="itemSub__link">BELLOTA MUCHO</a>
                        </li>
                        <!-- <li class="sub__item"> -->
                        <li class="sub__item">
                            <a class="arrow--active" href="<?php
                                                            echo get_page_link(182);
                                                            ?>" class="itemSub__link">BELLOTA CONCHA</a>
                        </li>
                        <!-- <li class="sub__item"> -->
                        <li class="sub__item">
                            <a class="arrow--active" href="<?php
                                                            echo get_page_link(184);
                                                            ?>" class="itemSub__link">BELLOTA MUAMUA</a>
                        </li>
                        <!-- <li class="sub__item"> -->
                        <li class="sub__item">
                            <a class="arrow--active" href="<?php
                                                            echo get_page_link(186);
                                                            ?>" class="itemSub__link">ROTI CHICKEN & JACKIE TACOS</a>
                        </li>
                        <!-- <li class="sub__item"> -->
                    </ul>
                    <!-- <ul class="sub__wrapper"> -->
                </li>
                <!-- <li class="nav__item nav__3rd"> -->
            </ul>
            <!-- <ul class="left__nav"> -->
            <div class="ham__nav">
                <ul class="ham__target">
                    <span class="target__line target__line1"></span>
                    <span class="target__line target__line2"></span>
                    <span class="target__line target__line3"></span>
                </ul>
                <!-- <ul class="ham__target"> -->
                <nav class="globalMenuSp">
                    <ul class="globalMenuSp__wrapper">
                        <li class="nav__item">
                            <a href="<?php
                                        echo get_page_link(5);
                                        ?>" class="item__link">GALLERY</a>
                        </li>
                        <!-- <li class="nav__item"> -->
                        <li class="nav__item">
                            <a href="<?php
                                        echo get_page_link(68);
                                        ?>" class="item__link">PROFILE</a>
                        </li>
                        <!-- <li class="nav__item"> -->
                        <li class="nav__item nav__3rd">
                            <div class="main__box">
                                <div class="shop__text">
                                    <p>SHOP</p>
                                </div>
                                <!-- <div class="shop__text"> -->
                                <button class="accordion__button">
                                    <div class="button__in">
                                        <div class="button__circle">
                                        </div>
                                        <div class="line1"></div>
                                        <div class="line2"></div>
                                    </div>
                                    <!-- <div class="button__in"> -->
                                </button>
                                <!-- <button class="accordion__button"> -->
                            </div>
                            <!-- <div class="main__box"> -->
                            <div class="sub__box">
                                <ul class="sub__wrapper">
                                    <li class="sub__item">
                                        <a href="<?php
                                                    echo get_page_link(179);
                                                    ?>" class="itemSub__link">
                                            BELLOTA MUCHO
                                        </a>
                                    </li>
                                    <!-- <li class="sub__item"> -->
                                    <li class="sub__item">
                                        <a href="<?php
                                                    echo get_page_link(182);
                                                    ?>" class="itemSub__link">
                                            BELLOTA CONCHA
                                        </a>
                                    </li>
                                    <!-- <li class="sub__item"> -->
                                    <li class="sub__item">
                                        <a href="<?php
                                                    echo get_page_link(184);
                                                    ?>" class="itemSub__link">
                                            BELLOTA MUAMUA
                                        </a>
                                    </li>
                                    <!-- <li class="sub__item"> -->
                                    <li class="sub__item">
                                        <a href="<?php
                                                    echo get_page_link(186);
                                                    ?>" class="itemSub__link">
                                            ROTI CHICKEN & JACKIE TACOS
                                        </a>
                                    </li>
                                    <!-- <li class="sub__item"> -->
                                </ul>
                            </div>
                            <!-- <div class="sub__box"> -->
                        </li>
                        <!-- <li class="nav__item nav__3rd"> -->
                    </ul>
                    <!-- <ul class="globalMenuSp__wrapper"> -->
                </nav>
                <!-- <nav class="globalMenuSp"> -->
                <div class=" accordion__target"></div>
            </div>
            <!-- <div class="ham__nav"> -->
        </div>
        <!-- <div class="shopDetail__left"> -->
        <div class="shopDetail__center">
            <div class="scroll__box">
                <ul class="scroll__wrapper">
                    <!--カスタムフィールド（投稿ページ）で写真を追加する -->
                    <?php
                    $imggroup = SCF::get('muamua');
                    foreach ($imggroup as $fields) {
                        $imgurl = wp_get_attachment_image_src($fields['muamua-gallery'], 'full');
                    ?>
                        <li class="contents_item">
                            <a class="img__linkBox fancybox" href="<?php echo $imgurl[0]; ?>">
                                <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                            </a>
                        </li>
                        <!-- <li class="contents_item"> -->
                    <?php } ?>
                </ul>
                <!-- <ul class="scroll__wrapper"> -->
            </div>
            <!-- <div class="scroll__box"> -->
            <div class="scroll-boxSp">
                <div class="arrow__box">
                    <i class="fas fa-angle-double-left arrowSp"></i>
                    <i class="fas fa-angle-double-right arrowSp"></i>
                </div>
                <!-- <div class="arrow__box"> -->
                <ul class="scroll__wrapperSp infiniteslide">
                    <!--カスタムフィールド（投稿ページ）で写真を追加する -->
                    <?php
                    $imggroup = SCF::get('muamua');
                    foreach ($imggroup as $fields) {
                        $imgurl = wp_get_attachment_image_src($fields['muamua-gallery'], 'full');
                    ?>
                        <li class="contents__item">
                            <a class="img__linkBox fancybox" href="<?php echo $imgurl[0]; ?>">
                                <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                            </a>
                        </li>
                        <!-- <li class="contents_item"> -->
                    <?php } ?>
                </ul>
                <!-- <ul class="scroll__wrapperSp"> -->
            </div>
        </div>
        <!-- <div class="shopDetail__center"> -->
        <div class="shopDetail__right">
            <p class="company__text">REPRESENT.Inc</p>
        </div>
        <!-- <div class="shopDetail__right"> -->
    </div>
    <!-- <div class="shopDetail__inner shop__inner"> -->
</article>
<!-- <article class="shopDetail"> -->

<!-- fancybox起動 -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".fancybox").fancybox();
    });
</script>