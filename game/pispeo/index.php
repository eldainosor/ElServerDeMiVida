<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pispeador de requests de ERDTV</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<h3>Todas las requests:</h3>
	<?php
		$conexionDatos = new mysqli('localhost', 'root', '', 'erdtv_log_requests');
		$queryRequests = "SELECT * FROM peticiones";
		$resultDatos = mysqli_query($conexionDatos, $queryRequests);
		$numComentario = 0;

		while($elementoLogi = mysqli_fetch_array($resultDatos)){
			echo "<div class=\"txtComentario\"><p><strong>Timestamp #$elementoLogi[0]</strong></p><p>$elementoLogi[1]</p></div>";
		}
		mysqli_close($conexionDatos);
	?>
</body>
</html>