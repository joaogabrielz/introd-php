<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$y = 20;

echo "<br> Apos mudanca <br>";
echo $x;
echo "<br>";
echo $y;