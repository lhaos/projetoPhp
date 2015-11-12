<?php
    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    $assunto = $_POST['txtassunto'];
    $mensagem = $_POST['txtmensagem'];

    header("location:resposta.php?nome=$nome&email=$email&assunto=$assunto&mensagem=$mensagem");