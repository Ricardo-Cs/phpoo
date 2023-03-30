<?php

class Login
{
  public $email;
  public $senha;
  public $nome;

  // Esse método é inicializado sempre que uma classe é intânciada, por exemplo: $logar = new Login();
  public function __construct($email, $senha, $nome)
  {
    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);
  }

  public function geNome()
  {
    return $this->nome;
  }

  // Get vai pegar o valor da senha ou email
  public function getEmail()
  {
    return $this->email;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  // Set vai setar esse valor
  public function setEmail($e)
  {
    // Uma das vantagens de se usar o set para setar valores: A possibilidade de filtrar esses valores antes.
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
  }

  public function setSenha($s)
  {
    $this->senha = $s;
  }

  public function Logar()
  {
    if ($this->email == "teste@teste.com" and $this->senha == "123456")
      echo "Logado com sucesso!";
    else
      echo "Dados incorretos!";
  }
}

$logar = new Login("teste@teste.com", "123456", "Ricardo Costa");
$logar->Logar();
echo "<br>";
