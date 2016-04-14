//setup script
( function( $ ) {
	
	$window = $(window);
	$slide = $('.homeSlide');
	$body = $('body');
	
	$body.imagesLoaded( function() {
		setTimeout(function() {
			if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
		      	adjustWindow();
		  	}
		      
			$body.removeClass('loading').addClass('loaded'); 
		}, 800);
	});

	if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
		function adjustWindow(){
			var s = skrollr.init({
		        forceHeight: false
		    });

		    skrollr.menu.init(s, {
				change: function(hash, top) {
					console.log(hash, top);
				},
				duration: function(currentTop, targetTop) {
			        return 1000;
			    },
			    updateUrl:false
			});
			
		    winH = $window.height();
		    if(winH <= 550) {
				winH = 550;
			} 
		    
		    $slide.height(winH);
		    s.refresh($('.homeSlide'));
		}
	}	
} )( jQuery );