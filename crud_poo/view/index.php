<?php
require_once("../controller/c_controller.php");
$cli1 = "";
if (isset($_POST['nome'])) {
	$cli1 = new controller();
	// Pegar os dados pelo metodo POST para inserir na tabela
	$cli1->InserirDados($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['logradouro'],$_POST['num'],$_POST['rua']);
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript">
		function cadastro(){
			alert("Cliente cadastrado com sucesso");
		}
		
	</script>
</head>
<body>
<center>
<h2>Cadastrar Cliente</h2>
<table>
<!-- formulario de cadastro -->
<form action="#" method="POST">
	
		<tr>
			<td>Nome</td>
			<td><input type="text" name="nome"></td>
		</tr>	
		<tr>
			<td>Email</td>
            <td><input type="email" name="email"></td>
		</tr>
		<tr>	
			<td>Senha</td>
            <td><input type="password" name="senha"></td>
		</tr>
		<tr>	
			<td>Logradouro</td>
            <td><input type="text" name="logradouro"></td>
		</tr>
		<tr>	
			<td>Numero da casa</td>
            <td><input type="number" name="num"></td>
		</tr>
		<tr>	
			<td>Rua</td>
            <td><input type="text" name="rua"></td>
		</tr>
        <tr><td><input type="Submit" value="Cadastrar" onclick="cadastro()"></td></tr>
	
</form>
</table>
	<!--Input para pesquisa -->
	<h2>Pesquisar Usuarios</h2>
	<table>
		<form action="#" method="POST">
		<tr><td><input type="text" placeholder="Pesquise aqui" name="pes"></td></tr>
		<tr><td><input type="Submit" value="Enviar"></td></tr>	
		
		</form>
	</table>
	<h2>Dados Salvos</h2>
	<!-- Tabela para Mostrar os nomes pesquisados e dados dos usuarios salvos -->
	<table border=1 class="Dados">
		<thead>
			<tr>
				<td class="TD" width="101" height="40">Numero</td>
				<td class="TD" width="101" height="40">Nome</td>
				<td class="TD" width="101" height="40">Email</td>
				<td class="TD" width="101" height="40">Senha</td>
				<td class="TD" width="101" height="40">Logradouro</td>
				<td class="TD" width="105" height="40">Num da casa</td>
				<td class="TD" width="101" height="40">Rua</td>
				<td class="TD" width="101" height="40">Atualizar</td>
				<td class="TD" width="101" height="40">Remover</td>
			</tr>
		</thead>	
		<tbody>
			<?php
				$cli1 = new controller();
				//pes-->nome do input da pesquisa 
				if(isset($_POST['pes'])){
					//função Pesquisar que fica no controller
					$pesquisa = $cli1->Pesquisar($_POST['pes']);
					while ($dados = mysqli_fetch_assoc($pesquisa)) {
						echo"
							<tr class='tr_table'>
								<td class='td_table' width='95' height='27'>".$dados['cli_id']."</td>
								<td class='td_table'>".$dados['cli_nome']."</td>
								<td class='td_table'>".$dados['cli_email']."</td>
								<td class='td_table'>".$dados['cli_senha']."</td>
								<td class='td_table'>".$dados['cli_logradouro']."</td>
								<td class='td_table'>".$dados['cli_num_casa']."</td>
								<td class='td_table'>".$dados['cli_rua']."</td>
								<td class='td_table'><a href=editar.php?id={$dados['cli_id']}>Atualizar</a></td>
								<td class='td_table'><a href=deletar.php?id={$dados['cli_id']}>Remover</a></td>
							<tr/>
						";
					}
				}
				else{
					//Função MostrarUsuario() fica dentro do controler 
					$sql = $cli1->MostrarUsuarios();
					while ($dados = mysqli_fetch_assoc($sql)) {
						echo"
							<tr class='tr_table'>
								<td class='td_table' width='95' height='27'>".$dados['cli_id']."</td>
								<td class='td_table'>".$dados['cli_nome']."</td>
								<td class='td_table'>".$dados['cli_email']."</td>
								<td class='td_table'>".$dados['cli_senha']."</td>
								<td class='td_table'>".$dados['cli_logradouro']."</td>
								<td class='td_table'>".$dados['cli_num_casa']."</td>
								<td class='td_table'>".$dados['cli_rua']."</td>
								<td class='td_table'><a href=editar.php?id={$dados['cli_id']}>Atualizar</a></td>
								<td class='td_table'><a href=deletar.php?id={$dados['cli_id']}>Remover</a></td>
							<tr/>
						";
					}
				}
?>
	</tbody>
</table>
<a href="index.php">Voltar</a>
</center>
</body>
</html>