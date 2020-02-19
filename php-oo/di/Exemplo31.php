<?php

class Usuario
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function salvar()
    {
        $array = array('nome'=>'Teste');
        $this->db->exec("Comando para gravar na base".$array);
    }
}

class Venda
{
    private $usuario;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }
}

$db = new \PDO("mysql:host=localhost;dbname=banco","usuario","senha");
$usuario = new Usuario($db);
$venda = new Venda($usuario);
