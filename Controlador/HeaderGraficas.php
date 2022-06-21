
<!DOCTYPE html>
<html>
<head>
	  <link rel="icon" type="image/png" href="../img/m.png" />
	<title>Graficas</title>
</head>
<?php 
	include_once '../Bootstrap.php';
 ?>
<body>
<nav class="navbar navbar-light" style="background-color: #4a6cc3;">
  <font COLOR="black" align = left><b><h3>Ingeomega</h3></b></font>

  <button COLOR="white" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <style type="text/css">
        a {
            color: purple;
          }
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #939598;
          }
        body {
          color: grey;
        }
  </style>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Grafica De Ciclos</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../amcharts/grafica.php">Ciclo 1</a>
          <a class="dropdown-item" href="../amcharts/grafica2.php">Ciclo 2</a>
          <a class="dropdown-item" href="../Vistas/Graficadelineas.php">Grafica de lineas</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Grficas 2</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Graficas 3</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="../Vistas/MenuAdmin.php"><b>Menú Principal</b><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>