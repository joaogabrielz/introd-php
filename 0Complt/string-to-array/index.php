<?php
  $frase = "Testando o explodee";

  $fraseArray = explode(" ", $frase);

  print_r($fraseArray);
  echo "<br>";

  $fraseB = "Carro,aviao,navio,barco";
  $fraseBtoArray = explode(",",$fraseB);
  
  print_r($fraseBtoArray);
  echo "<br>";

  for($i=0; $i < count($fraseBtoArray); $i++) { 
    echo "$fraseBtoArray[$i] <br>";
  }

?>