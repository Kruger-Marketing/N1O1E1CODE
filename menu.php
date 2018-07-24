<?php 
//CONFIGURACION
require('config.php');
require('language/language.php');
//CONTENIDO BASICO
require('content/menu.php');
//CONTENIDO INDEX
include('content/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	hCabeza(); hFavicon(); hBootstrap(); hBasic();
	hCarta();
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
		fSEO();
	
	//MENU CATEGORIAS POR URL
	$categoriaURL=$_GET["categoria"];
	if($categoriaURL){
		?> 
		<script type="text/javascript">
		showCarta('<?php echo $categoriaURL; ?>');
		</script>
		<?php
		}	
	?>
</body>
</html>
