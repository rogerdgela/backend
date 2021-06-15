<h2>Cadastro</h2>
<form method="post">
    Nome:<br>
    <input type="nome" name="nome"><br><br>

    E-mail:<br>
    <input type="email" name="email"><br><br>

    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Cadastrar">
</form>

<?php
    if(!empty($vazio)){
        echo $vazio;
    }