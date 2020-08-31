<?php


class GaleriaController extends Controller
{
    public function index()
    {
        $dados =[
            'qt' => 2
        ];

        $this->loadTemplate('galeria', $dados);
    }

}