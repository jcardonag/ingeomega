<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
	<?php 
	session_start();
 	include_once '../Bootstrap.php';
    include_once '../Controlador/Consultas.php';


	?>
	<title>Recuperar contraseña</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/css/util.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../disenologin/images/elec-02.jpg);">
					<span class="login100-form-title-1">
						Recuperar Contraseña
					</span>
				</div>
<form action="../Controlador/buscarpregunta.php" method="POST">
	<center>
		<br>
		<div class="card-body" style="width: 20rem" >
			<h6>Usuario</h6>
			<br>
			<input class="form-control" type="text" name="usuario" placeholder="Usuario" autocomplete="off" required autofocus>
			<br>
			<input type="submit" class="btn btn-secondary" name="" value="Consultar"> 
			<a  class="btn btn-secondary" href="../Index.php" role="button">Volver</a>
	</center>

</form>
</div>
		</div>
	</div>
	
	<script src="../disenologin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../disenologin/vendor/animsition/js/animsition.min.js"></script>
	<script src="../disenologin/vendor/bootstrap/js/popper.js"></script>
	<script src="../disenologin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../disenologin/vendor/select2/select2.min.js"></script>
	<script src="../disenologin/vendor/daterangepicker/moment.min.js"></script>
	<script src="../disenologin/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../disenologin/vendor/countdowntime/countdowntime.js"></script>
	<script src="../disenologin/js/main.js"></script>

</body>
</html>

 