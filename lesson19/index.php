<?php
// Массивы
// Ассоциативные и индексные массивы

 $arr = ['name' => 'Dima', 'age' => 25];

 $arr1 = ['Dima', 25];

 echo "<pre>";
 print_r($arr);
 echo "</pre>";


 echo "<pre>";
 print_r($arr1);
 echo "</pre>";


// Многомерные массивы


$people = [
  'Ivan' => ['age' => 21, 'weight' => 90],
  'Oleg' => ['age' => 30, 'weight' => 76],
  'Nika' => ['age' => 18, 'weight' => 59]
  
];

echo $people['Oleg']['weight'];

echo "<pre>";
print_r($people['Oleg']);
echo "</pre>";

// Интерполяция елемента массива в строчку

$arr3 ['time'] = 9;

echo "Сейчас у нас $arr3[time] утра" . "<br>";

echo "Олег имеет вес в {$people['Oleg']['weight']} кг.";








 ?>