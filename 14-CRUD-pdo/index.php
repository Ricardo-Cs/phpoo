<?php

use app\model\Produto;

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto;
$produto->setId(1);
$produto->setNome('PS5');
$produto->setDescricao('VideoGame');

$produtoDao = new \app\model\produtoDao;

// $produtoDao->create($produto);
// $produtoDao->update($produto);
// $produtoDao->read();
// $produtoDao->delete();

// Imprime os valores do banco
foreach ($produtoDao->read() as $produto) {
  echo $produto['nome'] . "<br>" . $produto['descricao'] . "<hr>";
}
