<?php


	class Automovel{
		public $cor;
		public $modelo;
		public $ano;

		public function Andar(){
			echo "Andou";

		}
		public function Parar(){
			echo "parou";
		}
	}
	class Carro extends Automovel{
		public function Parabrisa(){
			echo "Ligar";
		}
	}
	class Moto extends Automovel{
		public function Empinar(){
			echo "Empinou";
		}
	}
$obj = new Carro();
$obj->cor = "Vermelho";
$obj->modelo = "Chevet";
$obj->ano = "2020";
echo $obj->Andar();
echo $obj->Parabrisa();
var_dump($obj);


$obj = new Moto();
$obj->cor = "Vermelho";
$obj->modelo = "Chevet";
$obj->ano = "2020";
echo $obj->Parar();
echo $obj->Empinar();
var_dump($obj);
?>