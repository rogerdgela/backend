<?php
require_once '../config.php';

$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

if($method === "get"){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if($id){
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id;");
        $sql->bindValue('id',$id,PDO::PARAM_INT);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id' => $data['id'],
                'titulo' => $data['title'],
                'corpo' => $data['body']
            ];
        }else{
            $array['error'] = "ID Não existente";
        }
    }else{
        $array['error'] = "ID Não enviado";
    }
}else{
    $array['error'] = "Método não permitido";
}

require_once '../return.php';