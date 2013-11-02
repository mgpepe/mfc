var ScrollManager = (function(){
	var currentSection = 'intro';
	function killIt(item){
		$('#'+item).fadeOut(1000);
	}	
	function setMenuTo(scrollness){
		resetMenu();
		if(scrollness<1750){
			// Nothing happens;
		}else if(scrollness<3224){
			$('#menu-link-foodmenu').addClass('active');
		}else if (scrollness<4300){
			$('#menu-link-photos').addClass('active');
		}else if (scrollness<5400){
			$('#menu-link-contactus').addClass('active');
		}else{
			$('#menu-link-about').addClass('active');
		}
		
	}
	function resetMenu(){
		$('#p-menu').find('li').find('a').removeClass('active');
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
						var h = $(window).height();
						var w = $(window).width();

							$("#page1").css("height", 1200);
							$("#page2").css("height", 700);
							$("#page3").css("height", 1500);
							$("#page4").css("height", 1000);
							$("#page5").css("height", 1200);
							$("#page6").css("height", 1000);
						

						if (w < 1024) {
							$(".pageblock").css("width", 990);
						}else{
							$(".pageblock").css("width", w); 
						}
						
						$(".pageblock").css("background-position");
					}
					
					$.localScroll({
					   axis:'y',
					   queue:true //one axis at a time
					});
				});
		},
		
	}
}());
ScrollManager.init();