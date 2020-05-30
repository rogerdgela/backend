<?php

class Usuario
{
    private $db;

    public function __construct($host, $banco, $usuario, $senha)
    {
        $this->db = new \PDO("mysql:host={$host};dbname={$banco}", $usuario, $senha);
    }

    public function salvar()
    {
        $array = array('nome'=>'Teste');
        $this->db->exec("Comando para gravar na base".$array);
    }
}

$usuario = new Usuario("localhost","banco","usar", "senha");