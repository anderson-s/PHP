<?php

	class Pessoa{
		public function atribuirNome($nome){
			return "O nome da pessoa é: ".$nome;
		}
	}
	class Exibir{
		public $pessoa;
		public $nome;

		function __construct($nome){
			$this->pessoa = new Pessoa();
			$this->nome = $nome;
		}
		public function Mostrar(){
			echo $this->pessoa->atribuirNome($this->nome);
		} 
	}
$obj = new Exibir("Silva");
$obj->Mostrar();
?>