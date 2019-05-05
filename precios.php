<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php
	  include "./template/header.php";
	?>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<?php
					  include "./template/menu.php";
					?>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Planes</h2>
							<p>Conoce Nuestros Planes</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<section>
									
										<div class="row gtr-uniform">
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low"><h4>Empresas Pequeñas</h4></label>
												<br><br>De 0 a 50 vehículos
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal"><h4>Empresas Medianas</h4></label>
												<br><br>De 50 a 100 vehículos
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high"><h4>Empresas Grandes</h4></label>
												<br><br>Más de 100 Vehículos.
											</div>
										</div>
								</section>
								<br><br>
								<p>
									Para más información sobre nuestros Planes <a href="./contacto.php">Comunícate</a> con nosotros.
								</p>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<?php
					  include "./template/footer.php";
					?>

	</body>
</html>