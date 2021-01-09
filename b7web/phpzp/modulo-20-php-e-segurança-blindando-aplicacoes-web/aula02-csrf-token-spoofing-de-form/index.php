<?php
session_start();

if(!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = md5(time().rand(0,9));
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csrf_token = $_POST['csrf_token'];

    if($_SESSION['csrf_token'] === $csrf_token){
        if($email === 'teste@gmail.com' && $senha === '123'){
            echo "Usuário Logado";
        }else{
            $_SESSION['login_tentativas']++;
            echo "Senha Errado! Tentativas: " . $_SESSION['login_tentativas'];
        }
    }else{
        echo "Opá o que esta fazendo é Spoofing de Form.(Enviado de outro lugar)";
    }

    echo "<hr>";
}
?>
<form method="post">
    <label>Email</label><br>
    <input type="text" name="email"><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha"><br><br>

    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

    <input type="submit" value="Enviar">
</form>