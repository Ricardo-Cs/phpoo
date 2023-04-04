<?php
// Relação entre objetos: Associação

class Pedido {
  public $numero;
  public $cliente;
}

class Cliente {
  public $nome;
  public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Ricardo Costa";
$cliente->endereco = "Rua xxx, numero: 111";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
  'numero' => $pedido->numero,
  'nome' => $pedido->cliente->nome,
  'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);
