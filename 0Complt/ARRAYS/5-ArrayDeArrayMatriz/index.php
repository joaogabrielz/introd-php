<?php

  $arr = [
    [1, 2, 3],
    [4, 5, 6]
  ];

  print_r($arr);
  echo "<br>";

  echo $arr[0][2] . "<br>"; // primairo array ultimo elemento
  echo $arr[1][0] . "<br>";  // segundo array, posicao inicial 0

  echo 'tamanho array de array : ' . count($arr);
?>