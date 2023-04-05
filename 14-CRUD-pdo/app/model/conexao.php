<?php

namespace app\model;

class Conexao {
  private static $instance;

  private static function getConn() {
    if (!isset(self::$instance)) {
      self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf-8', 'root', '');
    } else {
      return self::$instance;
    }
  }
}
