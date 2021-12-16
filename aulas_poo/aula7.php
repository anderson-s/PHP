<?php
	class Pessoa{
		const nome = "Andeson";
		const sexo = "masculino";
		const cor = "Negro";
	
	public function Exibir(){
		echo self::nome;
		echo self::sexo;
		echo self::cor;
	}
	}
	class Nome extends Pessoa
	{
		const nome = "Silva";
		const sexo = "braco";
		const cor = "masculino";
		public function Exibir(){
		echo parent::nome;
		echo self::sexo;
		echo self::cor;
	}
	}
$obj = new Nome();
$obj->Exibir();
?>
