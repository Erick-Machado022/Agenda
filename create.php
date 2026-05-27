<?php
    include_once("templates/header.php");
    include_once("config/url.php");
?>

    <div class="container">
        <?php include_once("templates/back-btn.html") ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do contato" required>
            </div>


            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone do contato" required>
            </div>

            <div class="mb-3">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Observações" rows="3"></textarea>
            </div>



            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


<?php
    include_once("templates/footer.php");
?>
