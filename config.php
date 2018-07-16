<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function hCabeza(){
	global $nameCompany;
	global $descripCompany;
	global $author;
	global $url;
	?>
	<meta charset="utf-8">
    <title><?= $nameCompany; ?></title>
    <meta name="description" content="<?= $descripCompany; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $author;?>">
    <meta property="og:image" content=""/>
    <base href="<?= $url; ?>" />  
	<?php
	}
//BASICOS
function hFavicon(){
	?>
	<!--ALL FAV ICON-->
	<link href="media/img/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="media/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="media/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="media/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="media/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="media/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="media/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="media/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="media/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="media/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="media/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="media/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="media/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="media/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
}
function hBootstrap(){
	?>
	<!--BOOTSTRAP MIN-->		<link rel="stylesheet" href="css/basic/bootstrap.min.css" crossorigin="anonymous">
	<?php
}
function fBootstrap(){
	?>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php
}
function hBasic(){
	?>
	<!--INICIADOR CSS-->		<link rel="stylesheet" href="css/basic/ini.css">
	<!--ANIMATE CSS-->			<link rel="stylesheet" href="css/basic/animate.min.css">
    <!--HOVER CSS-->			<link rel="stylesheet" href="css/basic/hover.css">
	<!--FONTAWESOME CSS-->		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--MAIN CSS-->				<link rel="stylesheet" href="css/basic/main.css">
	<?php
}
//ADICIONALES DE ESTA WEB
function hCarta(){
	?>
	<!--CARTA NOE CSS-->		<link rel="stylesheet" href="css/thisweb/carta.css">
	<?php
}
function hLocales(){
	?>
	<!--LCOALES NOE CSS-->		<link rel="stylesheet" href="css/thisweb/locales.css">
	<?php
}
function fMainJs(){
	?>
	<!--Used throughout the website-->
	<!--MAIN JS-->		<script src="js/main.js"></script>
	<?php
}
function fGoToDivIndex(){
	?>
	<!--goToDiv Index JS-->		<script src="js/index/goToDiv-index.js"></script>
	<?php
}
function fMenuCarta(){
	?>
	<!--Menu Carta NOE JS-->		<script src="js/thisweb/menuCarta.js"></script>
	<?php
}
function fContadorSocial(){
	?>
	<!--Requerido-->					<script src="js/socialCounter/api.js"></script>
	<!--Contador de Redes Script-->		<script src="js/thisweb/contadorSocial.js"></script>
	<?php
}
function fScrollerSprite(){
	?>
	<!--Requiere fScrollMagic();-->	
	<!--Contador de Redes Script-->		<script src="js/thisweb/scrollerSprite.js"></script>
	<?php
}
function hSEO(){
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WVS96H6');</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-880133-36"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-880133-36');
	</script>
	<?php
}
function fSEO(){
	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVS96H6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Quantcast Tag -->
	<script type="text/javascript">
	var _qevents = _qevents || [];

	(function() {
	var elem = document.createElement('script');
	elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
	elem.async = true;
	elem.type = "text/javascript";
	var scpt = document.getElementsByTagName('script')[0];
	scpt.parentNode.insertBefore(elem, scpt);
	})();

	_qevents.push({
	qacct:"p-bfFnt6Ra1AMLh"
	});
	</script>

	<noscript>
	<div style="display:none;">
	<img src="//pixel.quantserve.com/pixel/p-bfFnt6Ra1AMLh.gif" border="0" height="1" width="1" alt="Quantcast"/>
	</div>
	</noscript>
	<!-- End Quantcast tag -->
	<?php
}
//ADICIONALES EXTERNO
function hVideosSlider(){
	?>
	<!--VIDEO SLIDER CSS-->		<link rel="stylesheet" href="css/videoSlider/slick.css">
	<?php
}
function fVideosSlider(){
	?>
	<!--VIDEO SLIDER ASSETS-->	<script src="js/videoSlider/slick.js"></script>
	<!--VIDEO SLIDER SCRIPT-->	<script src="js/videoSlider/video.js"></script>
	<?php
}
function fMouseWheel(){
	?>
	<!--MOUSE WHEEL DETECTOR-->	<script src="js/mouseWheel/jquery.mousewheel.js"></script>
	<!--ON SCREEN DETECTOR-->	<script src="js/mouseWheel/js.isonscreen.js"></script>
	<?php
}
function fTextillate(){
	?>
	<!--TEXT ANIMATOR-->		<script src="js/textillate/jquery.fittext.js"></script>
	<!--TEXT ANIMATOR-->		<script src="js/textillate/jquery.lettering.js"></script>
	<!--TEXT ANIMATOR-->		<script src="js/textillate/jquery.textillate.js"></script>
	<?php
}
function fScrollMagic(){
	?>
	<!--Scroll Magic-->			<script src="js/scrollMagic/ScrollMagic.min.js"></script>
	<!--Plugin Scroll Magic-->	<script src="js/scrollMagic/debug.addIndicators.min.js"></script>
	<?php
}
?>