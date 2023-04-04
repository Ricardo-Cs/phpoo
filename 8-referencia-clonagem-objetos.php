<?php

class Pessoa {
  public $idade;

  // É iniciado quando a palavra chave clone é utilizada
  public function __clone() {
    echo "Clonagem de objetos ";
  }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// Sem o clone, o echo retornaria 35, resolvemos isso fazendo com que pessoa2 pegue apenas um clone da classe Pessoa
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
