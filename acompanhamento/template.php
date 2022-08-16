<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Template</title>
</head>
<body class="template">

    <div class="topo">
        <h1>Análise e Desenvolvimento de Sistemas</h1>
        <h2>1° Semestre</h2>
    </div>
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal-template">
        <div class="container_template">
            <div class="disciplinas">
                <ul>
                    <li>
                        <a href="template.php?dir=semestre-3&file=file">
                            FUNDAMENTOS DE REDES DE COMPUTADORES
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            INTRODUÇÃO A SEGURANÇA DA INFORMAÇÃO
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            INTRODUÇÃO A PROGRAMAÇÃO ESTRUTURADA EM C
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ORGANIZAÇÃO E ARQUITETURA DE COMPUTADORES
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            PLANEJAMENTO DE CARREIRA E SUCESSO PROFISSIONAL
                        </a>
                    </li>
                </ul>
            </div>

            <div class="cont">
                <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>


                
            
        </div>
        
    </main>
    <footer class="rodape">
        @Copyright <?= date('Y'); ?>
    </footer>
    
</body>
</html>