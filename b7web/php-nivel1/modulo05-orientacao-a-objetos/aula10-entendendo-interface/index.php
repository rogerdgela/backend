<?php
require_once "BancoDados.php";

class MysqlDB implements Polimosfismo
{
    public function listarUser()
    {

    }

    public function adicionarUser()
    {
        echo "Add User Mysql";
    }

    public function alterarUser()
    {

    }

}

class OracleDB implements Polimosfismo
{
    public function listarUser()
    {

    }

    public function adicionarUser()
    {
        echo "Add User Oracle";
    }

    public function alterarUser()
    {

    }
}

$metodos = new MysqlDB();
$metodos->adicionarUser();