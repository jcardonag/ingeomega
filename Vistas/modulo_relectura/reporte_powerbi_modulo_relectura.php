<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
<!-- carga web DRGP -->
<link rel="stylesheet" href="../../css/estilos.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--termino DRGP -->
<title>Seguimiento Lecturas</title>
</head>
<?php 
  
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ../Index.php");  
  }else{

  include_once '../../Bootstrap.php';

?>

 
<body>
<br>
<br>

	<center>
	<div class="card-body" style="width: 50rem">
	<table border="2" class="table table-striped">
  		<thead>
    		<tr >
      			<th scope="col">Seguimiento De Relecturas</th>
    		</tr>
  		</thead>
  		<tbody id=datos>
   			<tr>
      			<td>
              <iframe title="Modulo_Relectura" width="800" height="636" src="https://app.powerbi.com/view?r=eyJrIjoiYTk3ZTE5ODgtNGUxNi00YTc4LTgyZTEtNzA0MmYwMzBmMWVkIiwidCI6Ijg0MWFmZjYzLWE1ZjAtNGIxYi1iZjhmLTI1M2I0MWQ1ZDY2ZiIsImMiOjR9&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>
              </center>
            </td>
    		</tr>

	   </tbody>

    </table>
    <br>
            <a class="btn btn-secondary" href="javascript: history.go(-1)" role="button">Volver</a>
</div>
</center>
</body>
</html>


<?php 

 }
 ?>