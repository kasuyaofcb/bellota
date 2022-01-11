// jQuery(function(){
// 	/*縦書き*/
// 	 (new Taketori()).set({lang:'ja-jp',fontFamily:'serif',togglable:false,height:'360px'}).element('#logo','#profile').toVertical(false);
// });

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
	jQuery("#body article a").click(function(){
		jQuery.isScroll = false;
		
		// スクロールバー非表示
		jQuery("body").css("overflow","hidden")
	});
	
	//モバイル端末の場合は位置を設定
	if(jQuery.agent.search(/iPad/i) != -1){
		jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:0});
		jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80},{duration:0});
		jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40},{duration:0});
	}else if(jQuery.agent.search(/iphone/i) != -1){
		if(jQuery(window).height() <= 480){
			jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:0});
			jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80 + 20},{duration:0});
			jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40 + 20},{duration:0});
		}else{
			jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:0});
			jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80 },{duration:0});
			jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40 },{duration:0});
		}
	}else if(jQuery.agent.search(/Mobile/i) != -1){
		jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:0});
		jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80},{duration:0});
		jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40},{duration:0});
	}
});
 
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
  
  //モバイル端末の判定
  if(jQuery.agent.search(/iPad/i) != -1){
	  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
	  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80},{duration:500},"swing");
	  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40},{duration:500},"swing");
  }else if(jQuery.agent.search(/iphone/i) != -1){
	  if(jQuery(window).scrollTop() == 0){
		  if(jQuery(window).height() <= 480){
			  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
			  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80 + 20},{duration:500},"swing");
			  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40 + 20},{duration:500},"swing");
		  }else{
			  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
			  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80},{duration:500},"swing");
			  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40},{duration:500},"swing");
		  }
	  }else{
		if(jQuery(window).height() <= 480){
		  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
		  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80 + 140},{duration:500},"swing");
		  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40 + 140},{duration:500},"swing");
		}else{
		  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
		  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80 + 180},{duration:500},"swing");
		  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40 + 180},{duration:500},"swing");
		}
	  }
  }else if(jQuery.agent.search(/Mobile/i) != -1){
	  jQuery("header").stop().animate({"top":jQuery(window).scrollTop() + 40},{duration:500},"swing");
	  jQuery("nav").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("nav article").height() - 80},{duration:500},"swing");
	  jQuery("footer").stop().animate({"top":jQuery(window).scrollTop() + jQuery(window).height() - jQuery("footer p").height() - 40},{duration:500},"swing");
  }
  
});

/*photo*/
function formatTitle(title, currentArray, currentIndex, currentOpts) {
	if(currentIndex == currentArray.length - 1 ){
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　<a href="javascript:void(0);" onclick="jQuery.fancybox.prev();">PREV</a>' + ' / '+ 'NEXT' + '</div>';
	}else if(currentIndex == 0){
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　PREV' + ' / '+ '<a href="javascript:void(0);" onclick="jQuery.fancybox.next();">NEXT</a>' + '</div>';
	}else{
		return '<div>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' ' + (currentIndex + 1) + ' of ' + currentArray.length + '　<a href="javascript:void(0);" onclick="jQuery.fancybox.prev();">PREV</a>' + ' / '+ '<a href="javascript:;" onclick="jQuery.fancybox.next();">NEXT</a>' + '</div>';
	}
}

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

/* contact */
jQuery(function(){
	if(jQuery(".contact").length > 0){
		jQuery(".send").click(function() {
			jQuery("#body input").removeClass("check");
			jQuery("#body textarea").removeClass("check");
			
			if(jQuery("#form_name").val().length <= 0){
				jQuery("#form_name").addClass("check");
			}
			
			if(jQuery("#form_mail").val().length <= 0){
				jQuery("#form_mail").addClass("check");
			}
			
			if(jQuery("#form_body").val().length <= 0){
				jQuery("#form_body").addClass("check");
			}
			
			if(jQuery(".check").length > 0){
				return;
			}
			
			jQuery.ajax({
				url: "sendmail.php",  	// リクエストURL
				type: "POST",
				async : false,
				data: {					// 送信データ
					"name": jQuery(":input:eq(0)").val(),
					"mail": jQuery(":input:eq(1)").val(),
					"body": jQuery(":input:eq(2)").val()
				},
				dataType: "text",                                 // jsonp
				success: function() {               // 通信成功時にデータを表示
					jQuery("#body").children().remove();
					jQuery("#body").append('<p class="end">メールが送信されました。</p>');
					center();
				}
			});
			return false;
		});
	}
	
	/* center */
	var center = function(){
		var left = Math.floor((jQuery(window).width() - jQuery(".center").width()) / 2);  
    	var top  = Math.floor((jQuery(window).height() - jQuery(".center").height()) / 2);  
    	jQuery(".center")  
        	.css({
            "top": top,  
            "left": left 
         });
	}
	jQuery(window).resize(function(){
		 center();
	});
	center();
});  

/*float*/
jQuery(function(){
	jQuery('body.portfolio #body').masonry(); 
	jQuery("#body").css("height","100%");
});

/*preloader*/
jQuery(function(){
	jQuery("#body").preloader();
});

/*fead*/
jQuery(function(){
	jQuery('#body').hide();
});
	
jQuery(window).on('load',function(){
	jQuery('#body').fadeTo("slow",1);
});

/*share*/

jQuery(function(){
	jQuery('#sharebtn').hide();
	jQuery('#share').hover(function() {
		jQuery('#sharebtn').fadeIn(200);
	}, function() {
		jQuery('#sharebtn').fadeOut(200);
	});
});