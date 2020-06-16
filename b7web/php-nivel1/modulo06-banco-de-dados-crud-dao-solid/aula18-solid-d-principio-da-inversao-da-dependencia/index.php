<?php

interface DBConnection
{
    public function connect();
}

class MySqlConnection implements DBConnection
{
    public function connect()
    {

    }
}

class OracleConnection implements DBConnection
{
    public function connect()
    {

    }
}

class UsuarioDao
{
    private $db;

    public function __construct(DBConnection $dbConn)
    {
        $this->db = $dbConn;
    }
}

$dbConn = new OracleConnection();

$usuarioDao = new UsuarioDao($dbConn);