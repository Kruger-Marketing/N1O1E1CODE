<?php
$a= $_GET["valor"];

function plato(){
	global $a;
	if($GLOBALS['carta'.$a]['clase']=="Sugerencias del Chef"){ $id =$GLOBALS['cartaClase']['1-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Ensaladas"){ $id =$GLOBALS['cartaClase']['2-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Entradas Frías"){ $id =$GLOBALS['cartaClase']['3-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Sopas"){ $id =$GLOBALS['cartaClase']['4-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Entradas Calientes"){ $id =$GLOBALS['cartaClase']['5-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Rollos Tradicionales"){ $id =$GLOBALS['cartaClase']['6-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Rollos Especiales"){ $id =$GLOBALS['cartaClase']['7-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Conos"){ $id =$GLOBALS['cartaClase']['8-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Sushi - Sashimi"){ $id =$GLOBALS['cartaClase']['9-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Combinaciones Especiales"){ $id =$GLOBALS['cartaClase']['10-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Bonsai Sushi Sashimi"){ $id =$GLOBALS['cartaClase']['11-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Carnes"){ $id =$GLOBALS['cartaClase']['12-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Teriyaki"){ $id =$GLOBALS['cartaClase']['13-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Tepanyaki"){ $id =$GLOBALS['cartaClase']['14-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Mariscos"){ $id =$GLOBALS['cartaClase']['15-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Acompañantes"){ $id =$GLOBALS['cartaClase']['16-link'];}
	if($GLOBALS['carta'.$a]['clase']=="Postres"){ $id =$GLOBALS['cartaClase']['17-link'];}
	 
	?>
	<div class="container-fluid p-0">
		<div class="row plato d-flex justify-content-start animated fadeIn" id="<?php echo $id; ?>" >
			<div class="col-12 col-sm-8 p-3 text-right flex-row d-flex flex-wrap justify-content-end align-content-center">
				<h2 class="text-primary col-12"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
				<p class="text-light col-8"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
				<?php
				if ($GLOBALS['carta'.$a]['precioRegular2']){
					echo $GLOBALS['carta'.$a]['precioRegular2'];
					}
				else{
					?>
					<h3 class="text-light col-12"><span class="text-primary"><span class="text-muted h6">Precio Regular</span> <br/>$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?></h3>
					<?php
					}
				$total_imagenes = count(glob($GLOBALS['carta'.$a]['img'].'/{*.jpg}',GLOB_BRACE));
				?>
				<div class="col-12 d-flex justify-content-end">
				<?php
				for ($imagenes = 1; $imagenes <= $total_imagenes; $imagenes++) {
					?>
					<div class="col-3 pl-4 mt-4"><img class="w-100" src="<?php echo $GLOBALS['carta'.$a]['img'].$imagenes.'.jpg'; ?>" /></div>
					<?php
					}
				?>
				</div>
				
				
				<a class="col-12 mt-5" href="es/menu/">Volver al Menú</a>	
			
					
				
			</div>

		
		</div>
		
	</div>

	
	<?php
}

?>


