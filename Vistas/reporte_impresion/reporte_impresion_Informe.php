<?php
set_time_limit(3600);
$MES1=$_POST['COD_MES'];
//Descarga visualizacion en excel:
header('Content-type: application/vnd.ms-excel');
//Titulo del excel
header("Content-Disposition: attachment; filename=Reporte_Facturación_$MES1.xls");
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
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">Id_ReporteImpresion</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">Contrato</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CantidadHojas</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CantidadPagina</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CantidadDeBoletines</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CantidadCuponeras</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">InsertoPersonalizado</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">InsertoGenerico</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ciclo</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">Correria</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">DireccionEntrega</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">MunicipioEntrega</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">DatosReparticion</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">ValidacionRegla</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">ReglasAplicadas</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">FacturaAvisoLey</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">FacturaAvisoLeyDos</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">FacturaAvisoLeyTres</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">FacturaMensajeBannerEnergia</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">FacturaMensajeConsulta</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasEnergia</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasAcueducto</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasAguasUraba</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasAguasOccidente</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasSaneamiento</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasSaneamientoUraba</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasSaneamientoOccidente</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasGas</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasTarjetaEPM</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">CuentasVencidasOtros</div></td>
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">ConsecutivoImpresion</div></td>   
      <td bgcolor="#0047bb"><div align="center" class="Estilo1">Ano_mes</div></td>

   </tr>
   <?php
//Se trae el dato enviado a traves del metodo POST de modulo_ordenes_Controlinstala_Ordenes_Cerradas_Parametrizar
   $ANO1=$_POST['COD_ANO'];
   $MES1=$_POST['COD_MES'];
   $CICLO1=$_POST['ciclo'];


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
  `Id_ReporteImpresion`,
  `Contrato`,
  `CantidadHojas`,
  `CantidadPagina`,
  `CantidadDeBoletines`,
  `CantidadCuponeras`,
  `InsertoPersonalizado`,
  `InsertoGenerico`,
   SUBSTRING(Ciclo, 1,3) as Ciclo,
  `Correria`,
  `DireccionEntrega`,
  `MunicipioEntrega`,
  `DatosReparticion`,
  `ValidacionRegla`,
  `ReglasAplicadas`,
  `FacturaAvisoLey`,
  `FacturaAvisoLeyDos`,
  `FacturaAvisoLeyTres`,
  `FacturaMensajeBannerEnergia`,
  `FacturaMensajeConsulta`,
  `CuentasVencidasEnergia`,
  `CuentasVencidasAcueducto`,
  `CuentasVencidasAguasUraba`,
  `CuentasVencidasAguasOccidente`,
  `CuentasVencidasSaneamiento`,
  `CuentasVencidasSaneamientoUraba`,
  `CuentasVencidasSaneamientoOccidente`,
  `CuentasVencidasGas`,
  `CuentasVencidasTarjetaEPM`,
  `CuentasVencidasOtros`,
  `ConsecutivoImpresion`,
  SUBSTRING(Ano_mes, 1,6) as Ano_mes
  FROM reporte_impresion 
  WHERE Ciclo= '$CICLO1'
  and Ano_mes=$ANO1$MES1";

//A continuación se llaman las variables para que llenen el excel con los datos
  $resultado=mysqli_query($conexion,$sql);
  while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
  {
   print "<tr>
   <td>$row[Id_ReporteImpresion]</td>
   <td>$row[Contrato]</td>
   <td>$row[CantidadHojas]</td>
   <td>$row[CantidadPagina]</td>
   <td>$row[CantidadDeBoletines]</td>
   <td>$row[CantidadCuponeras]</td>
   <td>$row[InsertoPersonalizado]</td>
   <td>$row[InsertoGenerico]</td>
   <td>$row[Ciclo]</td>
   <td>$row[Correria]</td>
   <td>$row[DireccionEntrega]</td>
   <td>$row[MunicipioEntrega]</td>
   <td>$row[DatosReparticion]</td>
   <td>$row[ValidacionRegla]</td>
   <td>$row[ReglasAplicadas]</td>
   <td>$row[FacturaAvisoLey]</td>
   <td>$row[FacturaAvisoLeyDos]</td>
   <td>$row[FacturaAvisoLeyTres]</td>
   <td>$row[FacturaMensajeBannerEnergia]</td>
   <td>$row[FacturaMensajeConsulta]</td>
   <td>$row[CuentasVencidasEnergia]</td>
   <td>$row[CuentasVencidasAcueducto]</td>
   <td>$row[CuentasVencidasAguasUraba]</td>
   <td>$row[CuentasVencidasAguasOccidente]</td>
   <td>$row[CuentasVencidasSaneamiento]</td>
   <td>$row[CuentasVencidasSaneamientoUraba]</td>
   <td>$row[CuentasVencidasSaneamientoOccidente]</td>
   <td>$row[CuentasVencidasGas]</td>
   <td>$row[CuentasVencidasTarjetaEPM]</td>
   <td>$row[CuentasVencidasOtros]</td>
   <td>$row[ConsecutivoImpresion]</td>   
   <td>$row[Ano_mes]</td>
   </tr>"; 
}
?>
</table>

</body>
</html>