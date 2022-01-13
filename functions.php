<?php

function custom_theme_setup()
{
    add_theme_support("automatic-feed-links");
    add_theme_support("title-tag");
    add_theme_support("responsive-embeds");
}
add_action("after_setup_theme", "custom_theme_setup");

//CSS読み込み
function my_scripts()
{
    // サイト共通のcssの読み込み
    wp_enqueue_style('style-name', get_template_directory_uri() . '/style.css', array(), '');
    // swiper cssの読み込み
    wp_enqueue_style('swiper-css', get_template_directory_uri() . 'css/swiper.min.css', array(''), '', true);

    // font-awesomeの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');

}
add_action('wp_enqueue_scripts', 'my_scripts');

//JS読み込み
function js_scripts()
{


    // swiper JS読み込み
    wp_enqueue_script('swiper', get_template_directory_uri() . './js/swiper.js', array('swiper-cdn'), '', true);
    wp_enqueue_script('swiper-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js', array('script'), '', true);


    //JS読み込み
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/main.js',
        array(),
        "1.0",
        true
    );

    wp_enqueue_script(
        'slide',
        get_template_directory_uri() . './js/slide.js',
        array(),
        "1.0",
        true
    );
    wp_enqueue_script(
        'fancybox',
        get_template_directory_uri() . './js/jquery.fancybox-1.3.4.js',
        array(),
        "1.0",
        true
    );
    wp_enqueue_script(
        'jquery.masonry',
        get_template_directory_uri() . './js/jquery.masonry.js',
        array(),
        "1.0",
        true
    );
    wp_enqueue_script(
        'preloader',
        get_template_directory_uri() . './js/jquery.preloader.js',
        array(),
        "1.0",
        true
    );

}
add_action('wp_enqueue_scripts', 'js_scripts');



// アイキャッチ画像を有効
add_theme_support('post-thumbnails');


