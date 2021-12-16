<?php

require_once("../model/conexao.php");
require_once("../model/clientes.php");
class controller{	
	private $id;
	private $cliente;
	public function __construct(){
		$this->cliente = new clientes(0,null, null, null, null, 0, null);
	}
	public function MostrarUsuarios(){
		$con = new conexao();
		$query = "Select * from clientes LIMIT 15";
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;

	}
	public function MostrarDados(){
		return $this->cliente->getNome();
	}
	public function InserirDados($nome, $email, $senha, $logradouro, $num, $rua){
		$con = new conexao();
		$this->cliente->setNome($nome);
		$this->cliente->setEmail($email);
		$this->cliente->setSenha($senha);
		$this->cliente->setLogradouro($logradouro);
		$this->cliente->setNum($num);
		$this->cliente->setRua($rua);
		$con->executar("INSERT INTO clientes(cli_nome, cli_email, cli_senha, cli_logradouro, cli_num_casa, cli_rua) VALUES ('".$this->cliente->getNome()."', '".$this->cliente->getEmail()."', '".$this->cliente->getSenha()."', '".$this->cliente->getLogradouro()."', '".$this->cliente->getNum()."', '".$this->cliente->getRua()."');");
		$con->desconectar();
	}
	public function Pesquisar($nome) {
		$con = new conexao();
		if (isset($nome)) {
			$query = "Select * from clientes where cli_nome like '%$nome%'";
		} else {
			$query = "Select * from clientes ";
		}
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
	}
	public function DeletarDados($id){	
		$con = new conexao();
		$this->cliente->setId($id);
		$query ="DELETE FROM `clientes` WHERE cli_id = ('".$this->cliente->getId()."')";
		$sql = $con->executar($query);
		// var_dump($query);
		return $sql;
	}
	public function EditarDados($id,$nome, $email, $senha, $logradouro, $num,$rua){	
		$con = new conexao();
		$this->cliente->setId($id);
		$this->cliente->setNome($nome);
		$this->cliente->setEmail($email);
		$this->cliente->setSenha($senha);
		$this->cliente->setLogradouro($logradouro);
		$this->cliente->setNum($num);
		$this->cliente->setRua($rua);
		$query = "UPDATE clientes set cli_nome = '$nome', cli_email = '$email', cli_senha = '$senha',cli_logradouro = '$logradouro',cli_num_casa = '$num',cli_rua = '$rua' where cli_id = $id";
		$sql = $con->executar($query);
		return $sql;
	}



}
?>