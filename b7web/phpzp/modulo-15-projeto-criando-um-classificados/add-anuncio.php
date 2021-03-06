<?php
    require_once 'pages/header.php';
    if(empty($_SESSION['cLogin'])){
?>
        <script type="text/javascript">window.location.href="login.php";</script>
<?php
        exit();
    }

    require_once 'classes/Anuncios.php';
    $a = new Anuncios();

    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
        $titulo = addslashes($_POST['titulo']);
        $categoria = addslashes($_POST['categoria']);
        $valor = addslashes($_POST['valor']);
        $descricao = addslashes(nl2br($_POST['descricao']));
        $estado = addslashes($_POST['estado']);

        if($a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado)){

            $sucesso = '<div class="alert alert-success">
                            Anúncio cadastrado com sucesso
                        </div>';
        }
    }
?>

    <div class="container">
        <h1>Meus Anúncios - Adicionar Anúncio</h1>
        <?php
            if(!empty($sucesso)){
                echo $sucesso;
            }
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="form-control">
                    <?php
                        require_once 'classes/Categorias.php';
                        $c = new Categorias();
                        $cats = $c->getLista();
                        foreach ($cats as $cat){
                    ?>
                            <option value="<?= $cat['id'] ?>"><?= $cat['nome'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" name="valor" id="valor" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao"></textarea>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="0">Ruim</option>
                    <option value="1">Bom</option>
                    <option value="2">Ótimo</option>
                </select>
            </div>

            <input type="submit" value="Adicionar" class="btn btn-default">
        </form>
    </div>

<?php require_once 'pages/footer.php'; ?>