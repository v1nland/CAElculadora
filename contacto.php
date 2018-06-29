<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
</head>
<body>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="inc/menu.js"></script>
	<script src="inc/show-option.js"></script>

	<!--  HEADER START -->
	<header>
		<?php require 'inc/nav-menu.php'; ?>
	</header>

	<!--  PAGE START -->
	<section class="main">
		<div class="wrapper">
			<!--  FRONT MESSAGE -->
			<div class="mensaje">
				<h1>CAElculadora</h1>
			</div>

			<!--  LEFT BLOCK / BODY BLOCK -->
			<div class="articulo">
				<article>
					<!--  LEFT BLOCK TITLE -->
					<h3>CAE</h3><br>

					<!--  LEFT BLOCK BODY -->
					Número de teléfono: +56912345678 <br>
					Correo: martin.saavedra@mail.udp.cl <br>
					Correo: brian.bastias@mail.udp.cl <br>

				</article>
			</div>

			<!--  RIGHT BLOCK / WIDGET BLOCK-->
			<aside>

					<?php require 'inc/tips-menu.php'; ?>
				</div>
			</aside>
		</div>
	</section>

	<footer>
		<div class="wrapper">
			<p>CAElculadora, por Martín Saavedra y Brían Bastías.</p>
		</div>
	</footer>


</body>
</html>
