<?php

interface Crud {
  public function create();
  public function read();
  public function update();
  public function delete();
}

// Ao implementar uma interface em uma classe, ela obrigatóriamente tem que declarar todos os métodos contidos na interface
class Noticias implements Crud {
  public function create() {
    // Lógica para criar uma notícia
  }
  public function read() {
    // Lógica para ler uma notícia
  }
  public function update() {
    // Lógica para atualizar uma notícia
  }
  public function delete() {
    // Lógica para deletar uma notícia
  }
}
