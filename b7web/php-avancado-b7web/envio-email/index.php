<?php
    if((isset($_POST['nome'])) and (!empty($_POST['nome']))){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $para = "dgelask8@gmail.com";
        $assunto = "Pergunta do contato";
        $corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$mensagem;

        $cabecalho = "From: teste@teste.com.br"."\r\n".
                     "Reply-To:".$email."\r\n".
                     "X-Mailer: PHP/".phpversion();

        mail($para,$assunto, $corpo, $cabecalho);

        echo "<h2>E-mail enviado com sucesso</h2>";
        exit();
    }
?>
<form method="post">
    Nome:<br>
    <input type="text" name="nome"><br><br>

    E-mail:<br>
    <input type="text" name="email"<br><br><br>

    Mensagem:<br>
    <textarea name="mensagem"></textarea><br><br>

    <input type="submit" value="Enviar">
</form>