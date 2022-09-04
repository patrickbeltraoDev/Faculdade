<?php

    include_once('../conectar.php');


    if(isset($_POST['tema1'])){
        $tema = $_POST['tema1'];
        $sql = "UPDATE faculdade.acm set tema1 = '$tema' where semestre = 3 and disciplina = 'ENGENHARIA DE SOFTWARE'";
        $qr = mysqli_query($link, $sql);
    }if(isset($_POST['tema2'])){
        $tema = $_POST['tema2'];
        $sql = "UPDATE faculdade.acm set tema2 = '$tema' where semestre = 3 and disciplina = 'ENGENHARIA DE SOFTWARE'";
        $qr = mysqli_query($link, $sql);
    }if(isset($_POST['tema3'])){
        $tema = $_POST['tema3'];
        $sql = "UPDATE faculdade.acm set tema2 = '$tema' where semestre = 3 and disciplina = 'ENGENHARIA DE SOFTWARE'";
        $qr = mysqli_query($link, $sql);
    }if(isset($_POST['tema4'])){
        $tema = $_POST['tema4'];
        $sql = "UPDATE faculdade.acm set tema2 = '$tema' where semestre = 3 and disciplina = 'ENGENHARIA DE SOFTWARE'";
        $qr = mysqli_query($link, $sql);
    }if(isset($_POST['tema5'])){
        $tema = $_POST['tema5'];
        $sql = "UPDATE faculdade.acm set tema2 = '$tema' where semestre = 3 and disciplina = 'ENGENHARIA DE SOFTWARE'";
        $qr = mysqli_query($link, $sql);
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Programação Cliente Servidor</title>

    
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

    <script>
        document.addEventListener("DOMContentLoaded", function(){

            var checkbox = document.querySelectorAll("input[type='checkbox']");

            for(var item of checkbox){
                item.addEventListener("click", function(){
                    localStorage.s_item ? // verifico se existe localStorage
                        localStorage.s_item = localStorage.s_item.indexOf(this.id+",") == -1 // verifico de localStorage contém o id
                        ? localStorage.s_item+this.id+"," // não existe. Adiciono a id no loaclStorage
                        : localStorage.s_item.replace(this.id+",","") : // já existe, apago do localStorage
                    localStorage.s_item = this.id+",";  // não existe. Crio com o id do checkbox
                });
            }

            if(localStorage.s_item){ // verifico se existe localStorage
                for(var item of checkbox){ // existe, percorro as checkbox
                    item.checked = localStorage.s_item.indexOf(item.id+",") != -1 ? true : false; // marco true nas ids que existem no localStorage
                }
            }
        });
        </script>

</head>
    <body>
        <div class="box-container">
            <div class="box-nav">
                <div class="select">
                    <span>Tema - 1</span>
                    <div class="check">
                        <label for="tema1" class="label-buttom">
                            <span>Programação Cliente Com Javascript</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema1" name="tema1" value="concluido" onChange="document.getElementById('formulario').submit();">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 2</span>
                    <div class="check">
                        <label for="tema2" class="label-buttom">
                            <span>Tecnologias de Transmissão de Dados em Sistemas Web</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema2" name="tema2" value="concluido" onChange="document.getElementById('formulario').submit();">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 3</span>
                    <div class="check">
                        <label for="tema3" class="label-buttom">
                            <span>Programação Servidor Com Java</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema3" name="tema3" value="concluido" onChange="document.getElementById('formulario').submit();">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 4</span>
                    <div class="check">
                        <label for="tema4" class="label-buttom">
                            <span>Tecnologias Jpa e Jee</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema4" name="tema4" value="concluido" onChange="document.getElementById('formulario').submit();">
                                <span class="buttom"></span>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <div class="select">
                    <span>Tema - 5</span>
                    <div class="check">
                        <label for="tema5" class="label-buttom">
                            <span>Webservices</span>
                            <div class="box-buttom">
                                <input type="checkbox" id="tema5" name="tema5" value="concluido" onChange="document.getElementById('formulario').submit();">
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