<?php


	class Pessoa{
		public $nome;

		public function __clone(){
				echo "Clonagem";
		}
	}

$obj = new Pessoa;
echo $obj->nome = "Silva";
$obj2 = clone $obj;	/*Fazendo referencia ao objeto depois fando o clone do obj*/
echo $obj2->nome = "Andeson";
echo $obj->nome;

?>