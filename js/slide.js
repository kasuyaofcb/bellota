'use strict'
{

jQuery(window).load(function(){
   
	// 自動スクロール
	jQuery.autoScroll();
 
});

jQuery.extend({
	isScroll : true,
	autoScroll : function(){
		var timer = window.setInterval(function(){
			if (window.matchMedia('(max-width: 600px)').matches) {
				//レスポンシブで自動スクロールキャンセル
				return;
			}
			if(jQuery.isScroll){
				jQuery(window).scrollTop(jQuery(window).scrollTop() + 1);
				
			};
		},40);		
	}
});

jQuery(window).load(function(){
  
	const html = document.querySelector('html');
	const bodyHeight = document.body.clientHeight;
	const windowHeight = window.innerHeight;
	const bottomPoint = bodyHeight - windowHeight
	const loopTargetPoint = bottomPoint - 60; //最下部の位置を微調整 スクリーンの大きさにより反応しない時の対策
	

	window.addEventListener('scroll', () => {
		const currentPos = window.pageYOffset // スクロール量を取得
		if (loopTargetPoint <= currentPos) { // スクロール量が最下部の位置を過ぎたかどうか
			// console.log("hello");
		  window.scrollTo({
			top: 0,
		  });
		}
	  })
	
	});

// ポップアップをキャンセル消した時に自動スクロールを再開出来ないので、maskを一枚挟んでいる。
$('.fancybox').click(function() {
	jQuery.isScroll = false;
	$('.mask').addClass('mask--active');
	
});
$('.mask').click(function() {

	jQuery.isScroll = true;
	$('.mask').removeClass('mask--active');
});

//over-layが反応しない。。。
// $('#fancybox-overlay').click(function() {

// 	console.log("今、押したよ！！");
// });


//ポップアップで横スクロールストップ
$('.scroll-boxSp').click(function() {
	$('.scroll__wrapperSp').removeClass('scroll__wrapperSp--stop');
});

$('.mask').click(function() {
	$('.scroll__wrapperSp').addClass('scroll__wrapperSp--stop');


});

}