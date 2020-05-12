<?php
    if(isset($_POST['add']) and $_POST['add'] == "Adicionar"){
        if(!file_exists('lista.txt')){
            file_put_contents("lista.txt",$_POST['nome']);
        }else{
            $texto = file_get_contents('lista.txt');
            $texto .= "\n".filter_input(INPUT_POST, 'nome',  FILTER_SANITIZE_STRING);
            file_put_contents("lista.txt",$texto);
        }
    }
?>
<form action="index.php" method="post">
    <label>Novo Nome:</label><br>
    <input type="text" name="nome">
    <input type="submit" name="add" value="Adicionar">
</form>
<?php
    if(file_exists('lista.txt')){
?>
        <ul>
            <?php
            $texto = explode("\n",file_get_contents('lista.txt'));
                foreach ($texto as $linha){
                    echo "<li>{$linha}</li>";
                }
            ?>
        </ul>
<?php
    }
?>