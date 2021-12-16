<!-- polimorfismo é só reescrever algum metodo que foi herdada -->
<?php
	class Animal{
		public function Andar(){
		echo "Animal andando";
	}
	public function Correr(){
		echo "Animal correu";
	}
	}
	class Cavalo extends Animal
	{
		
	public function Andar(){
		$this->Correr();
	}
}
$obj = new Cavalo;
$obj->Andar();
$obj->Correr();

?>