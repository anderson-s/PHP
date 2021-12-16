<?php 
	session_start();
	if (!$_SESSION['cli_email'] || !$_SESSION['cli_senha'] ) {
	    header('Location: ../');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2><?php echo "Olá sr ".$_SESSION['cli_nome'];?></h2>
<br><a href="../../controle/sair.php">Sair</a>
</body>
</html>
