<?php
// clone*
// construct*
// invoke
// tostring*
// get*
// set*

class Pessoa {
  private $dados = array();

  public function __set($nome, $valor) {
    $this->dados[$nome] = $valor;
  }

  public function __get($nome) {
    return $this->dados[$nome];
  }

  // Função chamada quando tentamos imprimir o objeto.(Nesse exemplo, o objeto pessoa)
  public function __toString() {
    return "Tentei imprimir o objeto <br>";
  }

  // Chamado quando tentamos usar o objeto como uma função
  public function __invoke() {
    return "Tentei usar o objeto como função <br>";
  }
}
$pessoa = new Pessoa();
$pessoa->nome = "Danilo"; // Testando o get e set
echo $pessoa->nome;

echo $pessoa; //Para ativar o __tostring
echo $pessoa(); //Para ativar o __invoke
