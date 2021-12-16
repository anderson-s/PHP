<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
<table border="0.5">
<?php
include 'conexao.php';
$pesquisar = $_POST['pesquisar'];
	$sql = "SELECT * FROM clientes WHERE cli_nome LIKE '%$pesquisar%'";
	$query = mysqli_query($conexao, $sql);
	while($dados = mysqli_fetch_assoc($query)) {
	$id = $dados['cli_id'];
	$nome = $dados['cli_nome'];
	$email = $dados['cli_email'];
	echo "<tr>
	<td>$id</td>
	<td>$nome</td>
	<td>$email</td>
	<td><a href='atualizar.php?id=$id'> Atualizar</a></td>
	<td><a href='deletar.php?id=$id'> Remover</a></td>
	</tr>";
	}
?>
</table>
</center>
</body>
</html>