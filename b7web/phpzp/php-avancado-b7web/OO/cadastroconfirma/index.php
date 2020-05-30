<?php
if(isset($_POST['nome']) and !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    require "config.php";

    $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
    $id = $pdo->lastInsertId();

    $hash = md5($id);
    $link = "http://www.b7web.com.br/cadastroconfirma/confirmar.php?h=".$hash;

    $assunto = "Confirme seu cadastro";
    $msg = "Clique no link Abaixo para confirmar seu cadastro:\n\n".$link;
    $headers = "From: suporte@b7web.com.br"."\r\n".
                "X-Mailer: PHP/".phpversion();

    mail($email, $assunto, $msg, $headers);

    echo "<h2>Ok! Confirme seu cadasto agora!</h2>";
    exit();
}
?>
<form method="POST">
    Nome: <br>
    <input type="text" name="nome"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    <input type="submit" value="Cadastrar">
</form>