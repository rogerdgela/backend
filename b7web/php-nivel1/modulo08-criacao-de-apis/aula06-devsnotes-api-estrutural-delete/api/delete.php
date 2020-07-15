<?php
require_once '../config.php';
//$_PUT = array();

$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

if($method === "delete"){
    parse_str(file_get_contents('php://input'), $input);

    $id = (!empty($input['id'])) ? filter_var($input['id']) : null;

    if($id){
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue('id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
            $sql->bindValue(":id", $id, PDO::PARAM_INT);
            $sql->execute();

            $array['result'] = [
                'id' => $id,
                'msg' => 'Deletado com sucesso',
            ];
        }else{
            $array['error'] = "ID Inexistente";
        }

    }else{
        $array['error'] = "ID não enviado";
    }
}else{
    $array['error'] = "Método não permitido";
}

require_once '../return.php';