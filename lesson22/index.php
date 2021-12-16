<?php

//Функции


function getSum($num1, $num2) { // вложеное в функцию , называется параметром функции
  $sum  = $num1 + $num2;
  return $sum;

}

echo getSum(11, 22) . "<br>"; // здесь то что в скобках, называется Аргументами функции

$aa = 123;
$bb = 321;

echo getSum($aa, $bb) . "<br>";




























?>