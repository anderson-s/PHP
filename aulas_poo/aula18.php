<?php 
	// class MeuSovo{
	// 	public $nome;

	// 	public function __construct($nome){
	// 		$this->nome = $nome;
	// 	}
	// 	public function getNome(){
	// 		return $this->nome;
	// 	}
	// 	public function setNome($nome){
	// 		$this->nome = $nome;
	// 	}
		
	// }

	// class Teste{
	// 	public $var;

	// 	public function __construct(){
	// 		$this->var = new MeuSovo(null);
	// 	}
	// 	public function Inserir($nome){
	// 		$this->var->setNome($nome);
	// 	}
	// 	public function Mostrar(){
	// 	 return $this->var->getNome();
	// 	}
	// }
	// $obj = new Teste();
	// $obj->Inserir("Andeson");
	// echo $obj->Mostrar();
	// var_dump($obj);

	class Teste{
		private $nome;
		private $cpf;
		public function __construct($nome, $cpf){
			$this->nome = $nome;
			$this->cpf - $cpf;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setCpf($cpf){
			$this->cpf - $cpf;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getCpf(){
			return $this->cpf;
		}
	}
	class Teste2{
		private $dados = array();

		public function __construct(){
			$this->pessoa = new Teste(null, null);
		}

		public static function Salvar($nome, $cpf){
			$this->pessoa = setNome($nome);
			$this->pessoa = setCpf($cpf);
		}
		public function Mostrar(){
		 return $this->var->getNome();
		}
	}
?>
