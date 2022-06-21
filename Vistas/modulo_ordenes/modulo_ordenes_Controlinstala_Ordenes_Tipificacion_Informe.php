<?php
//Traemos la información que almacena las siguientes variable para agregarcela al titulo del excel
$REGION1=$_POST['REGION'];
$MES1=$_POST['COD_MES'];
//Descarga visualizacion en excel:
header('Content-type: application/vnd.ms-excel');
//Titulo del excel
header("Content-Disposition: attachment; filename=Tipificacion_$REGION1_$MES1.xls"); 
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
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DIA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">MES</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">AÑO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_LEGALIZACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REGION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REGNDESC</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">NUMBER_ID</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">NAME_</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">UNIDAD_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_PROGRAMA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CIUDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FRECUENCIA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">URBANO_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_ACTIVIDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_ENERGIA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_GAS_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_AGUA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_ENERGIA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_GAS_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_EJEC_AGUA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_ENERGIA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_GAS_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_AGUA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_ENERGIA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_GAS_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_CANCELO_AGUA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_ENERGIA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_GAS_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_AGUA_URB_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_ENERGIA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_GAS_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_AGUA_RURAL_TP_B_CONV</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_ENERGIA_URB_TP_C</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_ENERGIA_RURAL_TP_C</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_ENERGIA_URB_TP_C</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_ENERGIA_RURAL_TP_C</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_DRASTICA_GAS_URB_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_DRASTICA_AGUA_URB_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_DRASTICA_GAS_RURAL_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SP_DRASTICA_AGUA_RURAL_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_DRASTICA_GAS_URB_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_DRASTICA_AGUA_URB_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_DRASTICA_GAS_RURAL_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REC_DRASTICA_AGUA_RURAL_TP_D</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_ENERGIA_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_GAS_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_AGUA_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_ENERGIA_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_GAS_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_PREV_AGUA_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_ENERGIA_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_GAS_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_AGUA_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_ENERGIA_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_GAS_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_TEC_AGUA_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_COMERCIALES_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REV_COMERCIALES_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">GEST_OPER_CART_URB</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">GEST_OPER_CART_RURAL</div></td>



   </tr>
<?php
//Se trae el dato enviado a traves del metodo POST de modulo_ordenes_Controlinstala_Ordenes_Tipificacion_Parametrizar
$REGION1=$_POST['REGION'];
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
$sql="SELECT
`DIA`, 
`MES`,
`ANO`,
`FECHALEGALIZATION`,
`REGION`,
`REGNDESC`,
`NUMBER_ID`,
`NAME_`, 
`UNIDAD_OPERATIVA`,
`DESC_PROGRAMA`,
`CIUDAD`,
`FRECUENCIA`,
`URBANO_RURAL`,
`DESC_ACTIVIDAD`,

