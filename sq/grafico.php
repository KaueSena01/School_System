<?php include 'header.php'?>
<html>
  <head>
    <script type= "text/javascript" src = "https://www.gstatic.com/charts/loader.js" > </script>       
    <script type= "text/javascript" > 
       google.charts.load('current', {'packages': ['bar']});
       google.charts.setOnLoadCallback(drawChart);

       function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cursos', 'Total de alunos por curso'],

          <?php
          include 'conexao.php';
            $sql = mysqli_query($conn, "SELECT  curso, count(curso) as qtd FROM questoes WHERE curso LIKE  'Enfermagem' GROUP BY curso UNION SELECT  curso, count(curso) as qtd FROM questoes WHERE curso LIKE  'Informática' GROUP BY curso UNION SELECT  curso, count(curso) as qtd FROM questoes WHERE curso LIKE  'Comércio' GROUP BY curso UNION SELECT  curso, count(curso) as qtd FROM questoes WHERE curso LIKE  'Administração' GROUP BY curso ORDER BY qtd ASC");
            while ($dados = mysqli_fetch_array($sql)) {
              $curso = $dados['curso'];
              $total = $dados['qtd'];
          ?>
          ['<?php echo $curso?>', '<?php echo $total?>'],

           <?php } ?>

          ]); 
        var options = {
          chart: {
            title: 'Gráfico sistema 2020',
            subtitle: 'Quantidade de alunos por curso 2020',
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw (data, google.charts.Bar.convertOptions (options));
       }
       </script>
     </head>
     <body>
      <br>
       <div id = "columnchart_material" style = " width : 800px ; height : 500px ; " ></div>
       <br>
       <br>
       <a id = "g" href="relatorio.php" target="_blank" class="btn btn-success col-md-3">
      Gerar relatório</a>
      <footer>
        <style type="text/css">
          #g {
            transform: translateX(60px);
          }
        </style>
      </footer>
     </body>
     </html>