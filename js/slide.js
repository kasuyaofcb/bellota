'use strict'
{

	jQuery(window).load(function () {
		// 自動スクロール
		jQuery.autoScroll();
	});

	jQuery.extend({
		isScroll: true,
		autoScroll: function () {
			var timer = window.setInterval(function () {
				if (window.matchMedia('(max-width: 600px)').matches) {
					//レスポンシブで自動スクロールキャンセル
					return;
				}
				if (jQuery.isScroll) {
					jQuery(window).scrollTop(jQuery(window).scrollTop() + 1);
				};
			}, 40);
		}
	});

	jQuery(window).load(function () {
		const html = document.querySelector('html');
		const bodyHeight = document.body.clientHeight;
		const windowHeight = window.innerHeight;
		const bottomPoint = bodyHeight - windowHeight
		const loopTargetPoint = bottomPoint - 15; //最下部の位置を微調整 スクリーンの大きさにより反応しない時の対策
		window.addEventListener('scroll', () => {
			const currentPos = window.pageYOffset // スクロール量を取得
			if (window.matchMedia( "(max-width: 600px)" ).matches) {
				return;
			}
			if (loopTargetPoint <= currentPos) { // スクロール量が最下部の位置を過ぎたかどうか
				window.scrollTo({
					top: 0,
				});
			}
		})
	});

	// ポップアップで縦スクロールストップ。
	$('.fancybox').click(function () {
		jQuery.isScroll = false;
	});

	// //ポップアップで横スクロールストップ
	// $('.scroll-boxSp').click(function () {
	// 	$('.scroll__wrapperSp').addClass('scroll__wrapperSp--stop');
	// });


	//ポップアップをキャンセルすると縦スライド再開
$(function () {
	$(document).on('click', '#fancybox-overlay', function () {
		if ($(this).css("display") == "block") {
			jQuery.isScroll = true;
			if ($('.scroll__wrapperSp').hasClass('scroll__wrapperSp--stop')) {
				$('.scroll__wrapperSp').removeClass('scroll__wrapperSp--stop');
			}
		} else {
			jQuery.isScroll = false;
		}
	});
});

$(function () {
	$(document).on('click', '#fancybox-close', function () {
		if ($("#fancybox-overlay").css("display") == "block") {
			jQuery.isScroll = true;
			if ($('.scroll__wrapperSp').hasClass('scroll__wrapperSp--stop')) {
				$('.scroll__wrapperSp').removeClass('scroll__wrapperSp--stop');
			}
		} else {
			jQuery.isScroll = false;
		}
	});
});


//横スクロール無限ループ
let scrollArea = document.querySelector(".scroll__wrapperSp"); 

scrollArea.onscroll = function(){
	let a = scrollArea.scrollWidth;
	let getLeftPosition = scrollArea.scrollLeft;
	let total = getLeftPosition + screen.width;
	
	if(a - total <= 20){ //素早くスクロールして引っかかるのを防ぐ為、20の数値で微調整。
		scrollArea.scrollLeft = 0;
	}
	if(getLeftPosition <= 5){
		document.querySelector(".fa-angle-double-right").classList.remove("arrow__right--active");
	}else{
		document.querySelector(".fa-angle-double-right").classList.add("arrow__right--active");
	}
}

}