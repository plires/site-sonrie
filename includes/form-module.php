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

    <input name="origin" type="hidden" value="Formulario de Contacto Web">

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