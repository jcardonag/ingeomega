<html>
<head>
<link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
<!-- carga web DRGP -->
<link rel="stylesheet" href="../../css/estilos.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--termino DRGP -->
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
//Trae la región
$conexion = @new mysqli($server, $username, $password, $database);
 
    if ($conexion->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
    {
        die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
    }

  //*******************************  
 //consulta para costrar los combos
 //********************************   


//Trae el año
  //*******************************  
  //consulta para Mostrar los combos
  //********************************   
  $sql2="SELECT  COD_ANO from ano_calendario";//consulta el codigo y la descripción del año

 //*********************************************************
 //usamos la conexion para dar un resultado a la variable
 //*********************************************************

 $result2 = $conexion->query($sql2);

 //***************************************
 //combos para mostrar listas deplegables
 //***************************************

 //tercer combo 
if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit2="";
    while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
    {
        $combobit2 .=" <option value='".$row2['COD_ANO']."'>".$row2['COD_ANO']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}


$sql3="SELECT  REGION, REGNDESC from zona where REGION<> 21 and REGION<> 26 and REGION <> '23,21,25,8,26,22,27,24' ";//consulta el codigo y la descripción del region

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

//Trae el mes

//*******************************  
 //consulta para costrar los combos
 //********************************   
$sql4="SELECT COD_MES, DESCMES from fecha_calendario";//consulta el codigo y la descripción del mes

//*********************************************************
 //usamos la conexion para dar un resultado a la variable
//*********************************************************

$result4 = $conexion->query($sql4);

//***************************************
//combos para mostrar listas deplegables
//***************************************

//tercer combo 
if ($result4->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit4="";
    while ($row4 = $result4->fetch_array(MYSQLI_ASSOC)) 
    {
        $combobit4 .=" <option value='".$row4['COD_MES']."'>".$row4['DESCMES']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}

ini_set('max_execution_time', 10000);



$conexion->close(); //cerramos la conexión
  

?>

<body>
<!-- carga web DRGP -->
<div> <div class="lds-hourglass loader" id="loader"></div>
</div>
<!--termino DRGP -->
    <br>
   <IMG src="../../img/Ingeomega.png" width="150" height="170" align="right" />
  <form action="secuencias_lectura_Mensual_Regiones_Administrativo_Informe.php" enctype="multipart/form-data" method="post">
   <center> 
    <div class="card-body" style="width: 50rem" >
  <h2>CONTROL DE LECTURA POR MES INGEOMEGA</h2>
  <br>
  <p>&nbsp;</p>
    <div id="filtros1" class="card-body" style="width: 20rem" >
    
        <h6>Año</h6> 
        <div class="form-group">
            <select name="COD_ANO" class="form-control" required autofocus>
                <option value=""><?php echo $combobit2; ?></option>
            </select>
        </div>
        
        <h6>Mes</h6> 
        <div class="form-group">
            <select name="COD_MES" class="form-control" required autofocus>
                <option value=""><?php echo $combobit4; ?></option>
            </select>
        </div>
        
       <h6>Regiones</h6> 
       <div class="form-group">
            <select name="REGION" class="form-control" required autofocus>
                <option value=""><?php echo $combobit3; ?></option>
            </select>
        </div>


      <p></p>
      <td>
        <div>
          <button style="width:180px;" class="btn btn-outline-primary" type="submit">Generar Reporte</button>
        </div>
      </td>
      <br>
            <a class="btn btn-secondary" href="javascript: history.go(-1)" role="button">Volver</a>
      <td></td>
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