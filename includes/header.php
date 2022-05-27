<header class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<a class="branding" href="./">
				<img class="img-fluid logo transition" src="./img/logo-header.png" alt="logo sonrie la vida">
			</a>

			<nav>
				<ul>
					<?php $res = $current == 'quienes_somos' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./quienes-somos.php">QUIENES SOMOS</a>
					</li>

					<?php $res = $current == 'bienestar' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./bienestar.php">BIENESTAR</a>
					</li>

					<?php $res = $current == 'investigacion' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./investigacion.php">INVESTIGACIÓN</a>
					</li>

					<?php $res = $current == 'contacto' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./contacto.php">CONTACTO</a>
					</li>

					<?php $res = $current == 'contacto' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a href="./contacto.php" class="btn btn-primary">SUMATE</a>
					</li>

				</ul>
			</nav>
			
			<div id="toggleIcon">
				<i id="hamburger" class="fas fa-bars transition"></i>
			</div>

		</div>
	</div>
</header>