<?php
try {
    $pdo = new PDO('mysql:dbname=projeto_loginajax;host=localhost','root','');
}catch (PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit();
}

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue('email', $email);
    $sql->bindValue('senha', md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0){
        echo "Login efetuado com sucesso!";
    }else{
        echo "Usuário e/ou senha inexistente ou não conferem";
    }
}else{
    echo "Digite um email e/ou senha";
}