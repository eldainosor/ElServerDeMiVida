<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Primero, vamos a guardar un registro en json berreta
		// de las peticiones que haga la criatura
		// (la criatura en este caso es erdtv.exe)
		$conexionDatos = new mysqli('localhost', 'root', '', 'erdtv_log_requests');

		// Vamos filtrando la data que meta en la peticion POST
		//$output = "{";
		$output = "{";
		foreach ($_POST as $key => $value) {
		//	$output = '"' . $output . '"' . $key . ':' . $value . ',';
			$output = $key . ": " . $value;
		}
		//$output = $output . "}";
		$tmstmp = time();
		// Vamos a guardar las peticiones que haga el juego en nuestra db
		$gameRequestRequest = "INSERT INTO `peticiones`(`timestamp`,`outputdata`) VALUES ('$tmstmp','$output');";
	    $resultEnvio = mysqli_query($conexionDatos, $gameRequestRequest);

	    // Una vez hecho esto, es hora
		// de hacer una respuesta basura para algunas respuestas que busca el juego
		if (array_key_exists('packet', $_POST)) {
			$peticionERDTV = json_decode($_POST['packet'], true);
			if (array_key_exists('content', $peticionERDTV)) {
				// WIP manipular datos de content
			}
			if ($peticionERDTV['type'] === "getauthorizedsongs" || ($peticionERDTV['type'] === "getallsongs")) {
				// we're moving
				echo '{"result":"success","content":{"songs":"[{}]"}}';
			} else {
				echo '{"result":"success","content":{"userid":"000001","sessionid":"1"}}';
			}
		} else {
			echo '{"result":"needupgrade"}';
		}
	}
?>