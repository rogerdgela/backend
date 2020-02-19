<!--<form method="post" enctype="multipart/form-data" action="recebedor.php">
    <input type="file" name="arquivo"><br><br>
    <input type="submit" name="Enviar">
</form>-->

<form method="post" enctype="multipart/form-data" action="recebedor.php">
    Arquivo:<br>
    <input type="file" name="arquivos[]" multiple><br><br>
    <input type="submit" name="Enviar">
</form>