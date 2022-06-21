<?php
	//La siguiente dos lineas es lo que transforma el archivo a un excel .xls
	header('Content-type:application/xls');
	//En esta linea también es donde le asigna el nombre al documento atra vez del filename
	header('Content-Disposition: attachment; filename=Carta.xls');
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
		//Este while se útiliza para realizar un ciclo y que lea todos los datos que hayan en la BD
		while ($row=mysqli_fetch_assoc($query)) {
			?>
 <!--En la siguiente linea se da inicio a la creación y distribución de la tabla-->		
<table  class="table table-striped">
	<thead>
		<!--Las etiquetas tr se refiere a las filas y las etiquetas th se refiere a las columnas -->
		<tr>
			<!--La etiqueta align se usa para alinear el texto al lado deseado-->
			<th align="left">Medellín, <?php
  				// Obteniendo la fecha actual del sistema con PHP
  					$fechaActual = date('d-m-Y');
 						echo $fechaActual;?>
 			</th>
		</tr>
		<tr>
			<th>0143-<?php echo $row['usuario']; ?></th>
		</tr>
		<tr></tr>
		<tr >
			<th align="left">Señor(a)</th>
		</tr>
		<tr >
			<th scope="col" align="left">USUARIO DEL SERVICIO</th>
		</tr>
		<tr>
			<th align="left"><?php echo $row['usuario']; ?></th>
		</tr>
		<tr>
			<th align="left"> <?php echo $row['usuario']; ?>,Antioquia </th>
		</tr>
		<tr></tr>
		<tr>
			<th align="left">Asunto: Revisión del medidor de acueducto </th>
		</tr>
		<tr>
			<th align="left">Servicio Suscrito: <?php echo $row['usuario']; ?></th>
		</tr>
		<tr></tr>
		<tr>
			<th align="left">Respetado señor(a):</th>
		</tr>
		<tr>
			<th font-face="Arial" scope="row" style="text-align:justify">EPM le informa que, de acuerdo con los estudios y análisis realizados a los consumos previos de acueducto registrados en su inmueble, se determinó que se requiere verificar la precisión del equipo de medida.
			Por lo anterior, el próximo <?php echo $row['usuario']; ?>, <?php echo $row['usuario']; ?> en el horario comprendido entre las <?php echo $row['usuario']; ?> y <?php echo $row['usuario']; ?>, con número de pedido <?php echo $row['usuario']; ?> se procederá a retirar el medidor para inspeccionarlo en nuestro laboratorio, y durante el tiempo  que dure la revisión, se instalará un medidor provisional. Es importante precisar que estos  trabajos no generan costos adicionales para el cliente, dado que los mismos están incluidos en la tarifa del servicio. Sin embargo, si se requiere reemplazar algún accesorio, este deberá ser asumido por el cliente para lo cual la Entidad procederá a realizar el cobro en la factura de  servicios públicos domiciliarios.
			<br>
			Si lo considera necesario, en el momento de la revisión podrá asesorarse de un técnico particular. Sin embargo, si usted no puede estar presente en la fecha y horario antes indicado, podrá designar a otra persona para la firma de la orden de trabajo, en caso contrario, es decir, si no es posible designar a alguien o el inmueble se encuentra solo en el momento de la revisión, EPM realizará el trabajo y elaborará el acta en presencia de un testigo.
			<br>
			Para verificar la identidad de los funcionarios que visitaran su inmueble o si requiere información adicional, puede comunicarse a la Línea de Atención al Cliente 44 44 115 o 01 8000 41 51 15, o dirigirse a la Oficina de Atención al Cliente más cercana.
			<br>
			Es importante precisar que de acuerdo con lo indicado en la cláusula 45, numeral 3, literal l. del Contrato de Condiciones Uniformes, al impedir la inspección de las instalaciones internas, equipos de medida y la lectura de los medidores, a los funcionarios autorizados por las Empresas y debidamente identificados, se incurre en una causal para la suspensión del servicio.
			<br>
			Empresas Públicas de Medellín le reitera su compromiso en la generación de bienestar y desarrollo con equidad en los entornos donde participa.
		</th>
		</tr>
		
		<tr>
			<th align="left">Atentamente,</th>
		</tr>
		<tr></tr>
		<tr>
			<th align="left">UNIDAD GESTIÓN DE INSTALACIONES.</th>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>





	</thead>
	<?php
		}

	?>
	
				
</table>
</body>
</html>
