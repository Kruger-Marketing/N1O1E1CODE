/*MENU CARTA*/


var widthVentana = $(window).width();

if (widthVentana < 768){
	
	
	$('.divCategoria').hide();
	$('#cartaArrows').mouseover(function(){
		$('#cartaMenu').removeClass('fadeOut');
		$('#cartaMenu').show();
		$('#cartaArrows > i').addClass('fa-plus-circle');	
		
		});
	$('#cartaArrows').mouseleave(function(){
		$('#cartaMenu').addClass('fadeOut');
		
	});	
	
	
	}

if (widthVentana > 768){
	//Muestra u oculta caterias del Menu de la carta
	$('.divCategoria').hide();
	$('#cartaArrows').mouseover(function(){
		$('#cartaMenu').removeClass('fadeOut');
		$('#cartaMenu').show();
		$('#cartaArrows > i').removeClass('fa-plus-circle');
		});
	$('#cartaArrows').mouseleave(function(){
		$('#cartaMenu').addClass('fadeOut');
		$('#cartaArrows > i').addClass('fa-plus-circle');
	});	
	}


//Funcion llamada desde HTML
function showCarta(variable) {
	var id = variable;
	$(".divCategoria").hide();
	$("#" + id).show();
	$('#cartaMenu').hide();
	$('.carta').css({
		"background-image": "none"
		});
	}