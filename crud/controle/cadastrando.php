
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "conexao.php";
$nome = $_POST['nome'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$logradouro= $_POST['logradouro'];
$num= $_POST['num'];
$rua = $_POST['rua'];
$sql = "INSERT INTO clientes(cli_nome, cli_email, cli_senha, cli_logradouro, cli_num_casa, cli_rua) VALUES ('$nome','$email', '$senha', '$logradouro', '$num', '$rua')";
$inserir = mysqli_query($conexao, $sql);
// header("location: teladelogin.html");
?>
<script type="text/javascript">
 	
alert('Usuario Cadastrado com sucesso');
window.location.href="../login.php";
</script>
</body>
</html>

