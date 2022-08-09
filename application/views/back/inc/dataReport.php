<?php
foreach($reporteVentas as $rVentas)
{
  $labelVentasDias = $labelVentasDias. "'" . date_format(date_create($rVentas->fecha), "Y-m-d") . "',";
  $labelTotal = $labelTotal. $rVentas->total . ","; 
}

rtrim($labelVentasDias, ",");
rtrim($labelTotal, ",");
?>

<script>
  var labelVentas = [<?php echo $labelVentasDias;?>]
  var datosVentas= [<?php echo $labelTotal;?>]
</script>

<!-- Page specific script -->
<script>
  $(function () {
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : labelVentas,
      datasets: [
        {
          label               : 'En el siguiente grafico se observan las ventas totales por día. ',
          data                : datosVentas
        }
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : true,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

  })
</script>