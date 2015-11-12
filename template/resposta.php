<?php
$titulo = "Contato";
include_once '/template/inc/head.php';
?>
    <div class="jumbotron">
        <?php
        echo '<p>'.$_GET['nome'].
            '<br>Sua mensagem foi enviada com sucesso! </p>';
        ?>
    </div>
<?php
include_once '/template/inc/footer.php';
?>