<?php
	define('FINANCIAL_MAX_ITERATIONS', 128);
	define('FINANCIAL_PRECISION', 1.0e-08);

	function RATE($nper, $pmt, $pv, $fv = 0.0, $type = 0, $guess = 0.1) {

	    $rate = $guess;
	    if (abs($rate) < FINANCIAL_PRECISION) {
	        $y = $pv * (1 + $nper * $rate) + $pmt * (1 + $rate * $type) * $nper + $fv;
	    } else {
	        $f = exp($nper * log(1 + $rate));
	        $y = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;
	    }
	    $y0 = $pv + $pmt * $nper + $fv;
	    $y1 = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;

	    // find root by secant method
	    $i  = $x0 = 0.0;
	    $x1 = $rate;
	    while ((abs($y0 - $y1) > FINANCIAL_PRECISION) && ($i < FINANCIAL_MAX_ITERATIONS)) {
	        $rate = ($y1 * $x0 - $y0 * $x1) / ($y1 - $y0);
	        $x0 = $x1;
	        $x1 = $rate;

	        if (abs($rate) < FINANCIAL_PRECISION) {
	            $y = $pv * (1 + $nper * $rate) + $pmt * (1 + $rate * $type) * $nper + $fv;
	        } else {
	            $f = exp($nper * log(1 + $rate));
	            $y = $pv * $f + $pmt * (1 / $rate + $type) * ($f - 1) + $fv;
	        }

	        $y0 = $y1;
	        $y1 = $y;
	        ++$i;
	    }
	    return number_format((float)$rate*12*100, 2, '.', '');
	}

    $montoCredito = $_POST['montoCredito'];
    $cuotas = $_POST['cuotas'];

	$checkbox1 = $_POST['checkbox1'];
	$nombreBanco1 = $_POST['nombreBanco1'];
	$montoCuotaBanco1 = $_POST['montoCuotaBanco1'];
	$gastoAdicionalBanco1 = $_POST['gastoAdicionalBanco1'];

	$checkbox2 = $_POST['checkbox2'];
	$nombreBanco2 = $_POST['nombreBanco2'];
	$montoCuotaBanco2 = $_POST['montoCuotaBanco2'];
	$gastoAdicionalBanco2 = $_POST['gastoAdicionalBanco2'];

	$checkbox3 = $_POST['checkbox3'];
	$nombreBanco3 = $_POST['nombreBanco3'];
	$montoCuotaBanco3 = $_POST['montoCuotaBanco3'];
	$gastoAdicionalBanco3 = $_POST['gastoAdicionalBanco3'];

	$checkbox4 = $_POST['checkbox4'];
	$nombreBanco4 = $_POST['nombreBanco4'];
	$montoCuotaBanco4 = $_POST['montoCuotaBanco4'];
	$gastoAdicionalBanco4 = $_POST['gastoAdicionalBanco4'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Resultados</title>
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
					<div style='overflow-x:auto;'>
						<table>
							<thead>
		  						<tr>
		    						<th>Nombre del banco</th>
									<th>Cuota mensual ($)</th>
									<th>Monto total ($)</th>
								   <th>Costo real ($)</th>
									<th>Costo real (%)</th>
									<th>Diferencia ($)</th>
								   <th>CAE (%)</th>
							  	</tr>
							</thead>
							<tbody>
								<?php
									if ($checkbox1 == 'checkbox1') {
										$CAEbanco1 = RATE($cuotas, $montoCuotaBanco1, -$montoCredito);

										if ($CAEbanco1 > 0) {
											$montoCuotaBanco1 = $montoCuotaBanco1 + $gastoAdicionalBanco1;
											$costoReal1 = $cuotas*$montoCuotaBanco1;
											$costoRealPorc1 = $costoReal1*100/$montoCredito;
											$diferencia1 = $costoReal1 - $montoCredito;
											$montoCuotaBanco1 = number_format($montoCuotaBanco1,0,"",".");
											$montoCredito1 = number_format($montoCredito,0,"",".");
											$costoReal1 = number_format($costoReal1,0,"",".");
											$costoRealPorc1 = number_format((float)$costoRealPorc1, 2, '.', ''); //Decimales
											$diferencia1 = number_format($diferencia1,0,"",".");
											echo "<tr> <td>$nombreBanco1</td> <td>$$montoCuotaBanco1</td> <td>$$montoCredito1</td> <td>$$costoReal1</td> <td>$costoRealPorc1%</td> <td>$$diferencia1</td> <td>$CAEbanco1%</td> </tr>";
										}else{
											echo "<font color='red'>(*) Para el banco '$nombreBanco1' se obtuvo un CAE negativo, por favor ingrese nuevamente los datos. </font><br>";
										}
									}
									if ($checkbox2 == 'checkbox2') {
										$CAEbanco2 = RATE($cuotas, $montoCuotaBanco2, -$montoCredito);

										if ($CAEbanco2 > 0) {
											$montoCuotaBanco2 = $montoCuotaBanco2 + $gastoAdicionalBanco2;
											$costoReal2 = $cuotas*$montoCuotaBanco2;
											$costoRealPorc2 = $costoReal2*100/$montoCredito;
											$diferencia2 = $costoReal2 - $montoCredito;
											$montoCuotaBanco2 = number_format($montoCuotaBanco2,0,"",".");
											$montoCredito2 = number_format($montoCredito,0,"",".");
											$costoReal2 = number_format($costoReal2,0,"",".");
											$costoRealPorc2 = number_format((float)$costoRealPorc2, 2, '.', '');
											$diferencia2 = number_format($diferencia2,0,"",".");
											echo "<tr> <td>$nombreBanco2</td> <td>$$montoCuotaBanco2</td> <td>$$montoCredito2</td> <td>$$costoReal2</td> <td>$costoRealPorc2%</td> <td>$$diferencia2</td>  <td>$CAEbanco2%</td> </tr>";
										}else{
											echo "<font color='red'>(*) Para el banco '$nombreBanco2' se obtuvo un CAE negativo, por favor ingrese nuevamente los datos. </font><br>";
										}
									}
									if ($checkbox3 == 'checkbox3') {
										$CAEbanco3 = RATE($cuotas, $montoCuotaBanco3, -$montoCredito);

										if ($CAEbanco3 > 0) {
											$montoCuotaBanco3 = $montoCuotaBanco3 + $gastoAdicionalBanco3;
											$costoReal3 = $cuotas*$montoCuotaBanco3;
											$costoRealPorc3 = $costoReal3*100/$montoCredito;
											$diferencia3 = $costoReal3 - $montoCredito;
											$montoCuotaBanco3 = number_format($montoCuotaBanco3,0,"",".");
											$montoCredito3 = number_format($montoCredito,0,"",".");
											$costoReal3 = number_format($costoReal3,0,"",".");
											$costoRealPorc3 = number_format((float)$costoRealPorc3, 2, '.', '');
											$diferencia3 = number_format($diferencia3,0,"",".");
											echo "<tr> <td>$nombreBanco3</td> <td>$$montoCuotaBanco3</td> <td>$$montoCredito3</td> <td>$$costoReal3</td> <td>$costoRealPorc3%</td> <td>$$diferencia3</td> <td>$CAEbanco3%</td> </tr>";
										}else{
											echo "<font color='red'>(*) Para el banco '$nombreBanco3' se obtuvo un CAE negativo, por favor ingrese nuevamente los datos. </font><br>";
										}
									}
									if ($checkbox4 == 'checkbox4') {
										if ($CAEbanco4 > 0) {
											$CAEbanco4 = RATE($cuotas, $montoCuotaBanco4, -$montoCredito);
											$montoCuotaBanco4 = $montoCuotaBanco4 + $gastoAdicionalBanco4;
											$costoReal4 = $cuotas*$montoCuotaBanco4;
											$costoRealPorc4 = $costoReal4*100/$montoCredito;
											$diferencia4 = $costoReal4 - $montoCredito;
											$montoCuotaBanco4 = number_format($montoCuotaBanco4,0,"",".");
											$montoCredito4 = number_format($montoCredito,0,"",".");
											$costoReal4 = number_format($costoReal4,0,"",".");
											$costoRealPorc4 = number_format((float)$costoRealPorc4, 2, '.', '');
											$diferencia4 = number_format($diferencia4,0,"",".");
											echo "<tr> <td>$nombreBanco4</td> <td>$$montoCuotaBanco4</td> <td>$$montoCredito4</td> <td>$$costoReal4</td> <td>$costoRealPorc4%</td> <td>$$diferencia4</td> <td>$CAEbanco4%</td> </tr>";
										}else{
											echo "<font color='red'>(*) Para el banco '$nombreBanco4' se obtuvo un CAE negativo, por favor ingrese nuevamente los datos. </font><br>";
										}
									}
								?>
							</tbody>
						</table>
					</div>
 				</article>
 			</div>

 			<!--  RIGHT BLOCK / WIDGET BLOCK-->
 			<aside>
 				<div class="widget">
 					<!--  RIGHT BLOCK TITLE -->
					<h3>Guía de uso</h3><br>

					<!--  RIGHT BLOCK BODY -->
					<ul>
						<li>Ten en cuenta que, a mayor CAE, mayor es el monto que pagas finalmente</li>
						<li>El CAE es solo un porcentaje, puedes guiarte mejor por el Costo Total</li>
					</ul>
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
