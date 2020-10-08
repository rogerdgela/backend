<?php
sleep(2);
$id = $_POST['id'];
$pdo = new PDO('mysql:dbname=aula_modal;host=localhost','root','');
$sql = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");

if($sql->rowCount() > 0){
    $info = $sql->fetch(PDO::FETCH_ASSOC);
?>
    <form method="post">
        Nome:<br>
        <input type="text" name="nome" value="<?= $info['nome']; ?>"><br><br>

        E-mail:<br>
        <input type="text" name="email" value="<?= $info['email']; ?>"><br><br>

        Senha:<br>
        <input type="text" name="senha" value="<?= $info['senha']; ?>"><br><br>

        <input type="hidden" name="id" value="<?= $info['id']; ?>">

        <input type="submit" value="Salvar">
    </form>
<?php
}
?>