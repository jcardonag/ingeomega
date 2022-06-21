<?php
set_time_limit(3600);
//Traemos la información que almacena las siguientes variable para agregarcela al titulo del excel
$REGION1=$_POST['REGION'];
//descarga visualizacion en excel:
header('Content-type: application/vnd.ms-excel');
//Titulo del excel
header("Content-Disposition: attachment; filename=Lectura_Mensual_Region_$REGION1.xls");
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
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSECUTIVO_REPORTE</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">PERIODO_CONSUMO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">PERIODO_FACTURACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ANO_FACTURACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">MES_FACTURACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSECUTIVO_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LECTURA_ANTERIOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LECTURA_TOMADA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LECTURA_ORIGINAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_LECTURA_ANTERIOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_LECTURA_ACTUAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CODIGO_CAUSANL_OBS</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CAUSANL_OBS</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CODIGO_OBS_ADIC</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">OBS_ADIC</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">OBSERV_ALFANUM</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ADVERTENCIA_LECT</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SERVICIO_SUSCRITO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SUSCRIPCION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_TIPO_CONSUMO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">TIPO_CONSUMO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LIMITE_INFERIOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LIMITE_SUPERIOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_PLAN_FACT</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">PLAN_FACT</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_TIPO_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">TIPO_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_CICLO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_CATEGORIA_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CATEGORIA_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_SUBCATEGORIA_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SUBCATEGORIA_SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ORDEN_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ACTIVIDAD_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">RUTA_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSECUTIVO_RUTA_LECTURA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">NRO_INSTALACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_DIRECCION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_ZONA_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ZONA_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DIRECCION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_GEOGRAFIA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_MUNICIPIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">MUNICIPIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_LEIDO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_CORREGIDO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_ESTIMADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_FACTURADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_RECUPERADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_AFORADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_OTROS</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSUMO_PROMEDIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_LECTOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">LECTOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ID_MEDIDOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SERIE_MEDIDOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CONSTANTE_MEDIDOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CIFRAS_MEDIDOR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_UBICACION_MED</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">UBICACION_MED</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FRECUENCIA_LECT</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COD_UNIDAD_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">UNIDAD_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">IDENTIFICACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">HILO_REPORTE</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COORDENADA_X</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">COORDENADA_Y</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SECUENCIA_REAL_LECT</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">urbano_rural</div></td>


   </tr>
<?php
//Se trae el dato enviado a traves del metodo POST de secuencias_lectura_Mensual_Regiones_Parametrizar
$REGION1=$_POST['REGION'];
$MES1=$_POST['COD_MES'];
$ANO1=$_POST['COD_ANO'];



                //Conexión a la Base de Datos
                $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
                                if (!$conexion) {
                                                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                                    exit;

                                                }
//Consulta SQL para la extracción de la información requerida
$sql="SELECT `ID_LECTURA`
   , `CONSECUTIVO_REPORTE`
   , `PERIODO_CONSUMO`
   , `PERIODO_FACTURACION`
   , `ANO_FACTURACION`
   , `MES_FACTURACION`
   , `CONSECUTIVO_LECTURA`
   , `LECTURA_ANTERIOR`
   , `LECTURA_TOMADA`
   , `LECTURA_ORIGINAL`
   , `FECHA_LECTURA_ANTERIOR`
   , `FECHA_LECTURA_ACTUAL`
   , `CODIGO_CAUSANL_OBS`
   , `CAUSANL_OBS`
   , `CODIGO_OBS_ADIC`
   , `OBS_ADIC`
   , `OBSERV_ALFANUM`
   , `ADVERTENCIA_LECT`
   , `SERVICIO_SUSCRITO`
   , `SUSCRIPCION`
   , `COD_TIPO_CONSUMO`
   , `TIPO_CONSUMO`
   , `LIMITE_INFERIOR`
   , `LIMITE_SUPERIOR`
   , `COD_PLAN_FACT`
   , `PLAN_FACT`
   , `COD_TIPO_SERVICIO`
   , `TIPO_SERVICIO`
   , `COD_CICLO`
   , `COD_CATEGORIA_SERVICIO`
   , `CATEGORIA_SERVICIO`
   , `COD_SUBCATEGORIA_SERVICIO`
   , `SUBCATEGORIA_SERVICIO`
   , `ORDEN_LECTURA`
   , `ACTIVIDAD_LECTURA`
   , `RUTA_LECTURA`
   , `CONSECUTIVO_RUTA_LECTURA`
   , `NRO_INSTALACION`
   , `ID_DIRECCION`
   , `ID_ZONA_OPERATIVA`
   , `ZONA_OPERATIVA`
   , `DIRECCION`
   , `ID_GEOGRAFIA`
   , `ID_MUNICIPIO`
   , `MUNICIPIO`
   , `CONSUMO_LEIDO`
   , `CONSUMO_CORREGIDO`
   , `CONSUMO_ESTIMADO`
   , `CONSUMO_FACTURADO`
   , `CONSUMO_RECUPERADO`
   , `CONSUMO_AFORADO`
   , `CONSUMO_OTROS`
   , `CONSUMO_PROMEDIO`
   , `COD_LECTOR`
   , `LECTOR`
   , `ID_MEDIDOR`
   , `SERIE_MEDIDOR`
   , `CONSTANTE_MEDIDOR`
   , `CIFRAS_MEDIDOR`
   , `COD_UBICACION_MED`
   , `UBICACION_MED`
   , `FRECUENCIA_LECT`
   , `COD_UNIDAD_OPERATIVA`
   , `UNIDAD_OPERATIVA`
   , `IDENTIFICACION`
   , `HILO_REPORTE`
   , `COORDENADA_X`
   , `COORDENADA_Y`
   , `SECUENCIA_REAL_LECT`
   ,
