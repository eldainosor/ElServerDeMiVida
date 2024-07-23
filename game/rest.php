<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Hora de hacer una respuesta basura para poder acceder al juego
		echo '{"result":"success","content":{"userid":"000001","sessionid":"1"}}';
	}
?>