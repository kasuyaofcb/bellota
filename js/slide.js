
jQuery(window).on('load',function(){
	// 自動スクロール
	jQuery.autoScroll();
	
});

jQuery.extend({
	isScroll : true,
	agent : navigator.userAgent,
	autoScroll : function(){
	  if( jQuery.agent.search(/iPad/i) == -1 && jQuery.agent.search(/iphone/i) == -1 && jQuery.agent.search(/Mobile/i) == -1){
			var timer = window.setInterval(function(){
				if(jQuery.isScroll){
					if(jQuery('#loop').length > 0){
						jQuery(window).scrollTop(jQuery(window).scrollTop() + 1);
					}
				};
			},40);
	  }
	}
});

/* 初期設定 */
jQuery(function(){
	jQuery("#body li").click(function(){
		jQuery.isScroll = false;
		
		// スクロールバー非表示
		jQuery("body").css("overflow","hidden")
	});
	
});

// jQuery(function(){
// 	jQuery("div").on('click', '.fancybox-container',function(){
// 		jQuery.isScroll = true;
		
// 		// スクロールバー非表示
// 		jQuery("body").css("overflow","visible")
// 	});
	
// });


 
/*rollover*/
jQuery(function(){
	jQuery('body:not(.index) nav ul li:not(.nav_on),').fadeTo(0,0.5);
	jQuery('.always li').fadeTo(0,1);
	
	jQuery('body:not(.index) nav ul li:not(.nav_on)').hover(function() {
		jQuery(this).stop().fadeTo(200,1);
	}, function() {
		jQuery(this).stop().fadeTo(200,0.5);
	});
	
	jQuery('.always li').hover(function() {
		jQuery(this).siblings().stop().fadeTo(200,0.5);
		jQuery(this).stop().fadeTo(200,1);
	}, function() {
		jQuery('.always li').stop().fadeTo(200,1);
	});

});

/*scroll*/
jQuery(window).scroll(function () {
  if(jQuery('#loop').length > 0){
	  if(jQuery('#loop').offset().top - jQuery(window).scrollTop() < 0){
		jQuery(window).scrollTop(((jQuery('#loop').offset().top - jQuery(window).scrollTop())* -1) + 1);
	  }
	  
	  if( jQuery.agent.search(/iphone/i) == -1 && jQuery.agent.search(/Mobile/i) == -1 || jQuery.agent.search(/iPad/i) != -1){
		  if(jQuery(window).scrollTop() <= 0){
			  jQuery(window).scrollTop(jQuery('#loop').offset().top - 5);
		  }
	  }
  }

});
