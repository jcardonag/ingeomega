<?php
	//La siguiente dos lineas es lo que transforma el archivo a un excel .xls
	header('Content-type:application/xls');
	//En esta linea también es donde le asigna el nombre al documento atra vez del filename
	header('Content-Disposition: attachment; filename=ATC-FR-39.xls');
	//Incluimos el archivo database en donde esta la conexión a la BD
	include_once '../Controlador/database.php';

 //Las siguientes lienas se usan para hacer la consulta a la BD de la tabla que vamos a trabajar.
 $consultar = "SELECT * FROM usuario";
 $query = mysqli_query($conex,$consultar);


?>
<!DOCTYPE html>
<html>
<head>
<!--La codificación html se usa para incluir una etiqueta meta para que reconosca caracteres como tildes y demás.-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
		//La siguiente variable $con se usa como contador para poder imprimir números ascendente como(1 y luego el 2,etc).
		$cont=0;
		//Este while se útiliza para realizar un ciclo y que lea todos los datos que hayan en la BD
		while ($row=mysqli_fetch_assoc($query)) {
			//Aquí hacemos la sumatoria para el contador 
			$con += 1;
			?>
<!--En la siguiente linea se da inicio a la creación y distribución de la tabla-->
<table class="table table-striped" border="2">
	<thead>
<!--Las etiquetas tr se refiere a las filas y las etiquetas th se refiere a las columnas -->
		<tr>
			<th>PRUEBA</th>
			<th>DE</th>
			<th>ENTREGA</th>
			<th></th>
			<th></th>
			<th>ACT-FR -39</th>
		</tr>
		<tr>
			<!--La etiqueta style se usa para poner un color de fondo a la casilla y la etiqueta align se usa para alinear el texto al lado deseado-->
			<th style = " background-color: gray;" scope="col" align="right">REMITENTE: </th>
			<th style = " background-color: gray;" scope="col" align="left">Empresas Publicas de Medellín E.S.P</th>
			<th align="right">NOMBRE</th>
			<th>DE</th>
			<th align="left">QUIEN ENTREGA</th>
			<th ></th>

		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col" align="right">DESTINATARIO:</th>
			<th style = " background-color: gray;">  </th>
		</tr>
		<tr>
			<th align="left">Nombre</th>
			<th align="left"><?php echo $row['usuario']; ?></th>
			<th align="left">Registro o CC:</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th align="left">Dirección</th>
			<th align="left"><?php echo $row['usuario']; ?></th>
			<th align="right" style = " background-color: gray;">TIPO</th>
			<th style = " background-color: gray;">DE</th>
			<th align="left" style = " background-color: gray;">COMUNICACIÓN</th>
			<th style = " background-color: gray;">  </th>
		</tr>
		<tr>
			<th align="left">Municipio</th>
			<th align="left"><?php echo $row['usuario']; ?></th>
			<th style = " background-color: gray;" align="left">Citación</th>
			<th style = " background-color: gray;" align="left"></th>
			<th style = " background-color: gray;" align="left">Inicio de actuación</th>
			<th style = " background-color: gray;" align="left"></th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">RECIBIÓ:</th>
			<th style = " background-color: gray;"></th>
			<th style = " background-color: gray;" align="left">Aviso</th>
			<th style = " background-color: gray;">X</th>
			<th style = " background-color: gray;" align="left">Interrupción de términos</th>
			<th style = " background-color: gray;" align="left"></th>
		</tr>
		<tr>
			<th align="left">Firma</th>
			<th>  </th>
			<th style = " background-color: gray;" align="left">Oficio de respuesta</th>
			<th style = " background-color: gray;" align="left"></th>
			<th style = " background-color: gray;" align="left">Carta de cobro</th>
			<th style = " background-color: gray;" align="left"></th>
		</tr>
		<tr>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" align="left">  </th>
			<th style = " background-color: gray;" align="left">  </th>
			<th style = " background-color: gray;" align="left">  </th>
			<th style = " background-color: gray;" align="left">  </th>
		</tr>
		<tr>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" align="right">Número</th>
			<th style = " background-color: gray;">de</th>
			<th style = " background-color: gray;"  align="left">PQR</th>
			<th style = " background-color: gray;">  </th>
		</tr>
		<tr>
			<th align="left">Nombre</th>
			<th>  </th>
			<th style = " background-color: gray;">  </th>
			<th style = " background-color: gray;">  </th>
			<th style = " background-color: gray;">  </th>
			<th style = " background-color: gray;">  </th>
		</tr>
		<tr>
			<th align="left">CC</th>
			<th>  </th>
			<th align="right">CAUSAS</th>
			<th >DE</th>
			<th align="left">DEVOLUCIÓN</th>
			<th>  </th>
		</tr>
		<tr>
			<th align="left">Teléfono</th>
			<th>  </th>
			<th align="left">Casa sola</th>
			<th align="left">  </th>
			<th align="left">Se trasladó</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" align="left">Fecha y Hora</th>
			<th>  </th>
			<th align="left">Casa vacía</th>
			<th align="left">  </th>
			<th align="left">Fuerza mayor</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<th  style = " background-color: gray;" align="left">de Entrega</th>
			<th>  </th>
			<th align="left">Dirección errada</th>
			<th align="left">  </th>
			<th align="left">Se negó a recibir</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" align="right">Observaciones</th>
			<th style = " background-color: gray;" align="left">de devolución:</th>
			<th align="left">Dirección no existe</th>
			<th align="left">  </th>
			<th align="left">Zona de alto riesgo</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<th>  </th>
			<th>  </th>
			<th align="left">El cliente no permanece</th>
			<th align="left">  </th>
			<th align="left">No hay quien reciba</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<th>  </th>
			<th>  </th>
			<th align="left">Faltan datos en la dirección</th>
			<th align="left">  </th>
			<th align="left">Se desconoce al cliente</th>
			<th align="left">  </th>
		</tr>
		<tr>
			<!--En la siguiente line útilizamos el contador $con para lo que anteriormente se dijo-->
			<th  align="left"><?php echo "Carta N°: ",$con;  ?> </th>
			<th  align="left">Fecha Generación:<?php
  				// Obteniendo la fecha actual del sistema con PHP
  					$fechaActual = date('d-m-Y');
  					echo $fechaActual;
					?>   </th>
			<th align="left">Solicitud</th>
			<th align="left">  </th>
			<th align="left">3423430</th>
			<th align="left">  </th>
		</tr>
		<tr></tr>
		<tr>
			<th style = " background-color: gray;"></th>
			<th style = " background-color: gray;"></th>
			<th style = " background-color: gray;">INFORMACIÓN DEL</th>
			<th style = " background-color: gray;">MEDIDOR</th>
			<th style = " background-color: gray;"></th>
			<th style = " background-color: gray;"></th>
		</tr>
		<tr>
			<th align="left">Ubicación</th>
			<th>  </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th align="left">Marca</th>
			<th>  </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th align="left">Lectura</th>
			<th>  </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th align="left">Diámetro</th>
			<th>  </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th align="left">Serie</th>
			<th>  </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th align="left">Observaciones:</th>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>

	</thead>
	<?php
		}

	?>
	
				
</table>