<?php
require "config.php";
if(!empty($_POST['email'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM usuarios WHERE  email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id = $sql['id'];

        $token = md5(time().rand(0, 99999).rand(0, 99999));

        $sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em) VALUES (:id_usuario, :hash, :expirado_em)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_usuario", $id);
        $sql->bindValue(":hash", $token);
        $sql->bindValue(":expirado_em", date('Y-m-d H:i', strtotime('+2 days')));
        $sql->execute();

        $link = "http://php-avancado/OO/projeto_esquecisenha/redefinir.php?token=".$token;
        $mensagem = "Acesse seu e clique no link para redefinir sua senha:<br>".$link;
        $assunto = "Redefinição de senha";
        $headers = "From: seuemail@seusite.com.br"."\n\r".
                   "X-Mailer: PHP/".phpversion();

        //mail($email, $assunto, $mensagem, $headers);

        echo $mensagem;
        exit();
    }else{
        echo "Email digitado não existe";
    }
}
?>
<form method="post">
    Qual seu email?<br>
    <input type="email" name="email"><br><br>
    <input type="submit" value="Enviar">
</form>
