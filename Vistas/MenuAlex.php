<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
	<link rel="stylesheet" href="../css/estilosIni.css"> 
	<!--estilo letra-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
	<title>Alexander</title>
</head>
<body>
<header>

<?php 
	session_start();

	$usuario = $_SESSION['usuario'];

	if(!isset($usuario)){
    	header("location: ../Index.php");  
  }else{

	include_once '../Bootstrap.php';
	include_once '../Controlador/Consultas.php';
	include_once '../disemenu/MenuAlex/header.php';

 ?>


	<body>

  <div class="textos">
    <center>
        <h1 style="font-family: 'Open Sans', sans-serif;">Bienvenido a Ingeomega</h1>
        <h2 style="font-family: 'Open Sans', sans-serif;">"Aportando a la construcción del país"</h2>
	</div>
<!--<IMG src="../img/Mapa.png" width="110" height="180" align="right" /> Descomentar codigo Map-->
</body>
</html>


</html>

<?php 
  include_once '../disemenu/MenuAlex/footer.php';

 }
 

 ?>