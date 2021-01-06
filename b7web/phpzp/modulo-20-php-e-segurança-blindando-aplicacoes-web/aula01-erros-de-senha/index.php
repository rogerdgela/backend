<?php
session_start();

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_SESSION['login_tentativas']) && $_SESSION['login_tentativas'] >= 3){
        echo "Seu acesso está bloqueado";
    }else{
        if($email === 'teste@gmail.com' && $senha === '123'){
            echo "Usuário Logado";
        }else{
            if(!isset($_SESSION['login_tentativas'])){
                $_SESSION['login_tentativas'] = 0;
            }

            $_SESSION['login_tentativas']++;
            echo "Senha Errado! Tentativas: " . $_SESSION['login_tentativas'];
        }
    }

    echo "<hr>";
}
?>
<form method="post">
    <label>Email</label><br>
    <input type="text" name="email"><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Enviar">
</form>