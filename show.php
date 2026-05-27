<?php
    include_once("templates/header.php");
    include_once("config/process.php");
    include_once("config/url.php");

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = "";

    }
?>


<div class="container" id="view-contact-container">
    <?php include_once("templates/back-btn.html"); ?>
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Telefone</p>
    <p><?= $contact["phone"] ?></p>
    <p class="bold">Observações</p>
    <p><?= $contact["observations"] ?></p>
</div>
<?php
    include_once("templates/footer.php");
?>
