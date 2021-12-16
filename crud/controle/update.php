
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "conexao.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$email= $_POST['email'];
$sql = "UPDATE clientes set cli_nome = '$nome', cli_email = '$email' where cli_id = $id";
$query = mysqli_query($conexao, $sql) or die("Erro");
?>
<script type="text/javascript">
alert('Usuario Atualizado com sucesso');
window.location.href="../usuarios/Admin/crud.php";
</script>
</body>
</html>
