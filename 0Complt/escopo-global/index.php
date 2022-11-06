<?php

$test = "wow";

if(5 > 2){
  echo "myvar: $test <br>";
}

// function funcao() {

//   echo "$test local func <br>"; // $test doesnt exist in this scope
// }
// funcao();


function testGlob() {

  global $test;

  echo "$test global f <br>";
}

testGlob();