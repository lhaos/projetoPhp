<?php
$titulo = "Contato";
include_once '../template/inc/head.php';
?>
    <div class="jumbotron">
        <h1>Contato</h1>
        <?php
        echo '<p>Dados enviados com sucesso, abaixo seguem os dados que você enviou'.
            '<br>Seu nome: '.$_GET['nome'].'<br>Seu email: '.$_GET['email'].
            '<br>Assunto: '.$_GET['assunto'].'<br>Mensagem: '.$_GET['mensagem'].'</p>';
        ?>
    </div>
<?php
include_once '../template/inc/footer.php';
?>