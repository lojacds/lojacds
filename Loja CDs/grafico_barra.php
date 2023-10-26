<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Este é um exemplo de dados estáticos. Você deve buscar os dados do seu banco de dados.
            var data = google.visualization.arrayToDataTable([
                ['CD', 'Vendas'],
                ['CD2', 100], // Substitua pelos seus dados reais
                ['CD3', 75],
                ['CD4', 120],
                ['CD5', 90]
            ]);

            var options = {
                chart: {
                    title: 'CDs Mais Vendidos',
                    subtitle: 'Vendas por CD',
                },
                bars: 'horizontal'
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>
<body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
</body>
</html>
