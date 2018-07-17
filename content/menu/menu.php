<?php 
function intro(){

?>
<div class="container-fluid p-0">
	<div class="row carta d-flex animated fadeIn">
		<?php 
		for ($x = 1; $x <= 18; $x++) {
		?>
		<div id="<?php echo $GLOBALS['cartaClase'][$x.'-link']; ?>" class="divCategoria col-12 justify-content-start align-items-center animated fadeIn">
			<div class="col-11 col-lg-4 left p-4">
				<?php
				/*SUGERENCIAS DEL CHEF*/
				if ($GLOBALS['cartaClase'][$x] =="Sugerencias del Chef"){
					for ($a = 1; $a <= 9; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ENSALADAS*/
				if ($GLOBALS['cartaClase'][$x] =="Ensaladas"){
					for ($a = 11; $a <= 17; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ENTRADAS FRIAS*/
				if ($GLOBALS['cartaClase'][$x] =="Entradas Frías"){
					for ($a = 21; $a <= 30; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*SOPAS*/
				if ($GLOBALS['cartaClase'][$x] =="Sopas"){
					for ($a = 31; $a <= 40; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ENTRADAS CALIENTES*/
				if ($GLOBALS['cartaClase'][$x] =="Entradas Calientes"){
					for ($a = 41; $a <= 50; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ROLLOS TRADICIONALES*/
				if ($GLOBALS['cartaClase'][$x] =="Rollos Tradicionales"){
					for ($a = 51; $a <= 60; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ROLLOS ESPECIALES*/
				if ($GLOBALS['cartaClase'][$x] =="Rollos Especiales"){
					for ($a = 61; $a <= 110; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*CONOS*/
				if ($GLOBALS['cartaClase'][$x] =="Conos"){
					for ($a = 111; $a <= 120; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*SUSHI - SASHIMI*/
				if ($GLOBALS['cartaClase'][$x] =="Sushi - Sashimi"){
					for ($a = 121; $a <= 140; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*SUSHI ESPECIAL*/
				if ($GLOBALS['cartaClase'][$x] =="Sushi Especial"){
					for ($a = 141; $a <= 160; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*COMBINACIONES ESPECIALES*/
				if ($GLOBALS['cartaClase'][$x] =="Combinaciones Especiales"){
					for ($a = 161; $a <= 180; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*BONSAI SUSHI SASHIMI*/
				if ($GLOBALS['cartaClase'][$x] =="Bonsai Sushi Sashimi"){
					for ($a = 181; $a <= 190; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*CARNES*/
				if ($GLOBALS['cartaClase'][$x] =="Carnes"){
					for ($a = 191; $a <= 210; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*TERIYAKI*/
				if ($GLOBALS['cartaClase'][$x] =="Teriyaki"){
					for ($a = 211; $a <= 220; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*TEPANYAKI*/
				if ($GLOBALS['cartaClase'][$x] =="Tepanyaki"){
					for ($a = 221; $a <= 230; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*MARISCOS*/
				if ($GLOBALS['cartaClase'][$x] =="Mariscos"){
					for ($a = 230; $a <= 250; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*ACOMPANANTES*/
				if ($GLOBALS['cartaClase'][$x] =="Acompañantes"){
					for ($a = 251; $a <= 260; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				/*POSTRES*/
				if ($GLOBALS['cartaClase'][$x] =="Postres"){
					for ($a = 261; $a <= 280; $a++) {
						if ($GLOBALS['carta'.$a]['nombre']){
							?>
							<div class="p-3" id="<?php echo $GLOBALS['carta'.$a]['nombre']; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $GLOBALS['toolTipCarta']; ?>">
								<a href="<?php echo $GLOBALS['carta'.$a]['link']; ?>">
									<h2 class="text-primary"><?php echo $GLOBALS['carta'.$a]['nombre']; ?></h2>
									<p class="text-light"><?php echo $GLOBALS['carta'.$a]['descripcion']; ?></p>
									<i class="fas fa-plus-circle float-right mr-3"></i>
									<h3 class="text-light"><span class="text-primary">$ </span><?php echo $GLOBALS['carta'.$a]['precioRegular']; ?><span class="text-muted h6"> Precio Regular</span></h3>
								</a>
							</div>
							<?php
							}
						}
					}
				//
				?>
			</div>
			
		</div>
		<?php
		}
		?>
		<div id="cartaArrows" class="arrows position-fixed d-flex justify-content-center align-items-center p-0">
			<i class="fas h1 text-light"></i>
			<div id="cartaMenu" class="categoriasMenu position-fixed justify-content-center align-items-center fadeIn animated col-12 col-sm-3">
				<ul class="list-group">
					<?php 
					 for ($x = 1; $x <= 18; $x++) {
					?>
					<a onClick="showCarta('<?php echo $GLOBALS['cartaClase'][$x.'-link']; ?>')"><li class="text-light text-right pr-3"><?php echo $GLOBALS['cartaClase'][$x]; ?></i></li></a>
					<?php
					 }
					 ?>
				</ul>
			</div>
		</div>
		
		
	</div>
</div>
<?php
}

?>
