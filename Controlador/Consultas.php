<?php 
	include_once '../Controlador/database.php';

 $consultar = "SELECT * FROM usuario";
 $query = mysqli_query($conex,$consultar);
 $array = mysqli_fetch_array($query);

 ?>