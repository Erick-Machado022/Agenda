<?php
    session_start();
    include_once("config/connection.php");
    include_once("config/url.php");

    
    $id = null;

    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    

    
    //Quert para ver apenas um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contato = $stmt->fetch();
    }else{
        //Query para todos os contatos
        $query = "SELECT * FROM contacts";

        $contacts = [];

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }


    
    
    
   






?>