<h1>Adicionar</h1>

<?php
 if($error === 'exist'){
     echo '<div class="aviso">E-mail já existente, tente outro</div>';
 }
?>

<form method="post" action="<?= BASE_URL ?>contatos/add_save">
    Nome: <br>
    <input type="text" name="nome"><br><br>

    E-mail: <br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Adicionar"><br><br>
</form>