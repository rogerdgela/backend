<?php
require_once 'config.php';

$id = filter_input(INPUT_GET, 'id');
$info = [];
if(!empty($id)){
    $sql_select = "SELECT * FROM usuarios WHERE id = :id;";

    $select = $pdo->prepare($sql_select);
    $select->bindValue(':id', $id);
    $select->execute();

    if($select->rowCount() > 0){
        $info = $select->fetch(PDO::FETCH_ASSOC);
    }else{
        header('Location: index.php');
        exit();
    }
}else{
    header('Location: index.php');
    exit();
}
?>

<form method="post" action="update_action.php">
    <label>Nome</label><br>
    <input type="text" name="name" value="<?= $info['name']; ?>">

    <br>
    <br>

    <label>E-mail</label><br>
    <input type="email" name="email" value="<?= $info['email']; ?>">

    <br>
    <br>

    <input type="submit" value="Salvar">
</form>

