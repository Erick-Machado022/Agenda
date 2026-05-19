<?php
    include_once("templates/header.php");
    include_once("config/process.php");

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = "";

    }
?>

    <h1>Testando Agenda</h1>
    <i class="fas fa-eye"></i>


<?php
    include_once("templates/footer.php");
?>
