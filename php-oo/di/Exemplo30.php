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

class Container
{
    public static function getDb()
    {
        $db = new \PDO("mydql:host=localhost;dbname=banco","usuario", "senha");
        return $db;
    }

    public static function getUsuario()
    {
        return new Usuario(self::getDb());
    }

    public static function getVenda()
    {
        return new Venda(self::getUsuario());
    }
}

//$db = new \PDO("mydql:host=localhost;dbname=banco","usuario", "senha");
//$usuario = new Usuario($db);
//$venda = new Venda($usuario);

$venda = Container::getVenda();
