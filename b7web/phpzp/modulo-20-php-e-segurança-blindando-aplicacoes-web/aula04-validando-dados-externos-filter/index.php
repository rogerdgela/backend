<?php
/*$email = filter_input(INPUT_GET, 'email',FILTER_VALIDATE_EMAIL);
echo $email;*/

/*$email = "dgelask8@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "É um email";
}else{
    echo "Não é um email";
}*/

/*FILTER_VALIDATE_EMAIL;
FILTER_VALIDATE_BOOLEAN;
FILTER_VALIDATE_INT;
FILTER_VALIDATE_URL;
FILTER_VALIDATE_REGEXP;
FILTER_VALIDATE_FLOAT;
FILTER_VALIDATE_IP;

FILTER_SANITIZE_STRING;
FILTER_SANITIZE_ENCODED;
FILTER_SANITIZE_SPECIAL_CHARS;*/

$prioridade = filter_input(INPUT_POST, 'prioridades', FILTER_VALIDATE_INT, array(
    'options' => array(
        'min_range' => 1,
        'max_range' => 4,
        'default' => 1
    )));
echo "Prioridade ". $prioridade;
?>

<form method="post">
    <select name="prioridades">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select>

    <input type="submit" value="Enviar">
</form>
