<?php 
//CONFIGURACION
require('config.php');
require('language/language.php');
//CONTENIDO BASICO
require('content/menu.php');
//CONTENIDO INDEX
include('content/nosotros/nosotros.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	hCabeza(); hFavicon(); hBootstrap(); hBasic();
	hCarta();
	hVideosSlider();
	hSEO();
	?>
</head>
<body id="cuerpo">	
	
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
		<!--CONTADOR---------------------->
        <section class="section-scroll">
            <?php contador();?>
        </section>
        <!--END CONTADOR------------------>
		<!--VIDEOS---------------------->
        <section class="section-scroll">
            <?php videos();?>
        </section>
        <!--END VIDEOS------------------>
		<!--PIE---------------------->
        <section class="section-scroll">
            <?php pie();?>
        </section>
        <!--END PIE------------------>
    </div>
    <!--END PAGE-->
	<!--END PAGE-->
	<?php 
		fBootstrap();
		fMainJs();
		fContadorSocial();
		fVideosSlider();
		fSEO();
	?>
</body>
</html>
