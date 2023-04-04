<?php
// Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar códigos ou comportamentos generalizados

class Veiculo {
  public $modelo;
  public $cor;
  public $ano;

  public function Andar() {
    echo "Andou!";
  }

  public function Parar() {
    echo "Parou!";
  }
}

class Carro extends Veiculo {
}

class Moto extends Veiculo {
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
var_dump($carro);

echo "<br><br>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Branca";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
var_dump($moto);
