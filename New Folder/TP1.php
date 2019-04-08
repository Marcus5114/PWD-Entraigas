<!DOCTYPE html>
<html>
<head>

<?php
	include 'Cabecera.php';
	include 'Izq.php';
	require 'Centro.php';
	include 'Der.php';
?>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<title>Test</title>


	<script type="text/javascript">
		function validacion () {
			if (document.getElementByName('nombre').value.lenght < 3) {
				alert ("El nombre debe tener mas de tres letras")
			}
		}
	</script>
</head>

<body>
	
	
	
	
	

</body>
</html>
