<?php

include "conexao.php";
mysqli_set_charset($conexao, 'utf8');
$id = $_GET['id'];
$query = "DELETE FROM clientes where cli_id = $id";
$sql = mysqli_query($conexao, $query) or die("Erro");
header('Location: ../usuarios/Admin/crud.php');
?>