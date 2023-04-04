<?php

class Pessoa {
  // Criando constante
  const nome = "Ricardo";

  public function exibirNome() {
    // Referenciando essa constante.
    echo self::nome . "<hr>";
  }
}

class Ricardo extends Pessoa {
  const nome = "Costa";

  public function exibirNome() {
    // Aqui será exibido "Costa", pois o self faz referência ao escopo da classe em que está, nesse caso, a class Ricardo.
    echo self::nome . "<hr>";

    // Caso queira referenciar uma constante da classe pai, basta usar parent
    echo parent::nome . "<hr>";
  }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

$ricardo = new Ricardo();
$ricardo->exibirNome();
