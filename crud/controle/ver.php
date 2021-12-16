<?php
	if (isset($_POST['email']) || isset($_POST['senha'])){
		session_start();
        include "conexao.php";
        $email = $_POST['email'];
    	$senha = $_POST['senha'];
    	$tipo = $_POST['tipo'];

    if($tipo == 0) {
    	$query = "SELECT * from clientes where cli_email = '$email' and cli_senha = '$senha'";
    	$sql = mysqli_query($conexao, $query);
        $cont = 0;
        while($dados = mysqli_fetch_assoc($sql)){
		   $cont++;
		   $nome = $dados['cli_nome'];
		}
			if ($cont == 1) {
				$_SESSION['cli_nome'] = $nome;
				$_SESSION['cli_email'] = $email;
        		$_SESSION['cli_senha'] = $senha;
        		header("Location: ../usuarios/Cliente/index.php");
			}else{
				echo "<script type='text/javascript'>
				alert('Dados Incorretos');
				window.location.href='../login.php';
				</script>";
			}
		}	
    else if($tipo == 1) {
    	$query = "SELECT * from admin where adm_email = '$email' and adm_senha = '$senha'";
    	$sql = mysqli_query($conexao, $query);
        $cont = 0;
        while($dados = mysqli_fetch_assoc($sql)){
			$cont++;
			$nome = $dados['adm_nome'];

		}
			if ($cont == 1) {
				$_SESSION['adm_nome'] = $nome;
				$_SESSION['adm_email'] = $email;
        		$_SESSION['adm_senha'] = $senha;
        		header("Location: ../usuarios/Admin/crud.php");
			}else{
				echo "<script type='text/javascript'>
				alert('Dados Incorretos');
				window.location.href='../login.php';
				</script>";
			}
		}	

}
	else{
		header('Location: ../');
	}	
?>