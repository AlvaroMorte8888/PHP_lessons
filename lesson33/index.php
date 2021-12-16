<?php

// Передача параметров методом GET

echo $_GET ['name'] . "<br>";
echo $_GET ['age'];

http://localhost:4000/?name=Dima&age=25

echo '<pre>';
print_r($_GET);
echo '<pre>';



echo "<a href='test.php?text=" . urlencode('Привет PHP!') . "'>Ссылка</a>";


//parse_url(url)

$url = "https://user:admin@site.com/page/index.php?id=12&alue=val#author";


$url = parse_url($url);
echo '<pre>';
print_r($url);
echo '<pre>';





?>