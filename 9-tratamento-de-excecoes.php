<?php

class NewsLetter {
  public function cadastrarEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      throw new Exception("Este email é inválido", 1);
    else
      echo "Email cadastrado com sucesso!";
  }
}

$newsletter = new NewsLetter;

try {
  $newsletter->cadastrarEmail("contato@");
} catch (Exception $e) {
  echo "Mensagem da exceção: " . $e->getMessage() . "<br>";
  echo "Código da exceção: " . $e->getCode() . "<br>";
  echo "Linha da exceção: " . $e->getLine() . "<br>";
  echo "Arquivo da exceção: " . $e->getFile() . "<br>";
}
