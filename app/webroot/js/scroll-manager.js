var ScrollManager = (function(){
	var currentSection = 'intro';
	var setFoodSubmenuForOn = false;
	var foodMenuIs = false;
	var screenHeight = 0;
	var scrollingToTop = false;
	function killIt(item){
		$('#'+item).fadeOut(1000);
	}	
	function setMenuTo(scrollness){
		if(scrollness==0) scrollingToTop=false;
		resetMenu();
		setFoodSubmenuForOn = false;
		if(scrollness<1750){
			// Nothing happens;
		}else if(scrollness<3224){
			$('#menu-link-foodmenu').addClass('active');
			setFoodSubmenuForOn = true;
		}else if (scrollness<4300){
			$('#menu-link-photos').addClass('active');
		}else if (scrollness<5400){
			$('#menu-link-contactus').addClass('active');
		}else{
			$('#menu-link-about').addClass('active');
		}
		if(scrollness>6000 && scrollingToTop==false){
			scrollingToTop=true;
			$('html,body').animate({scrollTop: 0}, 1000);
		}
		if(foodMenuIs!=setFoodSubmenuForOn){
			var margin= '';
			if(!setFoodSubmenuForOn){
				margin = '-100px';
			}else{
				margin = '90px';
			}
			// $('#food-subnav').show();
			$('#food-subnav').animate({'margin-top':margin});
			foodMenuIs=setFoodSubmenuForOn;
		}
	}
	function resetMenu(){
		$('#p-menu').find('li').find('a').removeClass('active');
	}
	function scrollComplete(e){
		console.log('da');
	}

	return {
		publicvar:null,
		init:function(){
			// Attach listener for menu
		    $( document ).scroll(function(e) {
		    	setMenuTo( $(this).scrollTop() );
		    });
		   
		    // 
			$(document).ready(function(){
				setMenuTo( $(this).scrollTop() );
				jQuery.event.add(window, "load", resizeFrame);
				jQuery.event.add(window, "resize", resizeFrame);

				function resizeFrame(){
					var h =screenHeight= $(window).height();
					var w = $(window).width();

						$("#page1").css("height", 1200);
						$("#page2").css("height", 700);
						$("#page3").css("height", 1500);
						$("#page4").css("height", 1000);
						$("#page5").css("height", 1200);
						$("#page6").css("height", 1200);
					

					if (w < 1024) {
						$(".pageblock").css("width", 990);
					}else{
						$(".pageblock").css("width", w); 
					}
					
					$(".pageblock").css("background-position");
				}
				// Activate scroll links
				$('.localscroll').localScroll({
				   axis:'y',
				   queue:true //one axis at a time
				});
				// bounce little arrow
				var flag = -1;
				var timer =  null;
				var bounce = null;
					(bounce = function () {
					timer = setInterval(function() {
						flag = ~flag + 1;
						$('#the-down-arrow').animate({ 
							'top': "+="+(flag*20)
						}, 800)
					},800);
				})();
			});
		},
		
	}
}());
ScrollManager.init();