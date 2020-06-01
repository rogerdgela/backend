<?php
require_once 'config.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if($id){
    $delete = $pdo->prepare("DELETE FROM usuarios WHERE id = :id;");
    $delete->bindValue(':id', $id,PDO::PARAM_INT);
    $delete->execute();
}

header('Location: index.php');
exit();
?>