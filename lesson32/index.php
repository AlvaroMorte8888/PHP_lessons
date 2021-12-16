<?php

echo '<h1>JSON-формат</h1>';

$arr = [
  'fio' => 'Иванов Степан',
  'age' => '25',
  'vk_url' => 'https://vk.com/id11111',
  'learn' => ['PHP', 'CSS', 'HTML']
];

echo json_encode($arr, JSON_UNESCAPED_UNICODE |JSON_UNESCAPED_SLASHES) . "<br>";

$json = '{"people":"Сидоров Никита","address":"Ленина 22Б","mob":["0636638205","0978367265"]}';

$arr2 = json_decode($json, true);

echo "<pre>";
print_r($arr2);
echo "</pre>";