<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
	<title>Software</title>
</head>
<?php 
	session_start();

	$usuario = $_SESSION['usuario'];

	if(!isset($usuario)){
    	header("location: ../Index.php");  
  }else{

	include_once '../Bootstrap.php';
	include_once '../Controlador/Consultas.php';
	include_once '../disemenu/MenuSoftware/header.php';

 ?>

<body>

</body>
</html>

<?php 
  include_once '../disemenu/MenuSoftware/footer.php';

 }
 

 ?>