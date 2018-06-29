<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
</head>
<body>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="inc/menu.js"></script>
	<script src="inc/show-option.js"></script>
	<script src="inc/slider.js"></script>

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
					<form action="resultados.php" target="_blank" method="POST">
						<input placeholder="Monto del crédito" type="tel" name="montoCredito" autofocus required>
						<input placeholder="Numero de cuotas" type="tel" name="cuotas" required>
						<input placeholder="Meses de gracia" type="tel" name="gracia" required><br>

						<div class="checkboxes">
							Añadir banco <input id="checkbox1" type="checkbox" name="checkbox1" value="checkbox1" required><br>
							<input id="nombreBanco1" placeholder="Nombre banco" type="text" name="nombreBanco1" required>
							<input id="montoCuotaBanco1" placeholder="Monto cuota" type="tel" name="montoCuotaBanco1" required>
							<input id="gastoAdicionalBanco1" placeholder="Gasto adicional del banco" type="tel" name="gastoAdicionalBanco1" required><br>

							Añadir banco <input id="checkbox2" type="checkbox" name="checkbox2" value="checkbox2"><br>
							<input id="nombreBanco2" placeholder="Nombre banco" type="text" name="nombreBanco2">
							<input id="montoCuotaBanco2" placeholder="Monto cuota" type="tel" name="montoCuotaBanco2">
							<input id="gastoAdicionalBanco2" placeholder="Gasto adicional del banco" type="tel" name="gastoAdicionalBanco2"><br>

							Añadir banco <input id="checkbox3" type="checkbox" name="checkbox3" value="checkbox3"><br>
							<input id="nombreBanco3" placeholder="Nombre banco" type="text" name="nombreBanco3">
							<input id="montoCuotaBanco3" placeholder="Monto cuota" type="tel" name="montoCuotaBanco3">
							<input id="gastoAdicionalBanco3" placeholder="Gasto adicional del banco" type="tel" name="gastoAdicionalBanco3"><br>

							Añadir banco <input id="checkbox4" type="checkbox" name="checkbox4" value="checkbox4"><br>
							<input id="nombreBanco4" placeholder="Nombre banco" type="text" name="nombreBanco4">
							<input id="montoCuotaBanco4" placeholder="Monto cuota" type="tel" name="montoCuotaBanco4">
							<input id="gastoAdicionalBanco4" placeholder="Gasto adicional del banco" type="tel" name="gastoAdicionalBanco4"><br>
						</div>
						<input type="reset">
						<input type="submit" value="Calcular">
					</form>

				</article>
			</div>

			<!--  RIGHT BLOCK / WIDGET BLOCK-->
			<aside>
				<?php include 'inc/tips-menu.php' ?>
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
