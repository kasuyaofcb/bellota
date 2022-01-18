'use strict'

{
//画面遷移時のフェードアウト
let body = document.getElementsByTagName('body')[0];

function fadeOut() {
    body.classList.add('bodyfadeout');
}

function linkUrl() {
    location.href = "http://bellota.wp/gallery/"
}
let bt5 = document.querySelector('.cover__target');
let cover = document.querySelector('.cover');
bt5.addEventListener('click', function() {
    console.log("hello");
    cover.classList.add('anime5');
    setTimeout(fadeOut, 1500);
    setTimeout(linkUrl, 2500);
});


}