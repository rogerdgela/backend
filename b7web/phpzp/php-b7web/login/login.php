<?php
    session_start();

    if(isset($_POST['email']) and !empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser = "root";
        $dbpass = "";

        try{
            $db = new PDO($dsn,$dbuser,$dbpass);

            $sql = $db->query("SELECT * FROM usuarios where email='$email' and senha = '$senha'");

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                //var_dump($dado);
                $_SESSION['id'] = $dado['id'];

                header("Location: index.php");
            }
        }catch (PDOException $e){
            echo "Falho: ".$e->getMessage();
        }
    }
?>
<form method="post">
    E-mail:<br>
    <input type="email" name="email"><br><br>

    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit" name="Entrar">
</form>
