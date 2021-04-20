<h2><?= $title ?></h2>

<?php echo validation_errors() ?>

<?php echo form_open('news/create') ?>
	Titulo:<br>
	<input type="text" name="title"><br><br>

	Text:<br>
	<textarea name="text"></textarea><br><br>

	<input type="submit" value="Salvar">

</form>
