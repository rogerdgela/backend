<?php


class Carros
{
    private $pdo;

    public  function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getCarros(){
        $carros = array();

        $sql = "SELECT * FROM carros";
        $sql = $this->pdo->query($sql);

        if($sql->rowcount() > 0){
            $carros = $sql->fetchAll();
        }

        return $carros;
    }
}