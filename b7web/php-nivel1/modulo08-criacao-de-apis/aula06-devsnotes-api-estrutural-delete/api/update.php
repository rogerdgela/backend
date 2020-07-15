<?php
require_once '../config.php';
//$_PUT = array();

$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

if($method === "put"){
    parse_str(file_get_contents('php://input'), $input);

    $id = (!empty($input['id'])) ? filter_var($input['id']) : null;
    $titulo = (!empty($input['titulo'])) ? filter_var($input['titulo']) : null;
    $corpo = (!empty($input['corpo'])) ? filter_var($input['corpo']) : null;

    if($id and $titulo and $corpo){
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue('id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("UPDATE notes SET title = :titulo, body = :corpo WHERE id = :id");
            $sql->bindValue(":titulo",$titulo);
            $sql->bindValue(":corpo", $corpo);
            $sql->bindValue(":id", $id, PDO::PARAM_INT);
            $sql->execute();

            $array['result'] = [
                'id' => $id,
                'titulo' => $titulo,
                'corpo' => $corpo
            ];
        }else{
            $array['error'] = "ID Inexistente";
        }

    }else{
        $array['error'] = "Dados Não enviados";
    }
}else{
    $array['error'] = "Método não permitido";
}

require_once '../return.php';