<article class="galleryContents">
    <div class="galleryContents__inner">
        <ul class="contents__wrapper">
            <!--カスタムフィールド（固定ページ）で写真を追加する -->
            <!-- ここでmuchoの写真を出力する開始 -->
            <?php

            $imggroup = SCF::get('gallery-mucho');
            foreach ($imggroup as $fields) {
                $imgurl = wp_get_attachment_image_src($fields['gallery-mucho-gallery'], 'full');
            ?>
                <li class="contents_item img__item">
                    <div class="img__inner">
                        <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                        <a class="row__filter--opacity0" href=" <?php
                                                                echo get_page_link(179);
                                                                ?>">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA MUCHO</p>
                                <p class="row__subtitle">KYOTO-MUROMACHI</p>
                            </div>
                            <!-- <div class=" row__text--opacity0"> -->
                        </a>
                    </div>
                    <!-- <div class="img__inner"> -->
                </li>
                <!-- <li class="contents_item img__item"> -->
            <?php } ?>
            <!-- ここでmuchoの写真を出力する終了 -->
            <!--カスタムフィールド（固定ページ）で写真を追加する -->
            <!-- ここでconchaの写真を出力する開始 -->
            <?php

            $imggroup = SCF::get('gallery-concha');
            foreach ($imggroup as $fields) {
                $imgurl = wp_get_attachment_image_src($fields['gallery-concha-gallery'], 'full');
            ?>
                <li class="contents_item img__item">
                    <div class="img__inner">
                        <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                        <a class="row__filter--opacity0" href=" <?php
                                                                echo get_page_link(182);
                                                                ?>">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA CONCHA</p>
                                <p class="row__subtitle">KYOTO-SHIJYO</p>
                            </div>
                            <!-- <div class=" row__text--opacity0"> -->
                        </a>
                    </div>
                    <!-- <div class="img__inner"> -->
                </li>
                <!-- <li class="contents_item img__item"> -->
            <?php } ?>
            <!-- ここでconchaの写真を出力する終了 -->
            <!--カスタムフィールド（固定ページ）で写真を追加する -->
            <!-- ここでmuamuaの写真を出力する開始 -->
            <?php

            $imggroup = SCF::get('gallery-muamua');
            foreach ($imggroup as $fields) {
                $imgurl = wp_get_attachment_image_src($fields['gallery-muamua-gallery'], 'full');
            ?>
                <li class="contents_item img__item">
                    <div class="img__inner">
                        <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                        <a class="row__filter--opacity0" href=" <?php
                                                                echo get_page_link(184);
                                                                ?>">
                            <div class=" row__text--opacity0">
                                <p class="row__title">BELLOTA MUAMUA</p>
                                <p class="row__subtitle">KYOTO-KARASUMA</p>
                            </div>
                            <!-- <div class=" row__text--opacity0"> -->
                        </a>
                    </div>
                    <!-- <div class="img__inner"> -->
                </li>
                <!-- <li class="contents_item img__item"> -->
            <?php } ?>
            <!-- ここでmuamuaの写真を出力する終了 -->
            <!--カスタムフィールド（固定ページ）で写真を追加する -->
            <!-- ここでrotiの写真を出力する開始 -->
            <?php

            $imggroup = SCF::get('gallery-roti');
            foreach ($imggroup as $fields) {
                $imgurl = wp_get_attachment_image_src($fields['gallery-roti-gallery'], 'full');
            ?>
                <li class="contents_item img__item">
                    <div class="img__inner">
                        <img class="contents_item__img" src="<?php echo $imgurl[0]; ?>">
                        <a class="row__filter--opacity0" href=" <?php
                                                                echo get_page_link(186);
                                                                ?>">
                            <div class=" row__text--opacity0">
                                <p class="row__title">ROTI CHICKEN <br>& JACKIE TACOS</p>
                                <p class="row__subtitle">KYOTO-KARASUMA</p>
                            </div>
                            <!-- <div class=" row__text--opacity0"> -->
                        </a>
                    </div>
                    <!-- <div class="img__inner"> -->
                </li>
                <!-- <li class="contents_item img__item"> -->
            <?php } ?>
            <!-- ここでrotiの写真を出力する終了 -->
        </ul>
        <!-- <ul class="contents__wrapper"> -->
    </div>
    <!-- <div class="galleryContents__inner"> -->
</article>
<!-- <article class="galleryContents"> -->