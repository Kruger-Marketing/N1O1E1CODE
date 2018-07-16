<?php 
	error_reporting(0);
	$language = $_GET['language'];  
	if (!$language){  
    	header('Location: http://noesushibar.com/nuevo/es/');
	} elseif ($language == "en") {  
    	include('en.php');  
	} elseif ($language == "es") {  
    	include('es.php');  
	} elseif ($language == "de") {  
    	include('de.php');  
	}
?>
