<?php
    require "conexao.php";
?>
<a href="addUser.php">Add user</a>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $usuario){
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a href="editUser.php?id='.$usuario['id'].'">Editar</a> - <a href="delUser.php?id='.$usuario['id'].'">Excluir</a> </td>';
                echo '</tr>';
            }
        }
    ?>
</table>