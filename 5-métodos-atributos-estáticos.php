<?php

class Login {
  // cria um atributo estático
  public static $user;

  // cria um método estático
  public static function verificaLogin() {
    // Com métodos esstáticos,  não se utuliza o $this, mas sim o self::
    echo "O usuário " . self::$user . " está logado!";
  }
}

// Com métodos estáticos, não é necessário instanciar a classe com $login = new Login
Login::$user = "admin";
Login::verificaLogin();