(Case when substr(NRO_INSTALACION,1,1) = 1 then
Case when substr(NRO_INSTALACION,7,1) = 1 then
'U'
else
(CASE WHEN ID_ZONA_OPERATIVA = 8 THEN 'U'  Else 'R'  End)
end
else
'U'
end) as `urbano_rural`
FROM secuencias_lectura
WHERE
 (substr(FECHA_LECTURA_ACTUAL,(INSTR(FECHA_LECTURA_ACTUAL,'-')+1),2)) = $MES1
AND `ID_ZONA_OPERATIVA` IN ($REGION1)
AND CODIGO_CAUSANL_OBS <> 100
and cod_tipo_consumo in(1,3,7,9)
AND FECHA_LECTURA_ACTUAL LIKE '%$ANO1%'"; 

//A continuación se llaman las variables para que llenen el excel con los datos
 ini_set('max_execution_time', 10000);
$resultado=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
{
print "<tr>
   <td>$row[ID_LECTURA]</td>
   <td>$row[CONSECUTIVO_REPORTE]</td>
   <td>$row[PERIODO_CONSUMO]</td>
   <td>$row[PERIODO_FACTURACION]</td>
   <td>$row[ANO_FACTURACION]</td>
   <td>$row[MES_FACTURACION]</td>
   <td>$row[CONSECUTIVO_LECTURA]</td>
   <td>$row[LECTURA_ANTERIOR]</td>
   <td>$row[LECTURA_TOMADA]</td>
   <td>$row[LECTURA_ORIGINAL]</td>
   <td>$row[FECHA_LECTURA_ANTERIOR]</td>
   <td>$row[FECHA_LECTURA_ACTUAL]</td>
   <td>$row[CODIGO_CAUSANL_OBS]</td>
   <td>$row[CAUSANL_OBS]</td>
   <td>$row[CODIGO_OBS_ADIC]</td>
   <td>$row[OBS_ADIC]</td>
   <td>$row[OBSERV_ALFANUM]</td>
   <td>$row[ADVERTENCIA_LECT]</td>
   <td>$row[SERVICIO_SUSCRITO]</td>
   <td>$row[SUSCRIPCION]</td>
   <td>$row[COD_TIPO_CONSUMO]</td>
   <td>$row[TIPO_CONSUMO]</td>
   <td>$row[LIMITE_INFERIOR]</td>
   <td>$row[LIMITE_SUPERIOR]</td>
   <td>$row[COD_PLAN_FACT]</td>
   <td>$row[PLAN_FACT]</td>
   <td>$row[COD_TIPO_SERVICIO]</td>
   <td>$row[TIPO_SERVICIO]</td>
   <td>$row[COD_CICLO]</td>
   <td>$row[COD_CATEGORIA_SERVICIO]</td>
   <td>$row[CATEGORIA_SERVICIO]</td>
   <td>$row[COD_SUBCATEGORIA_SERVICIO]</td>
   <td>$row[SUBCATEGORIA_SERVICIO]</td>
   <td>$row[ORDEN_LECTURA]</td>
   <td>$row[ACTIVIDAD_LECTURA]</td>
   <td>$row[RUTA_LECTURA]</td>
   <td>$row[CONSECUTIVO_RUTA_LECTURA]</td>
   <td>$row[NRO_INSTALACION]</td>
   <td>$row[ID_DIRECCION]</td>
   <td>$row[ID_ZONA_OPERATIVA]</td>
   <td>$row[ZONA_OPERATIVA]</td>
   <td>$row[DIRECCION]</td>
   <td>$row[ID_GEOGRAFIA]</td>
   <td>$row[ID_MUNICIPIO]</td>
   <td>$row[MUNICIPIO]</td>
   <td>$row[CONSUMO_LEIDO]</td>
   <td>$row[CONSUMO_CORREGIDO]</td>
   <td>$row[CONSUMO_ESTIMADO]</td>
   <td>$row[CONSUMO_FACTURADO]</td>
   <td>$row[CONSUMO_RECUPERADO]</td>
   <td>$row[CONSUMO_AFORADO]</td>
   <td>$row[CONSUMO_OTROS]</td>
   <td>$row[CONSUMO_PROMEDIO]</td>
   <td>$row[COD_LECTOR]</td>
   <td>$row[LECTOR]</td>
   <td>$row[ID_MEDIDOR]</td>
   <td>$row[SERIE_MEDIDOR]</td>
   <td>$row[CONSTANTE_MEDIDOR]</td>
   <td>$row[CIFRAS_MEDIDOR]</td>
   <td>$row[COD_UBICACION_MED]</td>
   <td>$row[UBICACION_MED]</td>
   <td>$row[FRECUENCIA_LECT]</td>
   <td>$row[COD_UNIDAD_OPERATIVA]</td>
   <td>$row[UNIDAD_OPERATIVA]</td>
   <td>$row[IDENTIFICACION]</td>
   <td>$row[HILO_REPORTE]</td>
   <td>$row[COORDENADA_X]</td>
   <td>$row[COORDENADA_Y]</td>
   <td>$row[SECUENCIA_REAL_LECT]</td>
   <td>$row[urbano_rural]</td>
 </tr>"; 
}
?>
</table>

</body>
</html>