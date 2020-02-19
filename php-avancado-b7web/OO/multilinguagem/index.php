<?php
session_start();
if(!empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}
require "config.php";
require "Language.php";
$lang = new Language();
?>
<a href="index.php?lang=en">Ingles</a>
<a href="index.php?lang=pt-br">Brasil</a>
<a href="index.php?lang=es">Espanhol</a>
<hr>
Linguagem Definida: <?php echo $lang->getLanguage(); ?>
<hr>

<button><?php echo $lang->get('BUY'); ?></button>
<a href=""><?php echo $lang->get("LOGOUT"); ?></a>
<hr>
categoria: <?php $lang->get("CATEGORIA_PHOTOS"); ?><br>

<?php
$sql = "SELECT id, (SELECT valor FROM lang WHERE lang.lang = :lang and lang.nome = categorias.lang_item) 
        as nome FROM categorias";
$sql = $pdo->prepare($sql);
$sql->bindValue(":lang", $lang->getLanguage());
$sql->execute();

if($sql->rowCount() > 0){
    foreach ($sql->fetchAll() as $categoria){
        echo $categoria['nome']."<br>";
    }
}
?>