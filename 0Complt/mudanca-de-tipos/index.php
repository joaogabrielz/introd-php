<!-- AUTO-CAST -->

<?php

echo 5/2;
echo "<br>";

if(is_float(5/2)){
  echo "é float agr <br>";
}

echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)){
  echo "é string <br>";
}

// concatendando vars

$nome = "joao";
$sobrenome = "gabriel";
$nomeComp = $nome . " " . $sobrenome;
echo $nomeComp;
echo "<br>";