<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";

    try{

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


        //Ativando modos de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        //Erro de comixão
        $error = $e->getMessage();
        echo "ERRO: $error";
    }



?>