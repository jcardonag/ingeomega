<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
  <link rel="stylesheet" href="../css/estilosIniAdminProgra.css"> 
  <!--estilo letra-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <title>Programadores</title>
</head>
<?php 
session_start();

$usuario = $_SESSION['usuario'];

if(!isset($usuario)){
 header("location: ../Index.php");  
}else{

	include_once '../Bootstrap.php';
	include_once '../Controlador/Consultas.php';
	include_once '../disemenu/MenuProgramadores/header.php';

 ?>

 <body>
   <div class="textos">
    <center>
      <h1 style="font-family: 'Open Sans', sans-serif;">Bienvenido a Ingeomega</h1>
      <h2 style="font-family: 'Open Sans', sans-serif;">"Aportando a la construcción del país"</h2>
    </div>

    <center>
     <div class="card-body" style="width: 50rem">
       <table border="2" class="table table-striped">
        <thead >
          <tr >
           <th scope="col" >Video Institucional</th>
         </tr>
       </thead>
       <tbody id=datos>
        <tr>
         <td>
          <center>
           <iframe width="600" height="373.5" src="https://www.youtube.com/embed/RvztxBquGxQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </center>
         

       </tr>
     </tbody>

   </table>
 </div>
</center>

</body>
</html>

<?php 
include_once '../disemenu/MenuProgramadores/footer.php';

}


?>