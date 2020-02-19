<?php


class Reservas
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getReservas(){
        $array = array();

        $sql = "SELECT * FROM reservas";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function verificarDisponibilidade($carro, $dataIni, $datafim){
        $sql = "select * from reservas where id_carro = :carro and (not(data_inicio > :data_fim or data_fim < :data_inicio))";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":carro", $carro);
        $sql->bindValue(":data_inicio",$dataIni);
        $sql->bindValue(":data_fim",$datafim);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            return true;
        }
    }

    public function reservar($carro, $dataini, $datafim, $pessoa){
        $sql = "insert into reservas (id_carro, data_inicio, data_fim, pessoa)
                values (:id_carro, :data_inicio, :data_fim, :pessoa)";
        $sql= $this->pdo->prepare($sql);
        $sql->bindValue("id_carro", $carro);
        $sql->bindValue(":data_inicio", $dataini);
        $sql->bindValue(":data_fim", $datafim);
        $sql->bindValue(":pessoa", $pessoa);
        $sql->execute();
    }
}