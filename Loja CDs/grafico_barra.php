<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Produto');
        data.addColumn('number', 'Quantidade Vendida');

        <?php
        include 'config.php';

        $sql = "SELECT produto, SUM(Totalp) AS quantidade_vendida FROM Compra GROUP BY produto ORDER BY quantidade_vendida DESC LIMIT 10";
        $result = mysqli_query($config, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          $produto = $row['produto'];
          $quantidade = (int)$row['quantidade_vendida'];
          echo "data.addRow(['$produto', $quantidade]);";
        }
        ?>
        
        var options = {
          chart: {
            title: 'Produtos Mais Vendidos',
            subtitle: 'Quantidade Vendida',
          },
          bars: 'horizontal' // Gráfico de barras horizontais
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
