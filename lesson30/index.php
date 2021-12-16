<?php

$str = 'name,firstname,mobile,email';

$new_arr = explode(',', $str); // - explode разбивает нашу строку на массив

echo '<pre>';
print_r($new_arr);
echo '</pre>';


$new_str = implode(';', $new_arr); // implode - соединяет массив в строку
echo $new_str;

// Сериализация обьектов и массивов

//serialize(value)
//unserialize(str)

$num = [11, 22, 33];
$str = serialize($num);
echo $str . "<br>";


$arr = unserialize($str);
echo '<pre>';
print_r($arr);
echo '</pre>';













?>