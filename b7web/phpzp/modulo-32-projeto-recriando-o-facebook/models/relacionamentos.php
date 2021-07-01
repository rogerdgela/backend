<?php
class relacionamentos extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addFriend($id1, $id2){
        $sql = "INSERT INTO relacionamentos SET usuario_de = '$id1', usuario_para = '$id2', status = '0'";
        $this->db->query($sql);

        return "solicitado";
    }

    public function aceitarFriend($id1, $id2){
        $sql = "UPDATE relacionamentos SET status = '1' WHERE usuario_de = '$id2' AND usuario_para = '$id1'";
        $this->db->query($sql);

        return "aceitado";
    }

    public function getRequisicoes(){
        $array = [];
        $sql = "
            SELECT 
                   usuarios.id,
                   usuarios.nome
            FROM relacionamentos
            LEFT JOIN usuarios
            ON usuarios.id = relacionamentos.usuario_de
            WHERE 
                  relacionamentos.usuario_para = '" . $_SESSION['lgsocial'] . "' AND
                  relacionamentos.status = '0'
            ";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function getTotalAmigos($id){
        $array = [];
        $sql = "SELECT COUNT(*) as c FROM relacionamentos WHERE (usuario_de = '$id' OR usuario_para = '$id') AND status = '1'";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch(PDO::FETCH_ASSOC);

        return $sql['c'];
    }

    public function getIdFriends($id)
    {
        $itens = [];
        $sql = "SELECT usuario_de, usuario_para FROM relacionamentos WHERE usuario_de = '$id'  OR usuario_para = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $item){
                $itens[] = $item['usuario_de'];
                $itens[] = $item['usuario_para'];
            }
        }

        return $itens;
    }
}