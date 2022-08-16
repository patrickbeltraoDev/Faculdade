<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>2° Semestre</title>
</head>
<body class="template">

    <div class="topo">
        <h1>Análise e Desenvolvimento de Sistemas</h1>
        <h2>2° Semestre</h2>
    </div>
    <nav class="navegacao">
        <a href="../index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal-template">
        <div class="container_template">
            <div class="disciplinas">
                <ul>
                    <li>
                        <a href="template2.php?file=rad">
                            RAD - DESENVOLVIMENTO RÁPIDO DE APLICAÇÕES EM PYTHON  
                        </a>
                    </li>
                    <li>
                        <a href="template2.php?file=desenv_web">
                            DESENVOLV. WEB EM HTML5, CSS, JAVASCRIPT E PHP 
                        </a>
                    </li>
                    <li>
                        <a href="template2.php?file=lp_python">
                            PARADIGMAS DE LING. DE PROGRAMAÇÃO EM PYTHON  
                        </a>
                    </li>
                    <li>
                        <a href="template2.php?file=portugues">
                            LÍNGUA PORTUGUESA
                        </a>
                    </li>
                    <li>
                        <a href="template2.php?file=banco_dados">
                            BANCO DE DADOS
                        </a>
                    </li>
                </ul>
            </div>

            <div class="cont">
                <?php
                    include(__DIR__ . "/{$_GET['file']}.php");
                ?>
            </div>


                
            
        </div>
        
    </main>
    <footer class="rodape">
        @Copyright <?= date('Y'); ?>
    </footer>
    
</body>
</html>