<?php
    try{
        $pdo = new PDO("mysql:dbname=ordenar;host=localhost", "root","");
    }catch (PDOException $e){
        echo "Erro: ".$e->getMessage();
    }

    if(isset($_GET['ordem']) and !empty($_GET['ordem'])){
        $ordem = addslashes($_GET['ordem']);
        $sql = "Select * from usuarios Order By ".$ordem." Desc";
    }else{
        $ordem = '';
        $sql = "Select * from usuarios ";
    }
?>
<form method="get">
    <select name="ordem" onchange="this.form.submit()">
        <option></option>
        <option value="nome" <?php echo($ordem=="nome")? 'selected="selected"':''; ?>>Pelo Nome</option>
        <option value="idade" <?php echo($ordem=="idade")? 'selected="selected"':''; ?>>Pela Idade</option>
    </select>
</form>

<table border="1" width="400">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $usuario){
    ?>
                <tr>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['idade'] ?></td>
                </tr>
    <?php
            }
        }
    ?>
</table>
