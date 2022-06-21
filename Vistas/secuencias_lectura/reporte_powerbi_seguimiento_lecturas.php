<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../../img/Ingeomega.png" />
<!-- carga web DRGP -->
<link rel="stylesheet" href="../../css/estilos.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--termino DRGP -->
<title>Seguimiento Control Lectura</title>
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
  		<thead >
    		<tr >
      			<th scope="col">Seguimiento De Observaciones De Todo Tipo De Lecturas</th>
    		</tr>
  		</thead>
  		<tbody id=datos>
   			<tr>
      			<td>
             <!-- 
              <center>
               <iframe width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiNzhhMjVlYmUtNzMyZC00NzVmLTg0NmMtMjdmODhmOWRlMWZiIiwidCI6Ijg0MWFmZjYzLWE1ZjAtNGIxYi1iZjhmLTI1M2I0MWQ1ZDY2ZiIsImMiOjR9&pageName=ReportSection7a0510ecaa5dd3e56240" frameborder="0" allowFullScreen="true"></iframe>
              </center>
              -->
              <center>
               <iframe width="700" height="473.5" src="https://app.powerbi.com/view?r=eyJrIjoiMGJlMDJjZjItMWE0OC00ZjNhLWJkMGEtYTExZjRmYmFjZGMzIiwidCI6ImJmMWNlOGI1LTVkMzktNGJjNS1hZDZlLTA3YjNlNGQ3ZDY3YSIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
              </center>


              
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