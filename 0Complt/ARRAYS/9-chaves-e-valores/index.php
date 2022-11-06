<?php

  $carro =[
    "Marca" => "joao",
    "motor" => "2.4",
    "teto_solar" => true,
    'portas' => 4,
  ];

  echo "chaves: ";
  $chaves = array_keys($carro);
  print_r($chaves);

  echo "<br>";


  echo "valores: ";
  $valores = array_values($carro);
  print_r($valores);

  echo "<br>";
?>