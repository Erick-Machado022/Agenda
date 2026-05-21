<?php
    include_once("templates/header.php");
    include_once("config/process.php");
    include_once("config/url.php");

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = "";

    }
?>

    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Minha agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($contacts as $contato):?>
                        <tr>
                            <td scope="row" class="col-id"><?=  $contato["id"]  ?></td>
                            <td scope="row"><?=  $contato["name"]  ?></td>
                            <td scope="row"><?=  $contato["phone"]  ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL?>show.php?id=<?=$contato["id"]?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="#"><i class="far fa-edit edit-icon"></i></a>
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </td> 
                        </tr>
                    <?php endforeach ?>    
                </tbody>
            </table>
        <?php else: ?>
         <p id="empty-list-text">Ainda não há contatos salvos na sua agenda, <a href="<?= $BASE_URL?>create.php">clique aqui para adicionar</a></p>
        <?php endif ?>
    </div>

<?php
    include_once("templates/footer.php");
?>
