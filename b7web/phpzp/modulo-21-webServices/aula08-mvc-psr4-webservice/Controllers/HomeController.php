<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller
{

	public function index()
    {

	}

	public function testando()
    {
        echo 'Testando';
    }

    public function visualizar_usuarios($id)
    {
        echo 'ID: '.$id;
    }
}