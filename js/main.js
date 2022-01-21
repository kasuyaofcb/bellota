'use strict'
{
//ハンバーガーメニュー
jQuery(function($){
    $(window).load(function(){


    $('.ham__target').click(function() {
        $(this).toggleClass('active');
        $('.accordion__target').toggleClass('accordion__target--active');
        $('.target__line1').toggleClass('target__line1--active');
        $('.target__line2').toggleClass('target__line2--active');
        $('.target__line3').toggleClass('target__line3--active');
        $('.target__line').toggleClass('target__line--active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });

    $('.globalMenuSp').click(function() {
        $(this).toggleClass('active');
        $('.accordion__target').toggleClass('accordion__target--active');
        $('.target__line1').toggleClass('target__line1--active');
        $('.target__line2').toggleClass('target__line2--active');
        $('.target__line3').toggleClass('target__line3--active');
        $('.target__line').toggleClass('target__line--active');
        if ($(this).hasClass('active')) {
            $('.ham__target').addClass('active');
        } else {
            $('.ham__target').removeClass('active');
           
        }
    });
    $('.accordion__target').click(function() {
        $('.sub__box').toggleClass('accordion--open');
        $('.line2').toggleClass('line2--active');

    });
});
});


 
}