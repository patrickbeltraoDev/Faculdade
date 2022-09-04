<?php

    // USADO PARA FAZER CONEXÃO COM O SQLITE 

    // $pdo = new PDO('sqlite:database.db');

    // $statement = $pdo->query("SELECT * FROM user");

    // $rows = $statement ->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($rows);



    $servidor = "localhost:3306";
    $banco = "faculdade";
    $usuario = "root";
    $senha = "Paradoxo@555";
    
    $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro de conexão");

    // $link = mysql_connect($servidor, $usuario, $senha);
    // $db = mysql_select_db($banco, $link);

    if($link->connect_errno){
        echo "erro ao conectar ao banco de dados!";
        exit();
    }




?>