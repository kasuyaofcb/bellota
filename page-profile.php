<?php get_header(); ?>

<body class="fadein">

    <!-- // ここでプロフィールトップのPHPを呼び出す。 -->
    <?php get_template_part('page-profileTemplates/profileTop'); ?>

    <!-- // ここでプロフィールコンテンツのPHPを呼び出す。 -->
    <?php get_template_part('page-profileTemplates/profileContents'); ?>



    <?php get_footer(); ?>