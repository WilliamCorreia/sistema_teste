<?php 
	require ("config.php");
	require ("panel/protect.php");
  	include ("inc_head.php");
  	include ("link_topo.php");
?>

<title>Relatórios</title>
</head>


<body>
<div class="col-xs-12">
<div class="row"><div class="container"> 
<h1>Pagina de relatórios</h1>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</div>
</div>
</div>
</body>
<?php 
include ("footer.php");

 $data = date('Y'); // Pega ano atual

 $query = "SELECT classificacao, count(*) as "

?>


<script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Cursos Ministrados',     11],
          ['Espetáculos e Eventos Culturais',      2],
          ['Evento Cultural de Inclusão Social',  2],
          ['Eventos Externos', 2],
          ['Oficinas',    7],
          ['Oficinas em Parceria',    7],
          ['Palestras, Congresso e Seminários',    7]
        ]);

        var options = {
          title: 'Gráfico de Eventos PREAC do ANO: <?php print $data; ?>',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

