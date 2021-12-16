<?php
	class Pessoa{
		public $nome;
		public $altura;
		public $idade;

		public function __construct($nome, $altura, $idade){
			 $this->nome = $nome;
			 $this->altura = $altura;
			  $this->idade = $idade;
		}
		public function setNome($nome){
			 $this->nome = $nome;
			
		}
		public function getNome(){
			 return $this->nome;
		}
		public function setAltura($altura){
			$this->altura = $altura;
		}
		public function getAltura(){
			 return $this->altura;
		}
		public function setIdade($idade){
			 $this->idade = $idade;
		}
		public function getIdade(){
			 return $this->idade;
		}
	}
	class Pess{
		public $individuo;
		public function __construct(){
			$this->individuo = new Pessoa(null, null, null);
		}
		public function InserirDados($nome, $altura, $idade){
			$this->individuo = setNome($nome);
			$this->individuo = setAltura($altura);
			$this->individuo = setIdade($idade);
		}
	}
?>

