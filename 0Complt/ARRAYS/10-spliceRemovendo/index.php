<?php

// resgatar elementos
// remover elementos

$arr = [1, 2, 3 ,4 , 5, 6, 7, 8];
print_r($arr);

echo "<br>";

$removidos= array_splice($arr, 1, 2);
print_r($removidos);

echo "<br>";


$arr = array_splice($arr, 5, 1);
print_r($arr);

echo "<br>";
?>