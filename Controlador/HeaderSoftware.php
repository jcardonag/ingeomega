<!DOCTYPE html>
<html>

<head>
   
  <title>Menú Desarrolladores</title>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><h3>¡Bienvenido Desarrolladores!  </h3></li>
      <div align="right" class="card-body">
      <li class="cerrar-sesion"><a href="../logout.php">Cerrar sesión</a></li>
      </div>
      </ol>
  </nav>
  <div align="right" class="card-body">

  <a  class="btn btn-outline-info" href="../actualizar_talend/Ejecutar-Modulo_ordenes.php" role="button">Actualizar Modulo de Ordenes</a>

  <div class="btn-group">
      <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
         Modulo Ordenes<span class="caret"></span>
      </button>

      <ul class="dropdown-menu" role="menu">
        <!-- <li><a class="dropdown-item" href="../Vistas/modulo_ordenes/modulo_ordenes_Controlinstala_Ordenes_Tipificacion_Parametrizar.php">Tipificación</a></li> -->
        <li><a class="dropdown-item" href="../Vistas/modulo_ordenes/modulo_ordenes_Controlinstala_Ordenes_Cerradas_Parametrizar.php">Ordenes Cerradas</a></li>
        <li><a class="dropdown-item" href="../Vistas/modulo_ordenes/modulo_ordenes_Controlinstala_Pendientes_Parametrizar.php">Por Regiones</a></li>
      </ul>
  </div>

  <div class="btn-group">
      <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
         Secuencias Lecturas<span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a class="dropdown-item" href="../Vistas/secuencias_lectura/secuencias_lectura_Mensual_Regiones_Parametrizar.php">Por Regiones</a></li>
      </ul>
  </div>

    <!-- 
    <a  class="btn btn-outline-info" href="../Controlador/HeaderGraficas.php" role="button">Graficas</a>
    <a  class="btn btn-outline-success" href="../Controlador/excel.php" role="button">Excel</a>
    <a  class="btn btn-outline-success" href="../Controlador/carta.php" role="button">Carta</a>
    <a  class="btn btn-outline-success" href="../Controlador/ATC-FR-39.php" role="button">ATC-FR -39</a>
    <a  class="btn btn-outline-danger" href="../Controlador/pdf.php" role="button">PDF</a>
    -->
  </div>
    
</head>
<body>

</body>
</html>
