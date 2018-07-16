<?php 
//CONFIGURACION
require('config.php');
require('language/language.php');
//CONTENIDO BASICO
require('content/menu.php');

$errEmail="";
$errText1="";
$errText2="";
$errText3="";
$texto4="";
$result="";

	if (isset($_POST["submit"])){
		$email = $_POST['email'];
		$text1 = $_POST['text1'];
		$text2 = $_POST['text2'];
		$text3 = $_POST['text3'];
		
		$to = 'jmanuelrangel@gmail.com'; 
		$subject = 'Mensaje desde la página web';
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: CONTACTO WEB <webmaster-krugercorp@noesushibar.com>" . "\r\n";
		$headers .= "Reply-To: " . $email . "\r\n";

		
		
		
		$body ="
			<p>Nombre y Apellido: $text1</p> 
			<p>Teléfono: $text2</p>
			<p>Correo: $email</p>
			<p>Comentario: $text3</p>  
			";		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Introduzca un email valido';
			}
		if (!$_POST['text1']) {
			$errText1 = 'Introduzca Nombre y Apellido';
			}
		if (!$_POST['text2']) {
			$errText2 = 'Introduzca un Número de Teléfono ';
			}
		if (!$_POST['text3']) {
			$errText3 = 'Introduzca un comentario';
			}
		
		// If there are no errors, send the email
		if (!$errEmail) {
			
			if (mail ($to, $subject, $body, $headers)) {
				$result='<div class="alert alert-success">Gracias por tu mensaje. Si deseas puedes escribirnos por Messenger para una atención más inmediata.</div> ';	
				}
			else 
				{
				$result='<div class="alert alert-danger">Lo sentimos, hubo un problema en el envío de tu solicitud. Intenta de nuevo</div> ';
				}
			}
		}	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
	hCabeza(); hFavicon(); hBootstrap(); hBasic();hSEO();
	?>
	
</head>		
	
<body id="cuerpo">	
	<!--PAGE-->
    <div class="scroll-container">
        
		<!--MENU---------------------->
        <section id="menu" class="section-scroll fixed-top w-100">
            <?php menu();?>
        </section>
        <!--END MENU------------------>
        
        <!--CONTACTO---------------------->
        <section class="section-scroll">
			<div class="row module_comun_top pb-5 module_contacto d-flex align-content-center justify-content-center" >
				
					<div class="col-12 mb-5">
						<p class="activo">Déjanos un correo electrónico y pronto te responderemos</p>
					</div>
					<div class="col-12 col-sm-6">
						<form role="form" method="post" action="es/escribenos/">
							<?php echo "<p class='text-danger'>$result</p>";?>
							<div class="form-group">
								<label for="Email">Tu Direcci&oacute;n de Correo</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="tudireccion@dominio.com">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
							<div class="form-group form-row">
								<div class="col">
									<label for="text1">Nombre y Apellido</label>
									<input type="text" class="form-control" id="text1" name="text1" placeholder="Nombre">
									<?php echo "<p class='text-danger'>$errText1</p>";?>
								</div>
								<div class="col">
									<label for="text2">Tel&eacute;fono</label>
									<input type="text" class="form-control" id="text2" name="text2" placeholder="Telefono">
									<?php echo "<p class='text-danger'>$errText3</p>";?>
								</div>
							</div>
							<div class="form-group form-row">
								<label for="text3">Tu comentario</label>
								<textarea class="form-control" id="text3"  name="text3" rows="3"></textarea>
							</div>
							<button id="submit" name="submit" type="submit" class="btn btn-primary px-4">Enviar</button>
						</form>
					</div>
			
			</div>
        </section>
        <!--END CONTACTO------------------>
		
		<!--PIE---------------------->
        <section class="section-scroll">
            <?php pie();?>
        </section>
        <!--END pie------------------>
        
    </div>
     <!--END PAGE-->
	<?php 
		fBootstrap();
		fMainJs();
		fSEO();
	?>
</body>
</html>
