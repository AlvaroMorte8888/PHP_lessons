<?php
// Массивы
$arr = [1, 2, 3];

list($one, $two, $three) = $arr;

echo $two . "<br>";
echo $arr[1];
echo $three . "<hr>";

// Обход массива
for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i] . "<br>";
}

$andrei = [
	'name' => 'Andrei',
	'age' => 31,
	'weight' => 73
];

foreach ($andrei as $key => $value) {
 	echo $key . "-" . $value . "<br>";
 }

 foreach ($andrei as $val) {
 	echo $val . "<br>";
 }

foreach ($arr as $value) {
	echo $value . "<br>";
}
?>