<?php


class Post
{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtyComentarios;

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }

    public function addComentario($c){
        $this->comentarios[] = $c;
        $this->contarComentarios();
    }

    public function getQtyComentarios(){
        return $this->qtyComentarios;
    }

    private function contarComentarios(){
        $this->qtyComentarios = count($this->comentarios);
    }
}

$post = new Post();
$post->addComentario("testi 1");
$post->addComentario("testi 3");
$post->addComentario("testi 2");

echo "Numero de comentarios: ".$post->getQtyComentarios();

