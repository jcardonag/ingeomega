<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
	<title>Valor Total Acta Lectura</title>
</head>
<?php
//Validación de inicio de sesión y sus permisos
 session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ./../Index.php");  
  }else{

  include_once '../../Bootstrap.php';


  //Conexión a la Base de Datos
  $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
      if (!$conexion) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
              exit;
                      }

                  //Consulta de la respuesta a la Base de Datos 
                  $consulta = "SELECT cast(sum(VALOR_K) as unsigned) as Valor_Total FROM secuencias_kdispersion
                                where  FECHALEGALIZATION>= (select (CONCAT(COD_ANO,COD_MES,'01')) from consulta_fecha_k_dispersion)
                                AND FECHALEGALIZATION<= (select (CONCAT(COD_ANO,COD_MES,'31')) from consulta_fecha_k_dispersion)";
                  $query = mysqli_query($conexion,$consulta);
                  $array = mysqli_fetch_array($query);



  ?>

<body>
  <br>
  <IMG src="../../img/Ingeomega.png" width="150" height="170" align="right" />
  <br>
  <br>
  <br>
  <br>
<center>
	<div class="card-body" style="width: 20rem">
	<table border="2" class="table table-striped">
  		<thead >
    		<tr >
      			<th scope="col" ><center>Valor Total Del Mes:</center></th>
    		</tr>
  		</thead>
  		<tbody id=datos>
   			<tr>
      			<td>
              <?php 
                foreach ($query as $row) { ?>
                <h4><center>$ <?php echo $row['Valor_Total']; ?></center></h4>
                <?php 
                  }
                ?>
            </td>
    		</tr>
	</tbody>

    </table>
</div>
            <a  class="btn btn-secondary" href="javascript: history.go(-2)" role="button">Volver Al Menú</a>

</center>
</body>
</html>
<?php 

 }
 ?>
