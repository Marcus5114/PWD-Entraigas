<!DOCTYPE html>
<html>
<head>

<?php
// cambio del profesor
	include 'Cabecera.php';
	include 'Izq.php';

	include 'Der.php';
?>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<title>Test</title>


	<script type="text/javascript">
		function validacion () {
			if (document.getElementByName('nombre').value.length < 3) {
				alert ("El nombre debe tener mas de tres letras");
			}
		}
	</script>
</head>

<body>
	
	<div class="centro">
	
		<form onsubmit="validacion()">
			<label>Nombre:</label><input type="text" name="nombre"> <br>

			<label>Edad:</label><input type="text" name="edad"> <br>

			<label>Sexo:</label> <br>

			M<input type="radio" name="sexo" value="1"> <br>

			F<input type="radio" name="sexo" value="2"><br>

			<label>Estudios:</label> <select name="estudios">
				<option>Primario</option>
				<option selected>Secundario</option>
				<option>Terciario</option>
				<option>Universitario</option>
			</select>

			<br>

			<input type="submit" name="enviar" value="Enviar" onclick="validacion()">

		</form>
	</div>
	
	
	
	

</body>
</html>
