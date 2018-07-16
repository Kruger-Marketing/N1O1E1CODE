<?php
function menu(){
	?>
	<div class="container-fluid p-0">
		<div class="menu w-100 position-fixed d-flex flex-wrap">
			<div class="d-none d-md-flex col-md-2 flex-row flex-wrap justify-content-center align-items-center my-2">
				<a class="d-flex align-items-center" target="new" href="<?php echo $GLOBALS['social']['facebook_link']; ?>"><i class="fab fa-facebook mx-2 h5"-square></i></a>
				<a class="d-flex align-items-center" target="new" href="<?php echo $GLOBALS['social']['twitter_link']; ?>"><i class="fab fa-twitter-square mx-2 h5"></i></a>
				<a class="d-flex align-items-center" target="new" href="<?php echo $GLOBALS['social']['instagram_link']; ?>"><i class="fab fa-instagram mx-2 h5"></i></a>
				<a class="d-flex align-items-center" target="new" href="<?php echo $GLOBALS['social']['tripadvisor_link']; ?>"><i class="fab fa-tripadvisor mx-2 h5"></i></a>
				<a class="d-flex align-items-center" target="new" href="<?php echo $GLOBALS['social']['youtube_link']; ?>"><i class="fab fa-youtube-square mx-2 h5"></i></a>
			</div>
			<nav class="navbar col-md-8 nav nav-justified pt-4 p-md-0 navbar-expand-lg">
				<button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#menuNoe" aria-controls="menuNoe" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="d-block d-md-none logo col" href="<?php echo $GLOBALS['menu_0']['link']; ?>"></a>
				<div class="collapse navbar-collapse" style="height: 100%;" id="menuNoe">
					
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_0']['link']; ?>"><?php echo $GLOBALS['menu_0']['title']; ?></a>
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_1']['link']; ?>"><?php echo $GLOBALS['menu_1']['title']; ?></a>
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_2']['link']; ?>"><?php echo $GLOBALS['menu_2']['title']; ?></a>
					<a class="d-none d-md-block nav-item nav-link logo" href="<?php echo $GLOBALS['menu_0']['link']; ?>"></a>
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_3']['link']; ?>"><?php echo $GLOBALS['menu_3']['title']; ?></a>
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_4']['link']; ?>" target="new"><?php echo $GLOBALS['menu_4']['title']; ?></a>
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical" href="	<?php echo $GLOBALS['menu_5']['link']; ?>"><?php echo $GLOBALS['menu_5']['title']; ?></a>
					
		
					<a class="nav-item nav-link d-flex justify-content-center align-items-center text-light hvr-shutter-out-vertical delivery d-block d-sm-none mt-3" href="tel:1800663663"></a>
				
				</div>
			</nav>
			<div class="d-none d-md-flex col-2 flex-row justify-content-center align-items-center">
				<a href="tel:1800663663" class="delivery"></a>
			</div>
		</div>
	</div>
	<?php
	}
function pie(){
	?>
	<div class="container-fluid p-0">
		<div class="row pie d-flex">	
			<div class="col-4 left p-0"></div>
			<div class="col-8 right d-flex justify-content-between align-items-center p-0">
				<p class="pl-4 text-light s3"><strong><?php echo $GLOBALS['rights']['text']; ?> - <?php echo $GLOBALS['rights']['year']; ?></strong><br><em>Design by Kruger Corporation</em></p>
				<a href="http://www.sushicorp.ec/" target="new" class="sushicorp align-self-end" ></a>
			</div>
		</div>
	</div>
	<?php
}
function loader(){
	?>
	<div class="preloader-wrapper">
		<div class="preloader">
			<img src="media/img/loader.gif" width="50%" alt="Loader">
		</div>
	</div>
	<?php
}

?>