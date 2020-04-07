<?php
include "contato.class.php";

$contato = new Contato();
?>
<h1>Contatos</h1>
<p><a href="adicionar.php">[ADD user]</a></p>
<table border="1" width="600">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php
        $lista = $contato->getAll();

        foreach ($lista as $item){
    ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $item['id']; ?>">[Alterar]</a>
                    <a href="excluir.php?id=<?php echo $item['id']; ?>">[Excluir]</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>
