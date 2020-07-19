<?php
require_once '../config.php';

$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

if($method === "get"){
    $sql = $pdo->query("SELECT * FROM notes;");

    if($sql->rowCount() > 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $item){
            $array['result'][] = [
                'id' => $item['id'],
                'titulo' => $item['title'],
                'corpo' => $item['body']
            ];
        }
    }
}else{
    $array['error'] = "Método não permitido";
}

require_once '../return.php';