(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND ACTIVIDAD IN (1630,1631,1578,1777)
then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_EJEC_ENERGIA_URB_TP_B_CONV,

(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND ACTIVIDAD IN (1633) 
then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_EJEC_GAS_URB_TP_B_CONV,

(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND ACTIVIDAD IN (1625,1666)
then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_EJEC_AGUA_URB_TP_B_CONV,


(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND ACTIVIDAD IN (1630,1631,1578,1777)
then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_EJEC_ENERGIA_RURAL_TP_B_CONV,

(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND  ACTIVIDAD IN (633) 
then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_EJEC_GAS_RURAL_TP_B_CONV,

(Case when CODIGORESPUESTA = 803 AND CODIGORESPUESTA <> 896 AND ACTIVIDAD IN (1625,1666)
then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_EJEC_AGUA_RURAL_TP_B_CONV,






(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803 AND ACTIVIDAD IN (1630,1631)
then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_CANCELO_ENERGIA_URB_TP_B_CONV,

(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803  AND ACTIVIDAD IN (1633)
then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_CANCELO_GAS_URB_TP_B_CONV,

(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803  AND ACTIVIDAD IN (1625,1666)
 then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_CANCELO_AGUA_URB_TP_B_CONV,


(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803  AND ACTIVIDAD IN (1630,1631)
 then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_CANCELO_ENERGIA_RURAL_TP_B_CONV,

(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803  AND ACTIVIDAD IN (1633)
 then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_CANCELO_GAS_RURAL_TP_B_CONV,

(Case when CODIGORESPUESTA = 896 AND CODIGORESPUESTA <> 803  AND ACTIVIDAD IN (1625,1666)
 then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_CANCELO_AGUA_RURAL_TP_B_CONV,








(Case when ACTIVIDAD IN (1546,1550,1541,1545,1548) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_ENERGIA_URB_TP_B_CONV,

(Case when ACTIVIDAD IN (1551,1542) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_GAS_URB_TP_B_CONV,

(Case when ACTIVIDAD IN (1644,1539,1540) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_AGUA_URB_TP_B_CONV,


(Case when ACTIVIDAD IN (1546,1550,1541,1545,1548) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_ENERGIA_RURAL_TP_B_CONV,

(Case when ACTIVIDAD IN (1551,1542) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_GAS_RURAL_TP_B_CONV,

(Case when ACTIVIDAD IN (1644,1539,1540) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_AGUA_RURAL_TP_B_CONV,




(Case when ACTIVIDAD IN (1719,1629,1617,1582,1586,1581,1584,1618,1626,1736) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_ENERGIA_URB_TP_C,

(Case when ACTIVIDAD IN (1719,1629,1617,1582,1586,1581,1584,1618,1626,1736) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_ENERGIA_RURAL_TP_C,





(Case when ACTIVIDAD IN (1720,1547,1662,1668,1562,1564,1567,1663,1538,1566) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_ENERGIA_URB_TP_C,

(Case when ACTIVIDAD IN (1720,1547,1662,1668,1562,1564,1567,1663,1538,1566)then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_ENERGIA_RURAL_TP_C,




(Case when ACTIVIDAD IN (1587,1727,1670,1643,1620,1672,1676) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_DRASTICA_GAS_URB_TP_D,

(Case when ACTIVIDAD IN (1577,1579,1615,1723) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS SP_DRASTICA_AGUA_URB_TP_D,

(Case when ACTIVIDAD IN (1587,1727,1670,1643,1620,1672,1676) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_DRASTICA_GAS_RURAL_TP_D,

(Case when ACTIVIDAD IN (1577,1579,1615,1723) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS SP_DRASTICA_AGUA_RURAL_TP_D,




(Case when ACTIVIDAD IN (1728,1658,1665,1671,1568,1656,1655) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_DRASTICA_GAS_URB_TP_D,

(Case when ACTIVIDAD IN (1724,1561,1660,1735,1558,1559) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REC_DRASTICA_AGUA_URB_TP_D,

(Case when ACTIVIDAD IN (1728,1658,1665,1671,1568,1656,1655) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_DRASTICA_GAS_RURAL_TP_D,

(Case when ACTIVIDAD IN (1724,1561,1660,1735,1558,1559) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REC_DRASTICA_AGUA_RURAL_TP_D,







(Case when ACTIVIDAD IN (7400024)  AND SERVICIO LIKE '%ENERGÍA%' then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_PREV_ENERGIA_URB,

(Case when ACTIVIDAD IN (7400024) AND SERVICIO LIKE '%GAS%' then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_PREV_GAS_URB,

(Case when ACTIVIDAD IN (7400024) AND SERVICIO LIKE '%AGUA%' then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_PREV_AGUA_URB,


(Case when ACTIVIDAD IN (7400024) AND SERVICIO LIKE '%ENERGÍA%' then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_PREV_ENERGIA_RURAL,
(Case when ACTIVIDAD IN (7400024) AND SERVICIO LIKE '%GAS%' then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_PREV_GAS_RURAL,

(Case when ACTIVIDAD IN (7400024) AND SERVICIO LIKE '%AGUA%' then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_PREV_AGUA_RURAL,






(Case when ACTIVIDAD IN (1594,1713,1677,1591,1613,1711,1757,1596) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_TEC_ENERGIA_URB,

(Case when ACTIVIDAD IN (1595,1614)  then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_TEC_GAS_URB,

(Case when ACTIVIDAD IN (1592,1712,1608,1593,1611,1612) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_TEC_AGUA_URB,

(Case when ACTIVIDAD IN (1594,1713,1677,1591,1613,1711,1757,1596) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_TEC_ENERGIA_RURAL,

(Case when ACTIVIDAD IN (1595,1614) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_TEC_GAS_RURAL,

(Case when ACTIVIDAD IN (1592,1712,1608,1593,1611,1612) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_TEC_AGUA_RURAL,







(Case when ACTIVIDAD IN (1635,1639,1640,1752,1518,1638,1733) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS REV_COMERCIALES_URB,

(Case when ACTIVIDAD IN (1635,1639,1640,1752,1518,1638,1733) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS REV_COMERCIALES_RURAL,






(Case when ACTIVIDAD IN (1766,103198,103199,103200) then
Case when  URBANO_RURAL  = 'U' then
1
end
else
'NULL'
end) AS GEST_OPER_CART_URB,

(Case when ACTIVIDAD IN (1766,103198,103199,103200) then
Case when  URBANO_RURAL  = 'R' then
1
end
else
'NULL'
end) AS GEST_OPER_CART_RURAL

FROM modulo_orden WHERE ESTADO = 8 and REGION = $REGION1 AND MONTH(FECHALEGALIZATION)=$MES1"
; 
//A continuación se llaman las variables para que llenen el excel con los datos
$resultado=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
{
print "<tr>
   <td>$row[DIA]</td>
   <td>$row[MES]</td>
   <td>$row[ANO]</td>
   <td>$row[FECHALEGALIZATION]</td>
   <td>$row[REGION]</td>
   <td>$row[REGNDESC]</td>
   <td>$row[NUMBER_ID]</td>
   <td>$row[NAME_]</td>
   <td>$row[UNIDAD_OPERATIVA]</td>
   <td>$row[DESC_PROGRAMA]</td>
   <td>$row[CIUDAD]</td>
   <td>$row[FRECUENCIA]</td>
   <td>$row[URBANO_RURAL]</td>
   <td>$row[DESC_ACTIVIDAD]</td>
   <td>$row[SP_EJEC_ENERGIA_URB_TP_B_CONV]</td>
   <td>$row[SP_EJEC_GAS_URB_TP_B_CONV]</td>
   <td>$row[SP_EJEC_AGUA_URB_TP_B_CONV]</td>
   <td>$row[SP_EJEC_ENERGIA_RURAL_TP_B_CONV]</td>
   <td>$row[SP_EJEC_GAS_RURAL_TP_B_CONV]</td>
   <td>$row[SP_EJEC_AGUA_RURAL_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_ENERGIA_URB_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_GAS_URB_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_AGUA_URB_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_ENERGIA_RURAL_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_GAS_RURAL_TP_B_CONV]</td>
   <td>$row[SP_CANCELO_AGUA_RURAL_TP_B_CONV]</td>
   <td>$row[REC_ENERGIA_URB_TP_B_CONV]</td>
   <td>$row[REC_GAS_URB_TP_B_CONV]</td>
   <td>$row[REC_AGUA_URB_TP_B_CONV]</td>
   <td>$row[REC_ENERGIA_RURAL_TP_B_CONV]</td>
   <td>$row[REC_GAS_RURAL_TP_B_CONV]</td>
   <td>$row[REC_AGUA_RURAL_TP_B_CONV]</td>
   <td>$row[SP_ENERGIA_URB_TP_C]</td>
   <td>$row[SP_ENERGIA_RURAL_TP_C]</td>
   <td>$row[REC_ENERGIA_URB_TP_C]</td>
   <td>$row[REC_ENERGIA_RURAL_TP_C]</td>
   <td>$row[SP_DRASTICA_GAS_URB_TP_D]</td>
   <td>$row[SP_DRASTICA_AGUA_URB_TP_D]</td>
   <td>$row[SP_DRASTICA_GAS_RURAL_TP_D]</td>
   <td>$row[SP_DRASTICA_AGUA_RURAL_TP_D]</td>
   <td>$row[REC_DRASTICA_GAS_URB_TP_D]</td>
   <td>$row[REC_DRASTICA_AGUA_URB_TP_D]</td>
   <td>$row[REC_DRASTICA_GAS_RURAL_TP_D]</td>
   <td>$row[REC_DRASTICA_AGUA_RURAL_TP_D]</td>
   <td>$row[REV_PREV_ENERGIA_URB]</td>
   <td>$row[REV_PREV_GAS_URB]</td>
   <td>$row[REV_PREV_AGUA_URB]</td>
   <td>$row[REV_PREV_ENERGIA_RURAL]</td>
   <td>$row[REV_PREV_GAS_RURAL]</td>
   <td>$row[REV_PREV_AGUA_RURAL]</td>
   <td>$row[REV_TEC_ENERGIA_URB]</td>
   <td>$row[REV_TEC_GAS_URB]</td>
   <td>$row[REV_TEC_AGUA_URB]</td>
   <td>$row[REV_TEC_ENERGIA_RURAL]</td>
   <td>$row[REV_TEC_GAS_RURAL]</td>
   <td>$row[REV_TEC_AGUA_RURAL]</td>
   <td>$row[REV_COMERCIALES_URB]</td>
   <td>$row[REV_COMERCIALES_RURAL]</td>
   <td>$row[GEST_OPER_CART_URB]</td>
   <td>$row[GEST_OPER_CART_RURAL]</td>
 </tr>"; 
}
?>
</table>

</body>
</html>