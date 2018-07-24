<?php 
function intro(){
?>
<div class="container-fluid p-0">
	<div class="row intro d-flex flex-column animated fadeIn">
		<div class="homepage-hero-module">
			<div class="video-container">
				<div class="filter content"></div>
				<video autoplay loop class="fillWidth" muted>
					<source src="<?php echo $GLOBALS['intro']['video']; ?>" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
				</video>
				<div class="poster hidden">
					<img src="<?php echo $GLOBALS['intro']['video']; ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}

function sugerencia(){
?>
<div class="container-fluid p-0">
	<div class="row sugerencia">	
		<div class="col-12 col-md-4 left p-0"></div>
		<div id="sugerencias" class="carousel slide col-12 col-sm-8 right" data-ride="carousel">
			<!--PAGINACION-->
			<ol class="carousel-indicators">
				<li data-target="#sugerencias" data-slide-to="0" class="active"></li>
				<li data-target="#sugerencias" data-slide-to="1"></li>
			</ol>
			<!--ITEMS-->
			<div class="carousel-inner">
				<div class="carousel-item active <?php echo $GLOBALS['carta33']['nombre']; ?>">
					<div class="carousel-caption d-md-block">
						<h3><?php echo $GLOBALS['carta33']['clase']; ?> <?php echo $GLOBALS['carta33']['nombre']; ?></h3>
						<p class="d-none d-sm-block"><?php echo $GLOBALS['carta33']['descripcion']; ?></p>
						<p>$ <?php echo $GLOBALS['carta33']['precioRegular']; ?></p>
					</div>
				</div>
				<div class="carousel-item <?php echo $GLOBALS['carta13']['nombre']; ?>">
					<div class="carousel-caption d-md-block">
						<h3><?php echo $GLOBALS['carta13']['clase']; ?> <?php echo $GLOBALS['carta13']['nombre']; ?></h3>
						<p class="d-none d-sm-block"><?php echo $GLOBALS['carta13']['descripcion']; ?></p>
						<p>$ <?php echo $GLOBALS['carta13']['precioRegular']; ?></p>
					</div>
				</div>
			</div>
			<!--CONTROLES-->
			<a class="carousel-control-prev" href="#sugerencias" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#sugerencias" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
</div>
<?php
}

function locales(){
	?>
	<div class="container-fluid p-0">
		<div class="row locales d-flex">
			<!--LEFT-->
			<div class="col-12 col-sm-8 left p-0 d-flex order-last order-sm-first justify-content-center flex-wrap align-items-start">
				<!--MENU CIUDADES-->
				<input id="localesQuito" type="radio" name="tabs" checked>
				<label for="localesQuito" class="h1" >Quito</label>
				<input id="localesGuayaquil" type="radio" name="tabs">
				<label for="localesGuayaquil" class="h1" >Guayaquil</label>
				<input id="localesCuenca" type="radio" name="tabs">
				<label for="localesCuenca" class="h1" >Cuenca</label>
				<!--END MENU CIUDADES-->
				<!--QUITO-->
				<div id="enQuito" class="carousel slide p-0 none text-light" data-ride="carousel">
					<!--PAGINACION-->
					<ol class="carousel-indicators">
						<li data-target="#enQuito" data-slide-to="0" class="active"></li>
						<li data-target="#enQuito" data-slide-to="1"></li>
						<li data-target="#enQuito" data-slide-to="2"></li>
						<li data-target="#enQuito" data-slide-to="3"></li>
						<li data-target="#enQuito" data-slide-to="4"></li>
						<li data-target="#enQuito" data-slide-to="5"></li>
						<li data-target="#enQuito" data-slide-to="6"></li>
					</ol>
					<!--ITEMS-->
					<div class="carousel-inner align-self-center">
						<?php
						$x=1;
						if ($x = 1) {
							?>
							<div class="carousel-item active <?php echo $GLOBALS['local'.$x]['codigo']; ?>">
								<div itemscope itemtype="http://schema.org/Restaurant">
									<h1 class="mb-2" itemprop="name"><?php echo $GLOBALS['local'.$x]['nombre']; ?></h1>
									<h3 class="mb-2" itemprop="streetAddress"><?php echo $GLOBALS['local'.$x]['direccion']; ?></h3>
									<p class="mb-4" itemprop="openingHours"><i class="far fa-clock"></i> <?php echo $GLOBALS['local'.$x]['horario']; ?></p>
									<a target="new" href="<?php echo $GLOBALS['local'.$x]['gps_link']; ?>" class="h4 mr-4 btn px-5 py-3 btn-primary"><i class="fas fa-map-marker-alt"></i> Cómo llegar</a>
									<a target="new" href="<?php echo $GLOBALS['local'.$x]['reservar_link']; ?>" class="h4 btn px-5 py-3 btn-primary"><i class="fas fa-calendar-check"></i> Reservar</a>
								</div>
							</div>
							<?php
							}
						for ($x = 2; $x <= 7; $x++) {
							?>
							<div class="carousel-item <?php echo $GLOBALS['local'.$x]['codigo']; ?>">
								<div itemscope itemtype="http://schema.org/Restaurant">
									<h1 class="mb-2" itemprop="name"><?php echo $GLOBALS['local'.$x]['nombre']; ?></h1>
									<h3 class="mb-2" itemprop="streetAddress"><?php echo $GLOBALS['local'.$x]['direccion']; ?></h3>
									<p class="mb-4" itemprop="openingHours"><i class="far fa-clock"></i> <?php echo $GLOBALS['local'.$x]['horario']; ?></p>
									<a target="new" href="<?php echo $GLOBALS['local'.$x]['gps_link']; ?>" class="h4 mr-4 btn px-5 py-3 btn-primary"><i class="fas fa-map-marker-alt"></i> Cómo llegar</a>
									<a target="new" href="<?php echo $GLOBALS['local'.$x]['reservar_link']; ?>" class="h4 btn px-5 py-3 btn-primary"><i class="fas fa-calendar-check"></i> Reservar</a>
								</div>
							</div>
							<?php
							}
						?>
					</div>
					<!--CONTROL-->
					<a class="carousel-control-prev" href="#enQuito" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#enQuito" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
				<!--END QUITO-->
				<!--GUAYAQUIL-->
				<div id="enGuayaquil" class="carousel slide p-0 none text-light" data-ride="carousel">
					<!--PAGINACION-->
					<ol class="carousel-indicators">
						<li data-target="#enGuayaquil" data-slide-to="0" class="active"></li>
						<li data-target="#enGuayaquil" data-slide-to="1"></li>
						<li data-target="#enGuayaquil" data-slide-to="2"></li>
					</ol>
					<!--ITEMS-->
					<div class="carousel-inner align-self-center">
						<?php
						$y=8;
						if ($y = 8) {
							?>
							<div class="carousel-item active <?php echo $GLOBALS['local'.$y]['codigo']; ?>">
								<div itemscope itemtype="http://schema.org/Restaurant">
									<h1 class="mb-2" itemprop="name"><?php echo $GLOBALS['local'.$y]['nombre']; ?></h1>
									<h3 class="mb-2" itemprop="streetAddress"><?php echo $GLOBALS['local'.$y]['direccion']; ?></h3>
									<p class="mb-4" itemprop="openingHours"><i class="far fa-clock"></i> <?php echo $GLOBALS['local'.$x]['horario']; ?></p>
									<a target="new" href="<?php echo $GLOBALS['local'.$y]['gps_link']; ?>" class="h4 mr-4 btn px-5 py-3 btn-primary"><i class="fas fa-map-marker-alt"></i> Cómo llegar</a>
									<a target="new" href="<?php echo $GLOBALS['local'.$y]['reservar_link']; ?>" class="h4 btn px-5 py-3 btn-primary"><i class="fas fa-calendar-check"></i> Reservar</a>
								</div>
							</div>
							<?php
							}
						for ($y = 9; $y <= 10; $y++) {
							?>
							<div class="carousel-item <?php echo $GLOBALS['local'.$y]['codigo']; ?>">
								<div itemscope itemtype="http://schema.org/Restaurant">
									<h1 class="mb-2" itemprop="name"><?php echo $GLOBALS['local'.$y]['nombre']; ?></h1>
									<h3 class="mb-2" itemprop="streetAddress"><?php echo $GLOBALS['local'.$y]['direccion']; ?></h3>
									<p class="mb-4" itemprop="openingHours"><i class="far fa-clock"></i> <?php echo $GLOBALS['local'.$x]['horario']; ?></p>
									<a target="new" href="<?php echo $GLOBALS['local'.$y]['gps_link']; ?>" class="h4 mr-4 btn px-5 py-3 btn-primary"><i class="fas fa-map-marker-alt"></i> Cómo llegar</a>
									<a target="new" href="<?php echo $GLOBALS['local'.$y]['reservar_link']; ?>" class="h4 btn px-5 py-3 btn-primary"><i class="fas fa-calendar-check"></i> Reservar</a>
								</div>
							</div>
							<?php
							}
						?>
					</div>
					<!--CONTROL-->
					<a class="carousel-control-prev" href="#enGuayaquil" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#enGuayaquil" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
				<!--END GUAYAQUIL-->
				<!--CUENCA-->
				<div id="enCuenca" class="carousel slide p-0 none text-light" data-ride="carousel">
					<!--PAGINACION-->
					<ol class="carousel-indicators">
						<li data-target="#enCuenca" data-slide-to="0" class="active"></li>
					</ol>
					<!--ITEMS-->
					<div class="carousel-inner align-self-center">
						<?php
						$z=11;
						if ($z = 11) {
							?>
							<div class="carousel-item active <?php echo $GLOBALS['local'.$z]['codigo']; ?>">
								<div itemscope itemtype="http://schema.org/Restaurant">
									<h1 class="mb-2" itemprop="name"><?php echo $GLOBALS['local'.$z]['nombre']; ?></h1>
									<h3 class="mb-2" itemprop="streetAddress">><?php echo $GLOBALS['local'.$z]['direccion']; ?></h3>
									<p class="mb-4" itemprop="openingHours"><i class="far fa-clock"></i> <?php echo $GLOBALS['local'.$x]['horario']; ?></p>
									<a target="new" href="<?php echo $GLOBALS['local'.$z]['gps_link']; ?>" class="h4 mr-4 btn px-5 py-3 btn-primary"><i class="fas fa-map-marker-alt"></i> Cómo llegar</a>
									<a target="new" href="<?php echo $GLOBALS['local'.$z]['reservar_link']; ?>" class="h4 btn px-5 py-3 btn-primary"><i class="fas fa-calendar-check"></i> Reservar</a>
								</div>
							</div>
							<?php
							}
						?>
					</div>
					<!--CONTROL-->
					<a class="carousel-control-prev" href="#enCuenca" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#enCuenca" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
				<!--END CUENCA-->
			</div>
			<!--END LEFT-->
			<!--RIGHT-->
			<div class="col-12 col-sm-4 right d-flex flex-column justify-content-center align-items-center p-0" itemscope itemtype="http://schema.org/Restaurant">
				<img alt="locales de noe sushi bar " class="mt-5 m-sm-0" src="media/img/locales.png"/>
				<h5 class="text-light mt-5 px-3 text-center">solicita nuestro servicio de delivery <br>llevaremos tus sabores favoritos hacia tí</h5>
				<img alt="sushi a domicilio" class="mt-5" src="media/img/delivery.png"/>
				<p class="text-light px-3 text-center" itemprop="addressRegion">Disponible en Quito y Guayaquil</p>
				<p class="text-light px-3 mt-4 text-center h5" itemprop="telephone">En Cuenca llama al 2889308</p>
			</div>
			<!--END RIGHT-->
		</div>
	</div>
	<?php
}

?>