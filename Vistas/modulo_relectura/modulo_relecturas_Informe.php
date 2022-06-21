<?php
$MES1=$_POST['COD_MES'];
//Descarga visualizacion en excel:
header('Content-type: application/vnd.ms-excel');
//Titulo del excel
header("Content-Disposition: attachment; filename=Relecturas_Mes_$MES1.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html> 
<html>
<head>
  <title></title>
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="1">
  <tr>
   <!--Encabezado que se mostrara en el excel(Titulos de las columnas) -->
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FechaAsignacion</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Equipo_Trabajo</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Unidad_Operativa</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Tarea</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DescTarea</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Orden</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ciclo</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">servicio</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Estado</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Desc_estado</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FechaCreated</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Fechalegalization</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Horalegalization</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Instalacion</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Urbano_rural</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ortrinur</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Descripciona</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ciudad</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Cmrudesc</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Region</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Regndesc</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Depacodi</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Codigorespuesta</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Respuestatencion</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">x</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">y</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ano</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Mes</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Dia</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Alfanumerica</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Actividad</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Desc_actividad</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Frecuencia</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Cuentas_Vencidas</div></td>   
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Saldo_Cuentas_Vencidas</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Estado_Corte</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Tipo_Actividad</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Route_Id</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Name_</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Number_Id</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Codigo_Causanl_obs</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Causanl_obs</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Codigo_Causanl_obs2</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Causanl_obs2</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Codigo_Causanl_obs3</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Causanl_obs3</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Servicio_Suscrito</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Cod_Tipo_Servicio</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Tipo_Servicio</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Categoria</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Estrato</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Desc_Servicio</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Orden_relacionada</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Order_activity_Id</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Registro_Fotografico</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Id_Relecturas_Acta</div></td>   
   </tr>
<?php
//Se trae el dato enviado a traves del metodo POST de modulo_ordenes_Controlinstala_Ordenes_Cerradas_Parametrizar
$ANO1=$_POST['COD_ANO'];
$MES1=$_POST['COD_MES'];

               //Conexión a la Base de Datos
                $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
                                if (!$conexion) {
                                                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                                    exit;
                                                }
//Consulta SQL para la extracción de la información requerida
$sql="SELECT  * 
      from modulo_relectura 
      where Fechalegalization>=concat('$ANO1','$MES1','01') and  Fechalegalization<=concat('$ANO1','$MES1','31') " ;

//A continuación se llaman las variables para que llenen el excel con los datos
$resultado=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
{
print "<tr>
   <td>$row[FechaAsignacion]</td>
   <td>$row[Equipo_Trabajo]</td>
   <td>$row[UNIDAD_OPERATIVA]</td>
   <td>$row[Tarea]</td>
   <td>$row[DescTarea]</td>
   <td>$row[Orden]</td>
   <td>$row[Ciclo]</td>
   <td>$row[servicio]</td>
   <td>$row[Estado]</td>
   <td>$row[Desc_estado]</td>
   <td>$row[FechaCREATED]</td>
   <td>$row[Fechalegalization]</td>
   <td>$row[Horalegalization]</td>
   <td>$row[Instalacion]</td>
   <td>$row[urbano_rural]</td>
   <td>$row[ortrinur]</td>
   <td>$row[descripciona]</td>
   <td>$row[Ciudad]</td>
   <td>$row[cmrudesc]</td>
   <td>$row[region]</td>
   <td>$row[regndesc]</td>
   <td>$row[depacodi]</td>
   <td>$row[codigorespuesta]</td>
   <td>$row[respuestatencion]</td>
   <td>$row[x]</td>
   <td>$row[y]</td>
   <td>$row[Ano]</td>
   <td>$row[Mes]</td>
   <td>$row[Dia]</td>
   <td>$row[desc_cna]</td>
   <td>$row[ACTIVIDAD]</td>
   <td>$row[DESC_ACTIVIDAD]</td>
   <td>$row[FRECUENCIA]</td>
   <td>$row[CUENTAS_VENCIDAS]</td>   
   <td>$row[SALDO_CUENTAS_VENCIDAS]</td>
   <td>$row[ESTADO_CORTE]</td>
   <td>$row[TIPO_ACTIVIDAD]</td>
   <td>$row[ROUTE_ID]</td>
   <td>$row[NAME_]</td>
   <td>$row[NUMBER_ID]</td>
   <td>$row[CODIGO_CAUSANL_OBS]</td>
   <td>$row[CAUSANL_OBS]</td>
   <td>$row[CODIGO_CAUSANL_OBS2]</td>
   <td>$row[CAUSANL_OBS2]</td>
   <td>$row[CODIGO_CAUSANL_OBS3]</td>
   <td>$row[CAUSANL_OBS3]</td>
   <td>$row[SERVICIO_SUSCRITO]</td>
   <td>$row[COD_TIPO_SERVICIO]</td>
   <td>$row[TIPO_SERVICIO]</td>
   <td>$row[categoria]</td>
   <td>$row[ESTRATO]</td>
   <td>$row[DESC_SERVICIO]</td>
   <td>$row[orden_relacionada]</td>
   <td>$row[order_activity_ID]</td>
   <td>$row[Adjunto]</td>
   <td>$row[ID_RELECTURAS_ACTA]</td>   
 </tr>"; 
}
?>
</table>

</body>
</html>