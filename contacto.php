<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'contacto';

  //Variables Get
  include_once('includes/get-variable-handling.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Contactate con Fundación Sonríe la Vida. Buscamos contribuir para que los tratamientos centrados en la Longevidad y el Bienestar Emocional sean accesibles para todos, sin importar su edad, origen, raza, estatus social/económico o género.">
	<title>Sonrie la Vida - Contacto</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido CONTACTO -->
	<section id="app" class="transition contacto">

		<!-- Modal Confirmation -->
		<?php include('./includes/modal-confirmation-donation.php'); ?>

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Formulario -->
		<section id="first_section" class="container-fluid image_form">
			<div id="section_formulario" class="container formulario">
		  	<div class="row">

		  		<div class="col-md-12">
		  			<h1 data-aos="fade-up">Construyamos el futuro juntos</h1>
		  		</div>

			  	<div class="col-md-10 offset-md-1 form">

			  		<!-- Módulo de Formulario -->
						<?php include('./includes/form-module.php'); ?>
		        
			  	</div>

			  	<!-- Módulo de Donación -->
					<?php include('./includes/donation-module.php'); ?>

		  	</div>
			</div>
		</section>
		<!-- Formulario end -->

	</section>
	<!-- Contenido CONTACTO end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./node_modules/vue/dist/vue.js"></script>
	<script type="text/javascript" src="./node_modules/axios/dist/axios.min.js"></script>
	<script src="js/vue-instance.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>