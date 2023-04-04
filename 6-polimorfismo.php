<?php

// Polimorfismo se trata basicamente de substituir/reescrever um método herdado, como foi feito na class Cavalo

class Animal {
  public function Andar() {
    echo "O animal andou!";
  }
}

class Cavalo extends Animal {
  public function Andar() {
    echo "O cavalo andou!";
  }
}

$animal = new Cavalo();
$animal->Andar();
