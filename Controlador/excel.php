<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuario.xls');

	include_once '../Controlador/database.php';
	
 $consultar = "SELECT * FROM usuario";
 $query = mysqli_query($conex,$consultar);


?>
<?php
		while ($row=mysqli_fetch_assoc($query)) {
			?>
<table class="table table-striped" border="2">
	<thead>
		<tr>
			<th><img src="logo.png" width="20" />EPM</th>
			<th style = " background-color: gray;">CONTROL </th>
			<th style = " background-color: gray;">DE </th>
			<th style = " background-color: gray;">ENTREGA </th>
			<th style = " background-color: gray;">DE </th>
			<th style = " background-color: gray;">FACTURAS </th>
			<th style = " background-color: gray;">  </th>
			<th style = " background-color: gray;">  </th>
			<th style = " background-color: gray;">FACT-FR-22</th>
			<th style = " background-color: gray;">  </th>
		</tr>
		<tr >
			<th style = " background-color: gray;" scope="col">CICLO:</th>
			<th scope="row"><?php echo $row['idusuario']; ?></th>
			<th style = " background-color: gray;" scope="col">CORRERIA:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th style = " background-color: gray;" scope="col">MUNICIPIO:</th>
			<th><?php echo $row['contrasena']; ?></th>
			<th style = " background-color: gray;" scope="col">CONSECUTIVO:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr></tr>
		<tr >
			<th style = " background-color: gray;" scope="col">CONTRATO:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th style = " background-color: gray;" scope="col">QUEJA EN SCO:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th style = " background-color: gray;" scope="col">QUEJA SIN SCO:</th>
			<th><?php echo $row['contrasena']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr></tr>
		<tr>
			<th style = " background-color: gray;" scope="col">CODIGO DE REPARTIDOR:</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th scope="col"></th>
			<th style = " background-color: gray;" scope="col"> 1 </th>
			<th style = " background-color: gray;" scope="col"> 2 </th>
			<th style = " background-color: gray;" scope="col"> 3 </th>
			<th style = " background-color: gray;" scope="col"> 4 </th>
			<th style = " background-color: gray;" scope="col"> 5 </th>
			<th style = " background-color: gray;" scope="col"> 6 </th>
			<th style = " background-color: gray;" scope="col"> 7 </th>
			<th style = " background-color: gray;" scope="col"> 8 </th>
			<th style = " background-color: gray;" scope="col"> 9 </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">MESES DE CONTROL:</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr></tr>
		<tr>
			<th style = " background-color: gray;" scope="col">DIRECCION DE ENTREGA:</th>
			<th style = " background-color: gray;"><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">COD-INSTALACION:</th>
			<th style = " background-color: gray;"><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">TELEFONO:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">FECHA DE ELABORACION:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col"> REALIZAR </th>
			<th style = " background-color: gray;" scope="col">O </th>
			<th style = " background-color: gray;" scope="col">INFORMAR </th>
			<th style = " background-color: gray;" scope="col">LO </th>
			<th style = " background-color: gray;" scope="col">SOLICITADO,</th>
			<th style = " background-color: gray;" scope="col">ADEMAS </th>
			<th style = " background-color: gray;" scope="col">DEVOLVER </th>
			<th style = " background-color: gray;" scope="col">AL </th>
			<th style = " background-color: gray;" scope="col">SUPERIOR </th>
			<th style = " background-color: gray;" scope="col">  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">CLIENTE:</th>
			<th><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">DOCUMENTO</th>
			<th><?php echo $row['usuario']; ?></th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th style = " background-color: gray;" scope="col">FIRMA</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;">OTRAS</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
			<th style = " background-color: gray;">OBSERVACIONES:</th>
		</tr>
		<tr></tr>
		<tr>
			<th style = " background-color: gray;">SOLICITADO POR:</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
		</tr>
		<tr>
		</tr>
		<tr></tr>
	</thead>
	<?php
		}

	?>
	
				
</table>