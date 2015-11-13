<?php
$titulo = "Contato";
include_once '/template/inc/head.php';
?>
    <div class="jumbotron">
        <h1>Contato</h1>
        <?php
            $nome = $_POST['txtnome'];
            $email = $_POST['txtemail'];
            $assunto = $_POST['txtassunto'];
            $mensagem = $_POST['txtmensagem'];

            echo '<p>Dados enviados com sucesso, abaixo seguem os dados que você enviou'.
            '<br>Seu nome: '.$nome.'<br>Seu email: '.$email.
            '<br>Assunto: '.$assunto.'<br>Mensagem: '.$mensagem.'</p>';
        ?>
    </div>
<?php
include_once '/template/inc/footer.php';
?>