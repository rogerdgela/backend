<?php
try{
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch (PDOException $e){
    die($e->getMessage());
}

$total = 0;
$sql = "SELECT COUNT(*) as c from mensagens";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];
$paginas = $total/2;
$qtyporpaginas = 2;

$pg = 1;
if(isset($_GET['p']) and !empty($_GET['p'])){
    $pg = addslashes($_GET['p']);
}
$p = ($pg-1)*$qtyporpaginas;

$sql = "SELECT * FROM mensagens LIMIT $p, $qtyporpaginas";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0){
    foreach ($sql->fetchAll() as $item){
        echo $item['id']." - ".$item['nome']."<br>";
    }
}

echo "<hr>";
for($q=0; $q<$paginas; $q++){
    echo '<a href="./?p='.($q+1).'">['.($q+1).']</a>';
}