<?php 
//CONFIGURACION
require('config.php');
require('language/language.php');
//CONTENIDO BASICO
require('content/menu.php');
//CONTENIDO INDEX
include('content/menu/plato.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
	hCabeza(); hFavicon(); hBootstrap(); hBasic();
	hCarta();
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
        <!--PLATO---------------------->
        <section class="section-scroll">
            <?php plato();?>
        </section>
        <!--END PLATO------------------>
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
		fMenuCarta();
	?>
</body>
</html>
