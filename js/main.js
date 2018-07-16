/*READY DOCUMENT*/


$(document).ready(function(){
	$('body').addClass('preloader-site');

		
	/*ToolTips Bootstrap*/
	$('[data-toggle="tooltip"]').tooltip();
	///
	
	var widthVentana = $(window).width();
	
	/*FUNCION jquery*/
	function jquery(){
		if (widthVentana > 768){
				
			}
		/*Video Background*/
			//Funciones de Video Background
			scaleVideoContainer();
			initBannerVideoSize('.video-container .poster img');
			initBannerVideoSize('.video-container .filter');
			initBannerVideoSize('.video-container video');
			///	
		}
	///
	
	jquery();
	
	/*LISTEN RESIZE WINDOW*/
	$(window).resize(function(){
		//If window resize
		if($(window).width()!=widthVentana){
			location.reload();
			widthVentana = $(window).width();
			/*Video Background*/
			//Funciones de Video Background
			scaleVideoContainer();
			scaleBannerVideoSize('.video-container .poster img');
			scaleBannerVideoSize('.video-container .filter');
			scaleBannerVideoSize('.video-container video');
			///
			}
		///
		}) 
	///
	});
///End Ready Document

window.onload = function() {
  $('.preloader-wrapper').hide();
    $('body').removeClass('preloader-site');
}



/*Video Background*/
//Funciones de Video Background
function scaleVideoContainer() {
    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);
	}
function initBannerVideoSize(element){
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });
    scaleBannerVideoSize(element);
	}
function scaleBannerVideoSize(element){
    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;
    // console.log(windowHeight);
    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');
        $(this).width(windowWidth);
        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
            $(this).width(videoWidth).height(videoHeight);
        	}
        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
    	});
	}
//