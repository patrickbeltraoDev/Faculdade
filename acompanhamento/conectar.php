<?php

    // USADO PARA FAZER CONEXÃO COM O SQLITE 

    // $pdo = new PDO('sqlite:database.db');

    // $statement = $pdo->query("SELECT * FROM user");

    // $rows = $statement ->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($rows);



    $servidor = "localhost";
    $banco = "databaseglobal";
    $usuario = "root";
    $senha = "";
    
    $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro de conexão");

    // $link = mysql_connect($servidor, $usuario, $senha);
    // $db = mysql_select_db($banco, $link);

    if($link->connect_errno){
        echo "erro ao conectar ao banco de dados!";
        exit();
    }




?>