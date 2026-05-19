<?php
    session_start();
    include_once("config/connection.php");
    include_once("config/url.php");

    $query = "SELECT * FROM contacts";

    $contacts = [];

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();






?>