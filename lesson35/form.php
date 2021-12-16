<?php

// echo $_FILES['filename']['size'] . "<br>"; // размер будет в байтах
// echo $_FILES['filename']['name'] . "<br>"; // выводим имя файла
// echo $_FILES['filename']['tmp_name'] . "<br>"; // выводим путь файла

if (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' . $_FILES['filename']['name'])) {
  if ($_FILES['filename']['size'] > 2 * 1024 * 1024) {
    exit('Размер файла привышает 2мб');
  }else{
    echo 'Файл скопирован на сервер'. "<br>";
    echo 'Характеристики нашего файла :'. "<br>";
    echo 'Имя файла : ';
    echo $_FILES['filename']['name'] . "<br>";
    echo 'Размр файла : ';
    echo $_FILES['filename']['size'] . "<br>";
    echo 'Тип файла : ';
    echo $_FILES['filename']['type'] . "<br>";
  }
}  