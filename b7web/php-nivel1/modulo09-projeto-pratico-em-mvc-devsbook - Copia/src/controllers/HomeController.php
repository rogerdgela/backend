<?php
namespace src\controllers;

use \core\Controller;
use \scr\handlers\LoginHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct()
    {
        $this->$this->loggedUser = LoginHandler::checkLogin();

        if(LoginHandler::checkLogin() === false){
            $this->redirect('/login');
        }

    }

    public function index()
    {
        $this->render('home', ['nome' => 'Bonieky']);
    }

}