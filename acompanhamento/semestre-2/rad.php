<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>RAD</title>

    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

</head>
    <body>
        <div class="box-container">
            <div class="box-nav">
                <div class="select">
                    <span>Tema - 1</span>
                    <div class="check">
                        <label for="tema1" class="label-buttom">
                            <span>Rad(Rapid Applications Development)</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema1" name="tema1">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 2</span>
                    <div class="check">
                        <label for="tema2" class="label-buttom">
                            <span>Manipulação de Dados em Arquivos</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema2" name="tema3">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 3</span>
                    <div class="check">
                        <label for="tema3" class="label-buttom">
                            <span>Python Com Banco de Dados</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema3" name="tema3">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 4</span>
                    <div class="check">
                        <label for="tema4" class="label-buttom">
                            <span>Interface Gráfica Com Python</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema4" name="tema4">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 5</span>
                    <div class="check">
                        <label for="tema5" class="label-buttom">
                            <span>Aplicando Rad</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema5" name="tema5">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
            </div>
            <div class="grafico">
                 <div id="donutchart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </body>
</html>