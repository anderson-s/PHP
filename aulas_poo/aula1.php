<?php
	class Pessoa{
		public $nome;
		public $altura;
		public $idade;

		public function Falar(){
			echo $this->nome." com ".$this->idade." anos de idade "."Acabou de Falar<br>";
		}
	}

	$objeto = new Pessoa();
$objeto->nome = "Andeson Silva";
$objeto->altura = 1.75;
$objeto->idade = 18;
$objeto-> Falar();
echo $objeto->nome;
echo $objeto->altura;
echo $objeto->idade;
var_dump($objeto);
?>