<?php
//Descarga visualizacion en excel:
header('Content-type: application/vnd.ms-excel');
//Titulo del excel
header("Content-Disposition: attachment; filename=Ordenes_Pendientes.xls");
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
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CODIGO_PROGRAMA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_PROGRAMA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_ASIGNACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">EQUIPO_TRABAJO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">UNIDAD_OPERATIVA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">NAME_</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">NUMBER_ID</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">TAREA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESCTAREA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ORDEN</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CICLO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SERVICIO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ESTADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_ESTADO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_CREACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">OOPEN</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FECHA_LEGALIZACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">HORALEGALIZACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">INSTALACION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ORTRINUR</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESCRIPCIONA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CIUDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CMRUDESC</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REGION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">REGNDESC</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DEPACODI</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CODIGORESPUESTA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">RESPUESTATENCION</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">X</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">Y</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">AÑO</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">MES</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DIA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_CNA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ORDEN_OPEN</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ACTIVIDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">TIPO_ACTIVIDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">DESC_ACTIVIDAD</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">URBANO_RURAL</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">FRECUENCIA</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">CUENTAS_VENCIDAS</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">SALDO_CUENTAS_VENCIDAS</div></td>
   <td bgcolor="#0047bb"><div align="center" class="Estilo1">ESTADO_CORTE</div></td>
  </tr>
  
<?php
//Conexión a la Base de Datos
                $conexion=mysqli_connect("192.168.4.240","lectura","lectura2021**","ingeomega");
                                if (!$conexion) {
                                                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                                    exit;
                                                }
//Consulta SQL para la extracción de la información requerida
$sql="SELECT `CODIGO_PROGRAMA`
, `DESC_PROGRAMA`
, `CODIGO_EQUIPO`
, `EQUIPO_TRABAJO`
, `UNIDAD_OPERATIVA`
, `NAME_`
, `NUMBER_ID`
, `TAREA`
, `DESCTAREA`
, `ORDEN`
, `CICLO`
, `SERVICIO`
, `ESTADO`
, `DESC_ESTADO`
, `FECHACREATED`
, `OOPEN`
, `FECHALEGALIZATION`
, `HORALEGALIZATION`
, CONCAT('_',INSTALACION) AS NRO_INSTALACION
, `ORTRINUR`
, `DESCRIPCIONA`
, `CIUDAD`
, `CMRUDESC`
, `REGION`
, `REGNDESC`
, `DEPACODI`
, `CODIGORESPUESTA`
, `RESPUESTATENCION`
, `X`
, `Y`
, `ANO`
, `MES`
, `DIA`
, `DESC_CNA`
, `ORDEN_OPEN`
, `ACTIVIDAD`
, `TIPO_ACTIVIDAD`
, `DESC_ACTIVIDAD`
, `URBANO_RURAL`
, `FRECUENCIA`
, `CUENTAS_VENCIDAS`
, `SALDO_CUENTAS_VENCIDAS`
, `ESTADO_CORTE`   
from modulo_orden_personal
where
  ESTADO in (0,5)
 and ACTIVIDAD IN (147, 
1518, 
1534,
1538, 
1539, 
1540, 
1541, 
1542, 
1544,
1545, 
1546, 
1547,
1548, 
1549,
1550, 
1551, 
1552,
1557,
1558, 
1559, 
1560,
1562, 
1564, 
1566, 
1567, 
1568, 
1569,
1571,
1577, 
1578, 
1579, 
1581, 
1582, 
1584, 
1585,
1586, 
1587, 
1591, 
1592, 
1593, 
1594, 
1595, 
1596, 
1598,
1602,
1606,
1608, 
1611, 
1612, 
1613, 
1614, 
1615, 
1617, 
1618, 
1620, 
1625, 
1626, 
1629,
1630, 
1631, 
1632,
1633, 
1635, 
1638, 
1639, 
1640, 
1643, 
1644, 
1649,
1650,
1655, 
1656, 
1658, 
1660, 
1662, 
1663, 
1664,
1665, 
1666, 
1668, 
1670, 
1671, 
1672, 
1676, 
1677, 
1691,
1693,
1695,
1699,
1701,
1704,
1711, 
1712, 
1713, 
1717, 
1719, 
1720, 
1723, 
1724, 
1727, 
1728, 
1731,
1732,
1733, 
1735, 
1736, 
1752, 
1755,
1757, 
1758,
1763,
1766, 
1777,
1778,
103198, 
103199, 
103200, 
7400024)" ;

//A continuación se llaman las variables para que llenen el excel con los datos
$resultado=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
{
print "<tr>
   <td>$row[CODIGO_PROGRAMA]</td>
   <td>$row[DESC_PROGRAMA]</td>
   <td>$row[CODIGO_EQUIPO]</td>
   <td>$row[EQUIPO_TRABAJO]</td>
   <td>$row[UNIDAD_OPERATIVA]</td>
   <td>$row[NAME_]</td>
   <td>$row[NUMBER_ID]</td>
   <td>$row[TAREA]</td>
   <td>$row[DESCTAREA]</td>
   <td>$row[ORDEN]</td>
   <td>$row[CICLO]</td>
   <td>$row[SERVICIO]</td>
   <td>$row[ESTADO]</td>
   <td>$row[DESC_ESTADO]</td>
   <td>$row[FECHACREATED]</td>
   <td>$row[OOPEN]</td>
   <td>$row[FECHALEGALIZATION]</td>
   <td>$row[HORALEGALIZATION]</td>
   <td>$row[NRO_INSTALACION]</td>
   <td>$row[ORTRINUR]</td>
   <td>$row[DESCRIPCIONA]</td>
   <td>$row[CIUDAD]</td>
   <td>$row[CMRUDESC]</td>
   <td>$row[REGION]</td>
   <td>$row[REGNDESC]</td>
   <td>$row[DEPACODI]</td>
   <td>$row[CODIGORESPUESTA]</td>
   <td>$row[RESPUESTATENCION]</td>
   <td>$row[X]</td>
   <td>$row[Y]</td>
   <td>$row[ANO]</td>
   <td>$row[MES]</td>
   <td>$row[DIA]</td>
   <td>$row[DESC_CNA]</td>
   <td>$row[ORDEN_OPEN]</td>
   <td>$row[ACTIVIDAD]</td>
   <td>$row[TIPO_ACTIVIDAD]</td>
   <td>$row[DESC_ACTIVIDAD]</td>
   <td>$row[URBANO_RURAL]</td>   
   <td>$row[FRECUENCIA]</td>
   <td>$row[CUENTAS_VENCIDAS]</td>
   <td>$row[SALDO_CUENTAS_VENCIDAS]</td>
   <td>$row[ESTADO_CORTE]</td>
 </tr>"; 
}
?>
</table>

</body>
</html>