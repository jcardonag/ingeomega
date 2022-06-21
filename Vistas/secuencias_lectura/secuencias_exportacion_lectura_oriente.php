<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../../img/Ingeomega.png" />

    <title>Informe Control Lectura</title>
</head>
<?php
//Validación de inicio de sesión y sus permisos
 session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ./../Index.php");  
  }else{

  include_once '../../Bootstrap.php';
  ?>
<?php

                //Conexión a la Base de Datos
                $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
                                if (!$conexion) {
                                                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                                    exit;
                                                }


//Elimina SQL 
$sql="DELETE FROM consulta_fecha_lectura_oriente" ; 

//A continuación se llaman las variables para que llenen el excel con los datos
$resultado=mysqli_query($conexion,$sql);

//Se trae el dato enviado a traves del metodo POST de secuencias_lectura_Mensual_Regiones_Parametrizar
$ANO1=$_POST['COD_ANO'];
$MES1=$_POST['COD_MES'];

//Conexión a la Base de Datos
                $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
                                if (!$conexion) {
                                                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                                    exit;
                                                }


   $sql="INSERT INTO consulta_fecha_lectura_oriente(Id_acta,COD_ANO,COD_MES) VALUES('1','$ANO1','$MES1')";

   $resultado=mysqli_query($conexion,$sql);

   ini_set('max_execution_time', 1000000);


  echo exec('C:\Windows\System32\cmd.exe /C START C:\xampp\htdocs\ingeomega\botonesTalend\exportar_lectura_oriente\exportar_lectura_oriente\exportar_lectura_oriente_run.bat');






?>

<body >
    <IMG src="../../img/Ingeomega.png" width="150" height="170" align="right" />
<form>
    <center>
        <br>
        <br>
         <div class="card-body" style="width: 50rem" >
            <h2>DESCARGA COMPLETA</h2>
                <br>
                <br>
                <img   src="../../img/DescargaActa.png">
                <br>
                <br>
            <h4>Los Informes Se Descargaron Exitosamente En Tu Carpeta</h4>
            <br>
            <br>
            <a  class="btn btn-secondary" href="javascript: history.go(-1)" role="button">Volver</a>

    </center>
</form>
</body>
</html>
<?php 
 }
 ?>
