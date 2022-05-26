<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = '';
  }

  if (isset($_GET['last_name'])) {
    $last_name = $_GET['last_name'];
  } else {
    $last_name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['errors'])) {

    $errors = unserialize(urldecode($_GET['errors']));
  } else {
    $errors = '';
  }

  if (isset($_GET['msg_contacto'])) {
    $msg_contacto = urldecode($_GET['msg_contacto']);
  } 

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
	<section class="transition home">

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

			  		<div data-aos="fade-up" class="content_form">

			  			<!-- Mensaje Exito -->
				      <?php if (isset($msg_contacto)): ?>
				        <div id="msg_contacto" class="alert alert-success alert-dismissible fade show" role="alert">
				          <strong>¡Datos recibidos!</strong>
				          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				          <ul style="padding: 0;">
				              <li>- <?php echo $msg_contacto; ?></li>
				          </ul>
				        </div>
				      <?php endif ?>
				      <!-- Mensaje Exito end -->

				      <!-- Errores Formulario -->
				      <?php if ($errors): ?>

				        <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
				          <strong>¡Por favor verificá los datos!</strong>
				          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				          <ul style="padding: 0;">
				            <?php foreach ($errors as $error) { ?>
				              <li>- <?php echo $error; ?></li>
				            <?php } ?>
				          </ul>
				        </div>

				      <?php endif ?>
				      <!-- Errores Formulario end -->

				      <h2 data-aos="fade-up">
				      	¿Está interesado en aprender más sobre los avances en el área de la longevidad y como lo hemos logrado en nuestra Fundación?
				      </h2>

				      <p data-aos="fade-up">
				      	Contactanos para saber cómo podemos ayudarte a que vivas intensamente, tengas el balance emocional esperado y así poder también aportar a las causas de la comunidad
				      </p>

				      <form data-aos="fade-up" id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

				        <input name="origin" type="hidden" value="Formulario de Contacto Landing">

				        <div class="row">

				        	<div class="col-md-6">
				        		
						        <!-- Nombre -->
						        <div class="mb-3">
						          <label for="name" class="form-label">Nombre *</label>
						          <input required type="text" class="form-control" value="<?= $name ?>" name="name">
						          <div class="invalid-feedback">
						            Ingresá tu nombre
						          </div>
						        </div>

						        <!-- Apellido -->
						        <div class="mb-3">
						          <label for="last_name" class="form-label">Apellido *</label>
						          <input required type="text" class="form-control" value="<?= $last_name ?>" name="last_name">
						          <div class="invalid-feedback">
						            Ingresá tu apellido
						          </div>
						        </div>

				        	</div>

				        	<div class="col-md-6">
				        		
						        <!-- Email -->
						        <div class="mb-3">
						          <label for="email" class="form-label">Email *</label>
						          <input required type="email" class="form-control" value="<?= $email ?>" name="email">
						          <div class="invalid-feedback">
						            Ingresá tu email
						          </div>
						        </div>

						        <!-- Telefono -->
						        <div class="mb-3">
						          <label for="phone" class="form-label">Teléfono</label>
						          <input type="tel" class="form-control" value="<?= $phone ?>" name="phone">
						        </div>

				        	</div>

				        </div>

				        <div class="text-center">
				        	<button type="button" id="send" class="btn btn-primary">
				        		<span id="wait" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
				        		Solicitar información
				        	</button>
				        </div>

				      </form>
			  			
			  		</div>
		        
			  	</div>

			  	<div data-aos="fade-up" class="col-md-10 offset-md-1 form_donation">

			  		<div class="content_form content_form_donation">

				      <h2 data-aos="fade-up">Ayudá y doná</h2>
				      <h3 data-aos="fade-up">Construyamos el futuro juntos</h3>

				      <p data-aos="fade-up">
				      	Con tu ayuda trabajamos en programas para que cada vez más gente pueda alcanzar el Bienestar.
				    	</p>

				    	<div data-aos="fade-up" class="content_buttons">
				    		<div class="importes">
					    		<button id="100" class="btn btn-primary">$100</button>
					    		<button id="200" class="btn btn-primary">$200</button>
					    		<button id="500" class="btn btn-primary">$500</button>
					    		<button id="1000" class="btn btn-primary">$1000</button>
					    		<button id="1500" class="btn btn-primary">$1500</button>
					    		<button id="2000" class="btn btn-primary">$2000</button>
				    		</div>

				    		<div class="otro_importe">
					    		<button id="btn_otro_importe" class="btn btn-primary">OTRO</button>
					    		<input disabled id="txt_otro_importe" type="text" class="form-control" name="other" placeholder="IMPORTE">
				    		</div>

				    		<div class="content_button_siguiente">
				    			<button id="send_donation" class="btn btn-primary">DONAR</button>
				    		</div>

				    	</div>
			  			
			  		</div>
		        
			  	</div>

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
	<script type="text/javascript" src="./node_modules/vue/dist/vue.global.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>