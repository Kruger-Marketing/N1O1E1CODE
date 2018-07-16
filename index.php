<?php 
//CONFIGURACION
require('config.php');
require('language/language.php');
//CONTENIDO BASICO
require('content/menu.php');
//CONTENIDO INDEX
include('content/index/index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	hCabeza(); hFavicon(); hBootstrap(); hBasic();
	hCarta();
	hLocales();
	hSEO();
	?>
</head>	
<body id="cuerpo">
	<!--PRECARGADOR-->
	<?php loader();?>
	<!--END PRECARGADOR-->
	<!--PAGE-->
    <div id="mainStack" class="scroll-container ">
		<!--MENU---------------------->
        <section id="menu" class="section-scroll fixed-top w-100">
            <?php menu();?>
        </section>
        <!--END MENU------------------>
        <!--INTRO---------------------->
        <section class="section-scroll">
            <?php intro();?>
        </section>
        <!--END INTRO------------------>
		<!--SCROLLER---------------------->
        <section class="scene section d-none d-md-block" id="sticky">
		  <div class="viewer"></div>
		</section>
        <!--END SCROLLER------------------>
		<!--SUGERENCIAS------------------->
        <section class="section-scroll">
            <?php sugerencia();?>
        </section>
        <!--END SUGERENCIAS-------------->
		<!--LOCALES---------------------->
        <section id="locales" class="section-scroll">
            <?php locales();?>
        </section>
        <!--END LOCALES-------------->
		<!--PIE---------------------->
        <section class="section-scroll">
            <?php pie();?>
        </section>
        <!--END PIE------------------>
    </div>
    <!--END PAGE-->
	<?php 
		fBootstrap();
		fMainJs();
		fScrollMagic();
		fScrollerSprite();
		fSEO();
	?>
</body>
</html>
