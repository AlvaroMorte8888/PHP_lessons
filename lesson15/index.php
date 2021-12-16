<?php
// Переключатель swich

$someText = "okey";

switch ($someText) {
  case 'okey':
    echo 'Это выражение равно Okey-2';
    break;
  
  case 'okey':
    echo 'Это выражение равно Okey';
    break;
  
  default:
    echo 'Это выражение ничему не равно';
    break;
}



if ($someText == "okey") {
  echo 'Это выражение равно Okey-2';
}elseif ($someText == "value") {
  echo 'Это выражение равно Okey';
}else {
  echo 'Это выражение ничему не равно';
}



$num = 100;

switch (true) {
  case ($num > 0 && $num <= 50):
    echo "true";
    break;
  case ($num > 0 && $num <= 500):
    echo "true-2";
    break;
  default:
  echo "false";
    break;
}

//Оператор Goto

$nums = 1;

begin:
$nums++;
echo "$nums<br>";

if ($nums >= 22) goto finish;
goto begin;
finish:




?>