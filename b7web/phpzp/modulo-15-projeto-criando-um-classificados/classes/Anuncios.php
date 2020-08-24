<?php


class Anuncios
{
    public function getTotalAnuncios($filtros)
    {
        global $pdo;

        $filtrosstring = ['1=1'];

        if(!empty($filtros['categoria'])){
            $filtrosstring[] = 'anuncios.id_categoria = :id_categoria';
        }

        if(!empty($filtros['preco'])){
            $filtrosstring[] = 'anuncios.valor BETWEEN :preco1 AND :preco2';
        }

        if(!empty($filtros['estado'])){
            $filtrosstring[] = 'anuncios.estado = :estado';
        }

        $sql = $pdo->prepare("SELECT COUNT(*) as c FROM anuncios WHERE ". implode(' AND ', $filtrosstring));

        if(!empty($filtros['categoria'])){
            $sql->bindValue(':id_categoria', $filtros['categoria']);
        }

        if(!empty($filtros['preco'])){
            $preco = explode('-', $filtros['preco']);
            $sql->bindValue(':preco1', $preco[0]);
            $sql->bindValue(':preco2', $preco[1]);
        }

        if(!empty($filtros['estado'])){
            $sql->bindValue(':estado', $filtros['estado']);
        }

        $sql->execute();

        $row = $sql->fetch();

        return $row['c'];
    }

    public function getUltimosAnuncios($page, $per_page, $filtros)
    {
        global $pdo;

        $offset = ($page - 1) * $per_page;

        $array = [];

        $filtrosstring = ['1=1'];

        if(!empty($filtros['categoria'])){
            $filtrosstring[] = 'anuncios.id_categoria = :id_categoria';
        }

        if(!empty($filtros['preco'])){
            $filtrosstring[] = 'anuncios.valor BETWEEN :preco1 AND :preco2';
        }

        if(!empty($filtros['estado'])){
            $filtrosstring[] = 'anuncios.estado = :estado';
        }

        $sql = $pdo->prepare("SELECT
               *,
               (SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncios.id LIMIT 1) as url,
               (SELECT categorias.nome FROM categorias WHERE categorias.id = anuncios.id_categoria) as categoria
               FROM anuncios WHERE ". implode(' AND ', $filtrosstring) ." ORDER BY id DESC LIMIT $offset,$per_page;");

        if(!empty($filtros['categoria'])){
            $sql->bindValue(':id_categoria', $filtros['categoria']);
        }

        if(!empty($filtros['preco'])){
            $preco = explode('-', $filtros['preco']);
            $sql->bindValue(':preco1', $preco[0]);
            $sql->bindValue(':preco2', $preco[1]);
        }

        if(!empty($filtros['estado'])){
            $sql->bindValue(':estado', $filtros['estado']);
        }

        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function getMeusAnuncios()
    {
        global $pdo;

        $array = [];
        $sql = $pdo->prepare("SELECT
               *,
               (SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncios.id LIMIT 1) as url 
               FROM anuncios WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO anuncios(id_usuario, id_categoria, titulo, descricao, valor, estado)
                                        VALUES (:id_usuario, :id_categoria, :titulo, :descricao, :valor, :estado)");

        $sql->bindValue(':id_usuario',$_SESSION['cLogin']);
        $sql->bindValue(':id_categoria',$categoria);
        $sql->bindValue(':titulo',$titulo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':estado',$estado);
        $sql->execute();

        return true;
    }

    public function excluirAnuncio($id)
    {
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
        $sql->bindValue(':id_anuncio', $id);
        $sql->execute();

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function getAnuncio($id)
    {
        global $pdo;

        $array = [];
        $sql = $pdo->prepare("SELECT *,
                                               (SELECT categorias.nome FROM categorias WHERE categorias.id = anuncios.id_categoria) as categoria,
                                               (SELECT usuarios.telefone FROM usuarios WHERE usuarios.id = anuncios.id_usuario) as telefone
                                        FROM anuncios WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch(PDO::FETCH_ASSOC);
            $array['fotos'] = [];

            $sql = $pdo->prepare("SELECT id,url FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
            $sql->bindValue(':id_anuncio',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array['fotos'] = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $array;
    }

    public function editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id)
    {
        global $pdo;

        $sql = $pdo->prepare("UPDATE anuncios SET id_usuario = :id_usuario,
                                                            id_categoria = :id_categoria,
                                                            titulo = :titulo,
                                                            descricao = :descricao,
                                                            valor = :valor,
                                                            estado = :estado
                                        WHERE id = :id");

        $sql->bindValue(':id_usuario',$_SESSION['cLogin']);
        $sql->bindValue(':id_categoria',$categoria);
        $sql->bindValue(':titulo',$titulo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':estado',$estado);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if(count($fotos) > 0){
            for ($q = 0; $q < count($fotos['tmp_name']); $q++){
                $tipo = $fotos['type'][$q];
                if(in_array($tipo, array('image/jpeg','image/png'))){
                    $tmpname = md5(time().rand(0,9999)).'.jpg';
                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/anuncios/'.$tmpname);
                    list($width_orig, $height_orig) = getimagesize('assets/images/anuncios/'.$tmpname);
                    $ratio = $width_orig/$height_orig;

                    $width = 500;
                    $height = 500;

                    if($width/$height > $ratio){
                        $width = $height * $ratio;
                    }else{
                        $height = $width / $ratio;
                    }

                    $img = imagecreatetruecolor($width, $height);
                    if($tipo == 'image/jpeg'){
                        $origi = imagecreatefromjpeg('assets/images/anuncios/'.$tmpname);
                    }else{
                        $origi = imagecreatefrompng('assets/images/anuncios/'.$tmpname);
                    }

                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

                    imagejpeg($img, 'assets/images/anuncios/'.$tmpname, 85);

                    $sql = $pdo->prepare("INSERT INTO anuncios_imagens (id_anuncio, url)
                                                    VALUE (:id_anuncio, :url)");
                    $sql->bindValue(':id_anuncio', $id, PDO::PARAM_INT);
                    $sql->bindValue(':url', $tmpname);
                    $sql->execute();
                }
            }
        }

        return true;
    }

    public function excluirFoto($id, $id_anuncio)
    {
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $id_anuncio;
    }
}