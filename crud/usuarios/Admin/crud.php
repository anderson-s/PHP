<?php 
	session_start();
	if (!$_SESSION['adm_email'] || !$_SESSION['adm_senha']){
	    header('Location: ../');
	}
?>
<html>
<head>
	<h2><?php echo "Olá sr ".$_SESSION['adm_nome'];?></h2>
</head>
<style type="text/css">
	td tr{
		margin: 50px;
	}
</style>
	<body>
		<center>
		<table border="1">
		<tr><td>Código</td><td>Nome</td><td>Email</td><td>Atualizar</td><td>Remover</td></tr>
<?php
include "../../controle/conexao.php";
$query = "SELECT * from clientes";
$sql = mysqli_query($conexao, $query) or die("Erro");
while ($dados = mysqli_fetch_assoc($sql)) {
	$id = $dados['cli_id'];
	$nome = $dados['cli_nome'];
	$email = $dados['cli_email'];
	echo "<tr>
	<td>$id</td>
	<td>$nome</td>
	<td>$email</td>
	<td><a href='../../controle/atualizar.php?id=$id'> Atualizar</a></td>
	<td><a href='../../controle/deletar.php?id=$id'> Remover</a></td>
	</tr>";
}?>
</center>
<p>
<form method="POST" action="../../controller/pesquisar.php">
	Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
	<input type="submit" value="Pesquisar">
</form>

</p>
</table>
<br><a href="../../controle/sair.php">Sair</a>		
	</body>
</html>