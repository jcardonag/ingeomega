<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
<!-- carga web DRGP -->
<link rel="stylesheet" href="../../css/estilos.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--termino DRGP -->
<title>Informe Relecturas</title>
</head>

<?php
    
//Validación de inicio de sesión y sus permisos
 session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ../../Index.php");  
  }else{
   include_once '../../Bootstrap.php';
   //include_once '../../Controlador/HeaderAdmin.php';
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
 //consulta para Mostrar los combos
 //********************************   
$sql3="SELECT  COD_ANO from ano_calendario";//consulta el codigo y la descripción del año

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
        $combobit3 .=" <option value='".$row3['COD_ANO']."'>".$row3['COD_ANO']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}

 //Trae el mes

//*******************************  
 //consulta para mostrar los combos
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


$conexion->close(); //cerramos la conexión
  

?>

<body >
<!-- carga web DRGP -->
<div> <div class="lds-hourglass loader" id="loader"></div>
</div>
<!--termino DRGP -->
    <br>
   <IMG src="../../img/Ingeomega.png" width="150" height="170" align="right" />
  <form action="modulo_relecturas_Informe.php" enctype="multipart/form-data" method="post">
   <center> 
    <div class="card-body" style="width: 50rem" >
  <h2>INFORME DE RELECTURAS INGEOMEGA</h2>
  <p>&nbsp;</p>
    <div class="card-body" style="width: 20rem" >
    <BR>
    <BR>

       <h6>Año</h6> 
        <div class="form-group">
            <select  name="COD_ANO" class="form-control" required autofocus>
                <option value=""><?php echo $combobit3; ?></option>
            </select>
        </div>

       <h6>Mes</h6> 
        <div class="form-group">
            <select  name="COD_MES" class="form-control" required autofocus>
                <option value=""><?php echo $combobit4; ?></option>
            </select>
        </div>
        
      <p></p>
      <td>
        <div  ><button style="width:180px;" class="btn btn-outline-primary" type="submit">Generar Reporte</button>
          <a type="button"  href="reporte_powerbi_modulo_relectura.php" title="Gráfica de seguimiento de las relecturas técnicas" class="btn btn-outline-info">Gráfica</a>
        </div>
      </td>
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

 <!-- 

<?php 
    /* include_once '../../Controlador/database.php';

    $consultar = "SELECT `CODIGO_PROGRAMA`,`DESC_PROGRAMA`,`URBANO_RURAL`
    ,COUNT(`URBANO_RURAL`) AS Total_Pen FROM `MODULO_ORDENES` where `ESTADO` in (0,5) AND `REGION` IN (23,21,25,8,26,22,27,24) group by `URBANO_RURAL`,`DESC_PROGRAMA` order by `CODIGO_PROGRAMA`";
    $query = mysqli_query($conex,$consultar);
    $array = mysqli_fetch_array($query);
 ?>
    <center>
  <div class="card-body" style="width: 50rem">
  <table border="2" class="table table-striped">
      <thead >
        <tr >
            <th scope="col">Código De Programa</th>
            <th scope="col">Descripción De Programa</th>
            <th scope="col">Urbano o Rural</th>
            <th scope="col">Total Pendientes</th>
        </tr>
      </thead>
      <tbody id=datos>
        <?php 
        foreach ($query as $row) { ?>
        <tr>
            <th scope="row"><?php echo $row['CODIGO_PROGRAMA']; ?></th>
            <td><?php echo $row['DESC_PROGRAMA']; ?></td>
            <td><?php echo $row['URBANO_RURAL']; ?></td>
            <td><?php echo $row['Total_Pen'] ; ?></td>
        </tr>
  </tbody>
  <?php 
}
   ?>
    </table>
</div>
</center>

       

</body>
</html>

<?php 
 }
 ?>
-->
*/
