<?php
    session_start();
    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

        //MODIFICAÇÃO NO BANCO
    if(!empty($data)){

        //Criar contato

        if($data["type"] == "create"){
             
            $nome = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts(name, phone, observations) VALUES(:nome, :phone, :observations)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";

            }catch(PDOException $e) {
                //Erro de comixão
                $error = $e->getMessage();
                echo "ERRO: $error";
            }


        }


        header("Location: " . $BASE_URL . "../index.php");

        //Seleção de dados
    }else{
        
        $id = null;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        

        
        //Query para ver apenas um contato
        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
        }else{
            //Query para todos os contatos
            $query = "SELECT * FROM contacts";

            $contacts = [];

            $stmt = $conn->prepare($query);

            $stmt->execute();

            $contacts = $stmt->fetchAll();
        }
    }

    //Fechar conexão
    $conn = null;


?>