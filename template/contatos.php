<?php
$titulo = "Contato";
include_once '/template/inc/head.php';
?>
    <div class="jumbotron">
        <h1>Contato</h1>
        <form name="cad" id="cad" method="post" action="/index.php?file=resposta">
            <input type="text" name="txtnome" id="txtnome" placeholder="Nome" class="q" required autofocus />
            <input type="email" name="txtemail" id="txtemail"  placeholder="Email" class="q" required />
            <input type="text" name="txtassunto" id="txtassunto"  placeholder="Assunto" class="q" required />
            <textarea rows="3" cols="30" name="txtmensagem" id="txtmensagem" class="q" required>
            </textarea>
            <input type="submit" name="btnenviar" id="btnenviar" value="Enviar" class="q"/>
        </form>
    </div>
<?php
include_once '/template/inc/footer.php';
?>