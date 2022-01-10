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
    // サイト共通のCSSの読み込み
    wp_enqueue_style('style-name', get_template_directory_uri() . '/style.css', array(), '');
    // swiper JSの読み込み
    wp_enqueue_style('swiper-css', get_template_directory_uri() . 'css/swiper.min.css', array(''), '', true);
    // swiper JSの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
}
add_action('wp_enqueue_scripts', 'my_scripts');

//JS読み込み
function js_scripts()
{
    // swiper JS読み込み
    // wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array('script'), '', true);

    //JS読み込み
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/main.js',
        array(),
        "1.0",
        true
    );
}
add_action('wp_enqueue_scripts', 'js_scripts');


// // サイト共通のフォントの読み込み
// function my_scriptsfont()
// {
//     wp_enqueue_style('google-webfont-style', '//fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap');
// }
// add_action('wp_enqueue_scripts', 'my_scriptsfont');


//jQuery読み込み

function my_jquery()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('javascript', get_template_directory_uri() . '/js/javascript.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'my_jquery');
