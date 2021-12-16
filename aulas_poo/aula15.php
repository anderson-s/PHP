<?php

	class Produtos{
		public $nome;
		public $valor;

		function __construct($nome, $valor){
			$this->nome = $nome;
			$this->valor = $valor;
		}
	}

	class Carrinho{
		public $produtos;

		public function adicionar(Produtos $produto){
			$this->produtos[] = $produto;
		}
		public function exibir(){
			foreach ($this->produtos as $produto) {
				echo $produto->nome."<br>";
				echo $produto->valor."<br>";
			}
		}
	}

$obj = new Produtos("Celular", "900");
$obj2 = new Produtos("Notebook", "1500");
$teste = new Carrinho;
$teste->adicionar($obj);
$teste->adicionar($obj2);
echo $teste->exibir();


?>