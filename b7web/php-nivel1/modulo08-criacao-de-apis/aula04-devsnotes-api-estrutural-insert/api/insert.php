<?php
require_once '../config.php';

$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

if($method === "post"){

    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $corpo = filter_input(INPUT_POST, 'corpo', FILTER_SANITIZE_STRING);

    if($titulo and $corpo){
        $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUES (:title, :body);");
        $sql->bindValue('title',$titulo);
        $sql->bindValue('body',$corpo);
        $sql->execute();

        $id = $pdo->lastInsertId();

        $array['result'] = [
                'id' => $id,
                'titulo' => $titulo,
                'corpo' => $corpo
            ];

    }else{
        $array['error'] = "Campos Não enviados";
    }
}else{
    $array['error'] = "Método não permitido";
}

require_once '../return.php';