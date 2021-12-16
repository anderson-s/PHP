<!DOCTYPE html>
<?php
	require_once('aula18.php');
	$dados = new Teste();
	$dados->Salvar($_POST['nome'], $_POST['cpf']);
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="nome">
		<input type="text" name="cpf">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
