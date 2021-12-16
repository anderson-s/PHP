<?php

class clientes{
	private $id;
    private $nome;
    private $email;
    private $senha;
    private $logradouro;
    private $num;
    private $rua;
	public function __construct($id,$nome, $email, $senha, $logradouro, $num, $rua){
		$this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->logradouro = $logradouro;
        $this->num = $num;
        $this->rua = $rua;

	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		 $this->nome = $nome;
    }
    public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		 $this->email = $email;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		 $this->senha = $senha;
	}
	public function getLogradouro(){
		return $this->logradouro;
	}
	public function setLogradouro($logradouro){
		 $this->logradouro = $logradouro;
	}
	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		 $this->num = $num;
	}
	public function getRua(){
		return $this->rua;
	}
	public function setRua($rua){
		 $this->rua = $rua;
	}
}
?>