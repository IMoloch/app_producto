<x-app-layout>
{{-- importacion de CDN --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accesibility.js"></script>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div id="chart"></div>
    </div>
</div>


<script type="text/javascript">
  var data = <?php echo json_encode($count); ?>;
  var category = <?php echo json_encode($categories); ?>;

  Highcharts.chart('chart', {
    chart: {
        type: 'bar',
        height: 60+'%'
    },
    title: {
        text: 'Conteo de Productos distintos por Categoría',
        align: 'left'
    },
    subtitle: {
        align: 'left'
    },
    xAxis: {
        categories: category,
        title: {
            text: null
        },
        gridLineWidth: 1    ,
        lineWidth: 1
    },
    yAxis: {
        allowDecimals:false,
        title: {
            text: 'Quantity (units)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        },
        gridLineWidth: 0
    },
    plotOptions: {
        bar: {
            borderRadius: '50%',
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    legend: {
        enabled: false,
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Cantidad de productos distintos',
        data: data
    }]
});
</script>
</x-app-layout>
