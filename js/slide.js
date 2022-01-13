
jQuery(window).load(function(){
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
	jQuery("#body li a").click(function(){
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
	  if(jQuery('#loop').offset().top - jQuery(window).scrollTop() < -500){
		jQuery(window).scrollTop(((jQuery('#loop').offset().top - jQuery(window).scrollTop())* -1) + 1);
	  }
	  
	  if( jQuery.agent.search(/iphone/i) == -1 && jQuery.agent.search(/Mobile/i) == -1 || jQuery.agent.search(/iPad/i) != -1){
		  if(jQuery(window).scrollTop() <= 0){
			  jQuery(window).scrollTop(jQuery('#loop').offset().top - 5);
		  }
	  }
  }

});

jQuery(function(){
	jQuery("#body a.images").fancybox({
		'padding':0,
		'margin':0,
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
		'overlayColor'  :   '#fff',
		'showCloseButton'	: false,
		'overlayOpacity':1,
		'titlePosition' 		: 'inside',
		'titleFormat'		: formatTitle,
		'onClosed':function(){
			jQuery.isScroll = true;
			jQuery("body").css("overflow","visible");
		}
	});
	
	jQuery("#body a.vimeo").fancybox({
		'padding':0,
		'margin':0,
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
		'overlayColor'  :   '#fff',
		'showCloseButton'	: false,
		'overlayOpacity':1,
		'type'			: 'iframe',
		'width'			: 960,
		'height'		: 540,
		'onClosed':function(){
			jQuery.isScroll = true;
			jQuery("body").css("overflow","visible");
		}
	});
});

/*photo*/
function formatTitle(title, currentArray, currentIndex, currentOpts) {
	if(currentIndex == currentArray.length - 1 ){
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　<a href="javascript:void(0);" onclick="$.fancybox.prev();">PREV</a>' + ' / '+ 'NEXT' + '</div>';
	}else if(currentIndex == 0){
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　PREV' + ' / '+ '<a href="javascript:void(0);" onclick="$.fancybox.next();">NEXT</a>' + '</div>';
	}else{
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　<a href="javascript:void(0);" onclick="$.fancybox.prev();">PREV</a>' + ' / '+ '<a href="javascript:;" onclick="$.fancybox.next();">NEXT</a>' + '</div>';
	}
}