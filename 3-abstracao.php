<?php

// Como essa classe serve como molde para as outras duas, podemos colocá-la como uma classe abstrata (classes abstratas não podem ser instânciadas. Como: $banco = new Banco() )
abstract class Banco {
  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  public function setSaldo($s) {
    $this->saldo = $s;
  }

  public function getSaldo() {
    return $this->saldo;
  }

  abstract protected function Sacar($s);

  abstract protected function Depositar($d);
}

class Itau extends Banco {
  // Como os métodos da classe Banco estão abstratos, é necessário declarar eles na class herdeira.
  public function Sacar($s) {
    $this->saldo -= $s;
    echo "<hr> Sacou: " . $s;
  }

  public function Depositar($d) {
    $this->saldo += $d;
    echo "<hr> Depositou: " . $d;
  }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "Saldo: " . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr>  Saldo: " . $itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: " . $itau->getSaldo();
