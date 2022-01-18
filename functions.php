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
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

    // font-awesomeの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');

    // fancyboxの読み込み
    wp_enqueue_style('fancy-box', get_template_directory_uri() . '/fancybox/css/jquery.fancybox.min.css', array(), '');
    // fancyboxの読み込み
    wp_enqueue_style('fancy-box-layout', get_template_directory_uri() . '/fancybox/css/fancybox.css', array(), '');
}
add_action('wp_enqueue_scripts', 'my_scripts');

//JS読み込み

if (!is_admin()) {
    function register_script()
    {
        wp_register_script(
            'main',
            get_template_directory_uri() . './js/main.js',
            array(),
            "1.0",
            true
        );
        wp_register_script(
            'slide',
            get_template_directory_uri() . './js/slide.js',
            array('jquery'),
            "1.0",
            true
        );
        wp_register_script(
            'fadeoutTop',
            get_template_directory_uri() . './js/fadeoutTop.js',
            array('jquery'),
            "1.0",
            true
        );
        wp_register_script(
            'jquery.fancybox-1.3.4',
            get_template_directory_uri() . './js/jquery.fancybox-1.3.4.js',
            array('jquery'),
            "1.0",
            true
        );
        wp_register_script(
            'jquery.preloader',
            get_template_directory_uri() . './js/jquery.preloader.js',
            array('jquery'),
            "1.0",
            true
        );
        wp_register_script(
            'swiper',
            get_template_directory_uri() . './js/swiper.js',
            array('swiper-cdn'),
            '',
            true
        );
        wp_register_script(
            'swiper-cdn',
            'https://unpkg.com/swiper@7/swiper-bundle.min.js',
            array('jquery'),
            '',
            true
        );
    }
    function add_script()
    {
        register_script();
        // 全ページ共通
        wp_enqueue_script('main');
        // TOPページ専用
        if (is_front_page()) {
            wp_enqueue_script('swiper-cdn');
            wp_enqueue_script('swiper');
            wp_enqueue_script('fadeoutTop');
        } elseif (is_page(array(56))) {
            // 固定ページIDが“56”(詳細ページ）専用
            wp_enqueue_script('slide');
            wp_enqueue_script('jquery.preloader');
            wp_enqueue_script('jquery.fancybox-1.3.4');
        } elseif (is_page(array(60))) {
            // 固定ページIDが“60”(詳細ページ)専用
            wp_enqueue_script('slide');
            wp_enqueue_script('jquery.preloader');
            wp_enqueue_script('jquery.fancybox-1.3.4');
        } elseif (is_page(array(53))) {
            // 固定ページIDが“53”(詳細ページ)専用
            wp_enqueue_script('slide');
            wp_enqueue_script('jquery.preloader');
            wp_enqueue_script('jquery.fancybox-1.3.4');
        } elseif (is_page(array(63))) {
            // 固定ページIDが“63”(詳細ページ)専用
            wp_enqueue_script('slide');
            wp_enqueue_script('jquery.preloader');
            wp_enqueue_script('jquery.fancybox-1.3.4');
        }
    }
    add_action('wp_print_scripts', 'add_script');
}


//jQuery呼び出し
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js', array(), '1.11.1');



// アイキャッチ画像を有効
add_theme_support('post-thumbnails');




//カスタム投稿タイプ（ショップギャラリー）
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('shop-gallery', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'ショップギャラリー', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'shop-gallery',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    ]);
}
