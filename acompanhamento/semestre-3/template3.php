<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>3° Semestre</title>
</head>
<body class="template">

    <div class="topo">
        <h1>Análise e Desenvolvimento de Sistemas</h1>
        <h2>1° Semestre</h2>
    </div>
    <nav class="navegacao">
        <a href="../index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal-template">
        <div class="container_template">
            <div class="disciplinas">
                <ul>
                    <li>
                        <a href="template3.php?file=eng_software">
                            ENGENHARIA DE SOFTWARE
                        </a>
                    </li>
                    <li>
                        <a href="template3.php?file=estrutura_c">
                            ESTRUTURA DE DADOS EM C
                        </a>
                    </li>
                    <li>
                        <a href="template3.php?file=prog_cliente">
                            PROGRAMAÇÃO CLIENTE SERVIDOR
                        </a>
                    </li>
                    <li>
                        <a href="template3.php?file=java">
                            PROGRAMAÇÃO ORIENTADA A OBJETOS EM JAVA
                        </a>
                    </li>
                    <li>
                        <a href="template3.php?file=webdesign">
                            WEB DESIGN
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