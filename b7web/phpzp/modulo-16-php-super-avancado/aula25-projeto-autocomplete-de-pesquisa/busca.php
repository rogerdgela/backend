<?php
try{
    $pdo = new PDO('mysql:dbname=projeto_autocomplete;host=localhost','root','');
}catch (PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit();
}

if(!empty($_POST['texto'])){
    $texto = $_POST['texto'];

    $sql = "SELECT * FROM pessoas WHERE nome LIKE :texto LIMIT 10";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':texto', "%".$texto."%");
    $sql->execute();

    $dados = [];

    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $pessoa){
            $dados[] = [
                'nome' => $pessoa['nome'],
                'id' => $pessoa['id']
            ];
        }
    }

    echo json_encode($dados);

    /*if($sql->rowCount() > 0){
         foreach ($sql->fetchAll() as $pessoa){
             echo $pessoa['nome']."<br>";
         }
    }*/
}