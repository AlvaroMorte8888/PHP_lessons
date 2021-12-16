<?php
// Вложеные функции

$arr = [1, 2, 3];

function box() {
  
  function inn() {
    echo "TEST";
  }
  inn();
  print_r($arr);
}


// Динамическое имя функции

function hello() {
  return "HELLO";
}

$var = hello();
//hello();
echo $var;


// Анонимные функции

$some = function(...$arr) {
  foreach ($arr as $vel) {
    echo $vel . "<br>";
  }
};
$some(12, 34, 53 ,123123);


$var2 = function() {
  echo "Запуск анонимной функции";
};

$var2();
?>