<?php
    require "conexao.php";
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) and !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' where id = '$id'";
        $pdo->query($sql);
        header("Location: index.php");
    }

    $sql = "SELECT * FROM usuarios where id = '$id'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }else{
        header("Location: index.php");
    }
?>
<form method="post">
    nome:<br>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"><br><br>
    Email:<br>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>"><br><br>

    <input type="submit" value="atualizar">
</form>