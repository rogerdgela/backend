<h1>Editar</h1>

<?php
 if($error === 'exist'){
     echo '<div class="aviso">E-mail já existente, tente outro</div>';
 }
?>

<form method="post">
    Nome: <br>
    <input type="text" name="nome" value="<?= $info['nome'] ?>"><br><br>

    E-mail: <br>
    <input type="text" name="email" value="<?= $info['email'] ?>"><br><br>

    <input type="submit" value="Alterar"><br><br>
</form>