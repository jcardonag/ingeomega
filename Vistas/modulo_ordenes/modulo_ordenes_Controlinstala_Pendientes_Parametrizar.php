<html>
<head>
<link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
<!-- carga web DRGP -->
<link rel="stylesheet" href="../../css/estilos.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--termino DRGP -->
<title>Informe Ordenes Comerciales</title>
</head>
 <!--<div align="left">
   
  </div>-->

<?php
//Validación de inicio de sesión y sus permisos
 session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ./../Index.php");  
  }else{

  include_once '../../Bootstrap.php';
//***************************
//variables para la conexión
//***************************

$server     = '192.168.4.240'; //servidor
$username   = 'lectura'; //usuario de la base de datos
$password   = 'lectura2021**'; //password del usuario de la base de datos
$database   = 'ingeomega'; //nombre de la base de datos


//*********************************
 //variable para conexión de mysql
//*********************************

$conexion = @new mysqli($server, $username, $password, $database);
 
    if ($conexion->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
    {
        die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
    }

  //*******************************  
 //consulta para costrar los combos
 //********************************   
$sql3="SELECT  REGION, REGNDESC from zona where REGION<> '23,21,25,8,26,22,27,24'";//consulta el codigo y la descripción del region

//*********************************************************
 //usamos la conexion para dar un resultado a la variable
//*********************************************************

$result3 = $conexion->query($sql3);

//***************************************
//combos para mostrar listas deplegables
//***************************************

//tercer combo 
if ($result3->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit3="";
    while ($row3 = $result3->fetch_array(MYSQLI_ASSOC)) 
    {
        $combobit3 .=" <option value='".$row3['REGION']."'>".$row3['REGNDESC']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}


$conexion->close(); //cerramos la conexión
  

?>

 <!-- <link rel="stylesheet" type="text/css" href="css/style.css">-->
<body>
<!-- carga web DRGP -->
<div> <div class="lds-hourglass loader" id="loader"></div>
</div>
<!--termino DRGP -->
    <br>
   <IMG src="../../img/Ingeomega.png" width="150" height="170" align="right" />
  <form action="modulo_ordenes_Controlinstala_Pendientes_Informe.php" enctype="multipart/form-data" method="post">
   <center> 
    <div class="card-body" style="width: 50rem" >
  <h2>ORDENES COMERCIALES INGEOMEGA</h2>
  <br>
  
  <p>&nbsp;</p>
    <h6>Pendientes De Todas Las Regiones</h6> 
    <div class="card-body" style="width: 20rem" >
      <p></p>

        <td><div  ><button style="width:180px;" class="btn btn-outline-primary" type="submit">Generar Reporte</button>
        <a type="button"  href="reporte_powerbi_modulo_ordenes.php" title="Gráfica de seguimiento de las ordenes comerciales" class="btn btn-outline-info">Gráfica</a></div></td>


      <br>

            <a  class="btn btn-secondary" href="javascript: history.go(-1)" role="button">Volver</a>

      <td> </td>
 </div>     
    </form>
<div>
</center>
<!-- carga web DRGP -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../../javascript/main.js"></script>
   <!--termino DRGP -->
</body>
</html>

<?php 
 }
 ?>