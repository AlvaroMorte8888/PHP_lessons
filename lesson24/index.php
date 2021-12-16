<?php

// Глобальные переменные

function getSum() {
  global $var;
  $var = 2;                  // Локальная переменная
  return $var;
}


$var = 10;                    // Внешняя переменная

echo getSum() . "<br>";
echo $var . "<hr";


// статические переменнык

function calculator() {
  static $start = 0;
  return ++$start;
}
echo calculator();
echo calculator();
echo calculator() . "<hr>";

// Возврат функцией массивоа

function myFrends() {
  $kate = "Kate";
  $dima = "Dima";
  $kostya = "Kostya";

  return [$kate, $dima , $kostya];
}

echo "<pre>";
print_r(myFrends());
echo "<pre>";