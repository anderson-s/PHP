<?php

	class Pedido{
		public $numero;
		public $cliente;
	}
	class Cliente{
		public $nome;
		public $endereco;
	}


$cliente = new Cliente;
$cliente->nome = "Silva";
$cliente->endereco = "PQP";

$pedido = new Pedido;
$pedido->numero = 777777777;
$pedido->cliente = $cliente;

 $arrayName = array(
 	'numero' => $pedido->numero,
 	'nome_cliente' => $pedido->cliente->nome,
 	'endereco_cliente' => $pedido->cliente->endereco
  );
 var_dump($arrayName);
?>