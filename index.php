<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'home';

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
	<meta name="description" content="En la Fundación Sonríe la Vida buscamos contribuir para que los tratamientos centrados en la Longevidad y el Bienestar Emocional sean accesibles para todos, sin importar su edad, origen, raza, estatus social/económico o género.">
	<title>Buscamos que vivas Intensamente - sonrie la vida</title>

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

	<!-- Contenido HOME -->
	<section id="app" class="transition home">

		<!-- Modal Confirmation -->
		<?php include('./includes/modal-confirmation-donation.php'); ?>

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Pos Header -->
		<section id="first_section" class="container-fluid pos_header">
	  	<div class="row h-100">

		  	<div class="col-sm-7 gradient">
		  		<div class="row">
		  			<div class="col-md-10 offset-md-1">
			        <h1>Buscamos que <br>vivas Intensamente</h1>
			        <p>
			        	Nuestra fundación trabaja para acercar la tecnología de Inteligencia Artificial al ser humano, y así poder aportar a su bienestar, su longevidad y su felicidad. 
			        </p>

			        <div class="content_buton">
			        	<a href="./contacto.php" class="btn btn-primary">Sumate</a>
			        </div>

		  			</div>
		  		</div>
		  	</div>

		  	<div class="col-sm-5 p-0">
	        <img class="img-fluid img_fundacion" src="./img/colibri.jpg" alt="colibri">
		  	</div>

	  	</div>
		</section>
		<!-- Pos Header end -->

		<!-- Foco de Trabajo -->
		<section class="container-fluid back_light_color foco_trabajo">
			<div class="container p-0">
		  	<div class="row">

			  	<div data-aos="fade-up" class="col-md-12">
		        <h2>Nuestro Foco de Trabajo</h2>
		        <p>
		        	En la Fundación Sonríe la Vida buscamos contribuir para que los tratamientos centrados en la Longevidad y el Bienestar Emocional sean accesibles para todos, sin importar su edad, origen, raza, estatus social/económico o género. Esto lo logramos realizando desarrollos tecnológicos sobre el envejecimiento y el equilibrio emocional en nuestro propio centro de Investigación de vanguardia y lo llevamos a la gente mediante la colaboración y cooperación con otras organizaciones.
		        </p>
		        <div class="text-center">
		        	<a href="#section_formulario" class="btn btn-primary">+ Info</a>
		        </div>
			  	</div>

		  	</div>
	  	</div>
		</section>
		<!-- Foco de Trabajo end -->

		<!-- Grados -->
		<?php include('./includes/grados.php'); ?>

		<!-- Programas -->
		<section data-aos="fade-up" class="container-fluid programas">
			<div class="row">
				
				<div class="col-md-6 p-0">
					<img class="img-fluid img_fundacion" src="./img/home/programa-cooperacion.jpg" alt="programa cooperacion">
					<div class="content_programas">
						<h3>Programa de cooperación</h3>
						<a href="./contacto.php" class="btn btn-primary">+ Info</a>
					</div>
				</div>

				<div class="col-md-6 p-0">
					<img class="img-fluid img_fundacion" src="./img/home/centro-ivestigacion.jpg" alt="centro de investigacion">
					<div class="content_programas">
						<h3>Centro de investigación y desarrollo</h3>
						<a href="./contacto.php" class="btn btn-primary">+ Info</a>
					</div>
				</div>

			</div>
		</section>
		<!-- Programas end --> 

		<!-- Formulario -->
		<section class="container-fluid image_form">
			<div id="section_formulario" class="container formulario">
		  	<div class="row">

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

		<!-- Clientes -->
		<section data-aos="fade-up" class="container-fluid clientes">
			<div class="container">
				<div class="row">
					
					<div class="col-md-10 offset-md-1 content_logos">
						<img class="img-fluid" src="./img/home/logo-azul.gif" alt="logo azul">
						<img class="img-fluid" src="./img/home/hospital-militar.gif" alt="logo hospital militar">
						<img class="img-fluid" src="./img/home/boca.gif" alt="logo boca">
						<img class="img-fluid" src="./img/home/river.gif" alt="logo river">
						<img class="img-fluid" src="./img/home/municipalidad-suipacha.gif" alt="logo municipalidad suipacha">
						<img class="img-fluid" src="./img/home/fuerzas-armadas.gif" alt="logo fuerzas armadas">
					</div>

				</div>
			</div>
		</section>
		<!-- Clientes end --> 

	</section>
	<!-- Contenido HOME end -->

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