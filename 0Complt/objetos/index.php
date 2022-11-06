<?php

class Pessoa {

  function falar() {
    echo 'olá pessoa';
  }
}

$matheus = new Pessoa();

$matheus->nome = "Mathe";

echo $matheus->nome;
echo "<br>";
echo $matheus->falar();