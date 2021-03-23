<?php
namespace Core;

use phpDocumentor\Reflection\Types\This;

class Controller
{
    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getResquestData()
    {
        switch ($this->getMethod()){
            case "GET": return $_GET; break;
            case "PUT":
            case "DELETE":
                parse_str(file_get_contents('php://input'), $data);
                return (array) $data;
                break;
            case "POST":
                $data = json_decode(file_get_contents('php://input'));

                if(is_null($data)){
                    $data = $_POST;
                }

                return (array) $data;
                break;
        }
    }

    public function returnJson($array)
    {
        header('Content-Type: aplication/json');
        echo json_encode($array);
        exit();
    }
}