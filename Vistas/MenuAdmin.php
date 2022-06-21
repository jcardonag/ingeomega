<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../img/Ingeomega.png" />
  <link rel="stylesheet" href="../css/estilosIniAdminProgra.css"> 
    <!--estilo letra-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
</head>
<?php 
  
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header("location: ../Index.php");  
  }else{

  include_once '../Bootstrap.php';
  include_once '../Controlador/Consultas.php';
  include_once '../disemenu/MenuAdmin/header.php';

?>

 
<body>

  <div class="textos">
    <center>
        <h1 style="font-family: 'Open Sans', sans-serif;">Bienvenido a Ingeomega</h1>
        <h2 style="font-family: 'Open Sans', sans-serif;">"Aportando a la construcción del país"</h2>
	</div>
  <!-- 
	<center>
	<div class="card-body" style="width: 50rem">
	<table border="2" class="table table-striped">
  		<thead >
    		<tr >
      			<th scope="col"></th>
    		</tr>
  		</thead>
  		<tbody id=datos>
   			<tr>

              <center>
               <iframe width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiNzhhMjVlYmUtNzMyZC00NzVmLTg0NmMtMjdmODhmOWRlMWZiIiwidCI6Ijg0MWFmZjYzLWE1ZjAtNGIxYi1iZjhmLTI1M2I0MWQ1ZDY2ZiIsImMiOjR9&pageName=ReportSection7a0510ecaa5dd3e56240" frameborder="0" allowFullScreen="true"></iframe>
              </center>
    		</tr>
	</tbody>

    </table>
</div>
</center>
-->
</body>
</html>


<?php 
  include_once '../disemenu/MenuAdmin/footer.php';

 }
 ?>