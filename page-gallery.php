<?php get_header(); ?>

<body>

    <!-- // ここでギャラリートップのPHPを呼び出す。 -->
    <?php get_template_part('galleryTemplates/galleryTop'); ?>

    <!-- // ここでギャラリーコンテンツのPHPを呼び出す。 -->
    <?php get_template_part('galleryTemplates/galleryContents'); ?>


    <?php get_footer(); ?>