<?php
/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou
*/

use Veiculo as GlobalVeiculo;

class Veiculo {
  protected $modelo;
  public $cor;
  public $ano;

  public function Andar() {
    echo "Andou!";
  }

  public function Parar() {
    echo "Parou!";
  }

  public function setModelo($m) {
    $this->modelo = $m;
  }

  public function getModelo() {
    return $this->modelo;
  }
}

class Carro extends Veiculo {
}

class Moto extends Veiculo {
}

$veiculo = new Veiculo();
$veiculo->setModelo("HILUX");
echo $veiculo->getModelo(); //Também é possível fazer isso com os herdeiros, como Carro e Moto.
