<?php
	require_once("aula1.php");
	$objeto = new Pessoa();
$objeto->nome = "Andeson Silva";
$objeto->altura = 1.75;
$objeto->idade = 18;
$objeto-> Falar();
echo $objeto->nome;
echo $objeto->altura;
echo $objeto->idade;
var_dump($objeto);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name">
		<input type="text" name="cpf">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>