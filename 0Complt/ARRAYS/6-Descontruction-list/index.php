<?php

  $pessoa = ["Joao", 23, "progamador", "preto"];
  print_r($pessoa);
  echo "<br>";


  list($nome, $idade, $profissao, $corPreferida) = $pessoa;

  echo "nome $nome <br>";
  echo "idade $idade <br>";
  echo "profissao $profissao <br>";
  echo "cor preferida $corPreferida <br>";

?>