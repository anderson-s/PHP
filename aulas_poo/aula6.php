<?php
     abstract class Banco{
		protected $saldo;
		protected $limiteSaque;
		protected $juros;
		

		public function setSaldo($s){
			$this->saldo = $s;
		}
		public function getSaldo(){
			return $this->saldo;
		}

		abstract protected function Sacar($s);
		abstract protected function Depositar($d);
}

	class Itau extends Banco{

		public function Sacar($s){
			$this->saldo -= $s;
			echo"<p> Voce sacou: ".$s;
		
		}
		public function Depositar($d){
			$this->saldo += $d;
				echo"<p> Voce depositou: ".$d;
		}	
}

$obj = new Itau();
$obj->setSaldo(1000);
echo $obj->getSaldo();
$obj->Sacar(200);
echo $obj->getSaldo();
$obj->Depositar(100);
?>