<?php

echo "normal var :<br>";

function test() {

  $a = 0;
  $a++;

  echo "$a <br>";
}

test();
test();
test();

echo "with static var: <br>";


function test2() { // escopo mantido 

  static $a = 0;
  $a++;

  echo "$a <br>";
}

test2();
test2();
test2();