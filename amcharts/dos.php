<!DOCTYPE html>
<html>
<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grafica</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/serial.js" type="text/javascript"></script>
<?php 
    //Inclusion de database en donde esta la conexion con la BD.
  include_once '../Controlador/database.php';
  //Trae toda la información de la tabla solicitada para utilizarla.
  $consultar = "SELECT * FROM usuario where rol=1";
  //Función en donde se relaciona la conexión de la BD con la consulta de anteriormente.
 $query = mysqli_query($conex,$consultar);

 ?>
        <script>
            var chart;
            var chartData = [
            //Ciclo realizado atra vez del método while que recorre toda la información de la BD.
            <?php  while ($row = mysqli_fetch_array($query))
                { ?>
                   {
                    "country": "<?php echo $row['usuario'] ?>",
                    "visits":  "<?php echo $row['contrasena'] ?>",

            //Fragmento para cambiar el color de las columnas aleatoriamente 
        <?php
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    //php echo $color
    ?>
                    "color": "<?php echo $color ?>"
                    },    
                  
               <?php
                }
                 ?>

            ];
            //Configuración de todo el STYLE de toda la grafica.
            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                chart.startDuration = 1;
                chart.depth3D = 50;
                chart.angle = 30;
                chart.marginRight = -45;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0;
                categoryAxis.axisAlpha = 0;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.gridAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.colorField = "color";
                graph.balloonText = "<b>[[category]]: [[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0.5;
                graph.lineColor = "#FFFFFF";
                graph.topRadius = 1;
                graph.fillAlphas = 0.9;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chartCursor.valueLineEnabled = true;
                chartCursor.valueLineBalloonEnabled = true;
                chartCursor.valueLineAlpha = 1;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("chartdiv");
            });
        </script>
</head>
<body>
        <div id="chartdiv" style="width: 50%; height: 200px;"></div>

</body>
</html>