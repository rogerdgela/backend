<?php
    try{
        $pdo = new PDO("mysql:dbname=blog;host=localhost","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo "Erro: ".$e->getMessage();
    }

    if(isset($_POST['nome']) and !empty($_POST['nome'])){
        $nome = $_POST['nome'];
        $msg = $_POST['mensagem'];

        $sql = $pdo->prepare("INSERT INTO mensagens SET nome=:nome, msg=:msg, data_msg = NOW()");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":msg", $msg);
        $sql->execute();
    }
?>
<fieldset>
    <form method="post">
        Nome:<br>
        <input type="text" name="nome"><br><br>

        Mensagem:<br>
        <textarea name="mensagem"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</fieldset>
<br>
<?php
    $sql = "SELECT * From mensagens order by data_msg Desc";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $mensagens) {
?>
            <strong><?php echo $mensagens['nome']; ?></strong><br>
            <p><?php echo $mensagens['msg']; ?></p>
            <hr>
<?php
        }
    }else{
        echo "Não há Mensagens";
    }
?>

