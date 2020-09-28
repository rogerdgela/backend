<?php


class GaleriaController extends Controller
{
    public function index()
    {

    }

    public function abrir($id, $titulo)
    {
        echo $id . ' - ' . $titulo;
    }

}