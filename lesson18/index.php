<?php

// Массивы

$arr = array('One', 'Two', 'Three'); //создание массива

$arr2 = [11, 22, 33];                //создание массива

echo $arr[0] . "<br>";
echo $arr2[2] . "<br>";

echo '<pre>';
print_r($arr2);
echo '</pre>';


echo count($arr); // последний елемент массива это длина - 1

echo $arr[count($arr) - 1];

// присвоение индекса элементам массива

$arr = [10 => 'Hello'];

echo '<pre>';
print_r($arr);
echo '</pre>';


// еще один метод стоздания массива

$var = "php - 7";

$arr3 = (array) $var;

echo '<pre>';
print_r($arr3);
echo '</pre>';




















?>