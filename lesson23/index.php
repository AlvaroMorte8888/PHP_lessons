<?php            

// Параметры функции

function getResult($var) {
  $var = $var * 2;
  return $var;
}

$new = 10;
echo getResult($new) . "<br>";
echo $new;


////////////////////////////////////////////////////////////////////////////////////////////

function getResult(&$var) { // - & это амперсант
  $var = $var * 2;
  return $var;
}

$new1  = 20;
echo getResult($new1) . "<br>";
echo $new1;



//////////////////////////////////////////////////////////////////////////////////////////////////////

// Необязательные параметры
function getResult($var1 = 2, $var2 = 4) {
  $var = $var1 * $var2;
  return $var;
}

echo getResult() . "<br>";

echo getResult(5 , 5) . "<br>";


////////////////////////////////////////////////////////////////////////////////////////////////////////

// переменное (изменяемое) количество параметров

function myList(...$items) { // - при такой функции все внутри восприневаеся как массив
  foreach ($items as $v) {
    echo $v . "<br>";
  }
}

myList('Nick', "Mick", "Sara", "Dima");

$some = ['PHP', 'RUBY', 'JS', 'HTML', 'CSS'];
myList(...$some);


