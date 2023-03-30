<?php
//Boa prática: Criar nome da class com primeira letra maiúscula
class Pessoa
{
  //Atributos
  public $nome;
  public $idade;

  //Metodos
  public function Falar()
  {
    echo $this->nome . ", de " . $this->idade . " anos, acabou de falar!";;
  }
}

$ricardo = new Pessoa();
$ricardo->nome = "Ricardo Costa da Silva";
$ricardo->idade = 17;
$ricardo->Falar();
