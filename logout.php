<?php
	//Código para destruir el inicio de sesión y que asi la cuenta quede cerrada
	session_start();

	session_destroy();

	header("location: Index.php");
	exit();

?>