<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cotizador compras tao</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<h1>COTIZADOR</h1>
		<br>
		<br>
		<br>
	</div>
	</div>
</div>
<br>
<br>
<br>
<div class="container-fluid">
<div class="row">
		
<div class="col-md-12">
		<div class="col-md-1"></div>
		<div class="col-md-3" style="padding-top: 60px; padding-left: 30px;">

		<form>
			<div class="form-group">
				<label for="ancho">Ancho cm:</label>
				<input type="text" class="form-control"  id="ancho" onkeyup="operaciones();">
			</div>
				
			<div class="form-group">
				<label for="alto">Alto cm:</label>
				<input type="text" class="form-control"  id="alto" onkeyup="operaciones();">
			</div>

			<div class="form-group">
				<label for="largo">Largo cm:</label>
				<input type="text" class="form-control"  id="largo" onkeyup="operaciones();">
			</div>

			  	<div class="form-group">
				    <label for="peso">Peso en KG:</label>
				    <input type="text" class="form-control"  id="peso" onkeyup="operaciones();">
			  	</div>

			  	<div class="form-group">
				    <label for="valor">Valor del articulo en USD:</label>
				    <input type="text" class="form-control"  id="valor" onkeyup="operaciones();">
			  	</div>
			  	<br>
			    <br>
			    <br>
			    
			</form>
			<br/>
			<br/>
		</div>

		<!-- Mostramos por pantalla los resultados de las operaciones-->
		<div class="col-md-3" style="padding-top: 60px; padding-left: 30px;">
			<div class="form-group">
				<label for="rvolumetrico">Peso Volumetrico:</label>
				<input type="text" class="form-control" id="rvolumetrico" readonly="">
			</div>

			<div class="form-group">
				<label for="rpeso">Peso en KG:</label>
				<input type="text" class="form-control" id="rpeso" readonly="">
			</div>

			<div class="form-group">
				<!--<label for="total">Valor del articulo en USD:</label>-->
				<input type="hidden" class="form-control" id="rvalor" readonly="">
			</div>

			<div class="form-group">
				<label for="total">Flete internacional en USD:</label>
				<input type="text" class="form-control" id="rflete" readonly="">
			</div>

			<div class="form-group">
				<!--<label for="cif">Valor CIF:</label>-->
				<input type="hidden" class="form-control" id="rcif" readonly="">
			</div>

			<div class="form-group">
				<label for="honorarios">Honorarios por gestion en USD:</label>
				<input type="text" class="form-control" id="rhonorarios" readonly="">
			</div>

			<div class="form-group">
				<label for="total">Valor Importacion En USD:</label>
				<input type="text" class="form-control" id="rtotal" readonly="">
			</div>
			<div class="form-group">
				<label for="total">Valor Importacion en pesos:</label>
				<input type="text" class="form-control" id="rvpesos" readonly="">
			</div>
			<br>
		</div>

		<div class="col-md-5" align="center">
			<img src="img/carro.png" alt="" class="img-rounded img-responsive hidden-xs hidden-sm">
		</div>

		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
		<div class="fecha">
			<?php
				echo "FECHA ESTIMADA DE ENTREGA" ." ". date('d-m-Y',strtotime('+20 day'));
			?>

		
		</div>
		</div>

<div class="col-md-3">
			<a href="http://www.comprastao.com" class="btn btn-primary btn-block" role="button">REGRESAR</a>
		</div>
		<div class="col-md-3">
			<a href="http://www.comprastao.com/cotizador/import.php" class="btn btn-primary btn-block" role="button">LIMPIAR</a>
						
		</div>
	<div class="col-md-12">
		<br>
		<br>
		<br>
		<div class="copyrights">
			<td><span style="color: #ffffff; text-align: center;">Desarrollado por:</span></td>
			<td><a href="https://giohosting.com/" target="_blank">Giohosting.com</a></td>
		</div>
	</div>
	</div>
</div>

<!--Inicio de scripts js -->
 <?php	echo "<script language=\"JavaScript\" src=\"js/funtions.js\"></script>";?>

</body>
</html>
