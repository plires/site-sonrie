<?php
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'bienestar';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Primero debemos entender que el Bienestar es 'un estado de satisfacción personal, de comodidad y de confort que considera como positivos y/o adecuados aspectos como la salud o bienestar psico-biológico, el éxito social y económico, el éxito profesional, el placer personal, la alegría de vivir, la armonía consigo mismo y con el entorno.'">
	<title>Vivamos Intensamente, vivamos en Bienestar</title>

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

	<!-- Contenido BIENESTAR -->
	<section class="transition bienestar">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Header Bienestar -->
		<section id="first_section" class="container-fluid content_image_header header_bienestar">

			<div class="container h-100">
		  	<div class="row">
	  			<div class="col-md-12">
	  				<h1 data-aos="fade-up">Vivamos Intensamente,<br> vivamos en Bienestar</h1>
	  			</div>
		  	</div>
			</div>

	  </section>
		<!-- Header Bienestar -->

		<!-- Programa de Cooperación -->
		<section class="container-fluid programa_cooperacion">

	  	<div class="container">
	  		
		  	<div class="row programa">

		  		<div class="container">
		  			<div class="col-md-12">
		  				<h2 data-aos="fade-up">Programa de cooperación</h2>
		  				<h3 data-aos="fade-up">¿Cómo cooperamos con nuestro trabajo?</h3>
		  				<h3 data-aos="fade-up">Bienestar</h3>
		  				<p data-aos="fade-up">
		  					Primero debemos entender que el Bienestar es "un estado de satisfacción personal, de comodidad y de confort que considera como positivos y/o adecuados aspectos como la salud o bienestar psico-biológico, el éxito social y económico, el éxito profesional, el placer personal, la alegría de vivir, la armonía consigo mismo y con el entorno." El bienestar social se expresa en diferentes aspectos de la vida social de la población: en el acceso a la educación, la salud, la alimentación, la vivienda o los bienes de consumo, entre otras cosas. Es justamente por eso que hemos armado los grados de bienestar que debemos comprender para saber cómo y con que aportar:
		  				</p>
		  			</div>
		  		</div>

		  	</div>

	  	</div>

		</section>
		<!-- Programa de Cooperación end -->

		<!-- Grados -->
		<?php include('./includes/grados.php'); ?>

		<!-- Modulo Sumate -->
		<section data-aos="fade-up" class="container-fluid modulo_sumate">

			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<h2 data-aos="fade-up">Sabemos que la unión hace la fuerza, y es por eso que…</h2>
						<p data-aos="fade-up">
							Nos asociamos con organizaciones lideradas por la comunidad, organizaciones filantrópicas, empresas, gobiernos e individuos que desean mejorar la salud y el bienestar de las poblaciones y de esa manera podemos cubrir más trabajo:
						</p> <br>

						<p data-aos="fade-up">
							• Utilizamos nuestros recursos para avanzar en nuestra misión a través de la concesión de subvenciones, inversiones, compartir nuestro aprendizaje y levantar nuestra voz. <br>
							• Financiamos y cooperamos en servicios directos que abordan las necesidades urgentes que enfrentan las personas en sus comunidades, particularmente las necesidades de las personas de bajos ingresos, los jóvenes y los residentes de áreas rurales. <br>
							• Reconocemos, alentamos y fortalecemos a los líderes positivos para que sean poderosos agentes de cambio. <br>
							• Apoyamos la promoción y el compromiso cívico para que las comunidades puedan construir poder y crear políticas públicas que reflejen su visión, voluntad y necesidades. <br>
							• Confiamos e invertimos en organizaciones sin fines de lucro para que puedan operar a plena capacidad. 
						</p>

						<div data-aos="fade-up" class="content_button">
							<a href="./contacto.php" class="btn btn-primary">SUMATE</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Modulo Sumate end --> 


	</section>
	<!-- Contenido BIENESTAR end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>