<?php

// дерево документов
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

// параметры относительно типа документа
echo $_SERVER['HTTP_ACCEPT'] . "<br>";

// предпочтения клиента при выборе языка
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";

// получение хоста
echo $_SERVER['HTTP_HOST'] . "<br>";

//адрес с которого пришел к нам посититель
echo $_SERVER['HTTP_REFERER'] . "<br>";

// тип браузера и ОС 
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

// IP адрес клиента
echo $_SERVER['REMOTE_ADDR'] . "<br>";

// абсолютный путь исполняемого файла
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";

// храниться имя сервера / домен
echo $_SERVER['SERVER_NAME'] . "<br>";

// считывает метод запроса
echo $_SERVER['REQUEST_METHOD'] . "<br>";

// параметры с запроса страницы
echo $_SERVER['QUERY_STRING'] . "<br>";

// содержит имя скрипта включая параметры
echo $_SERVER['REQUEST_URI'] . "<hr>";


echo "<pre>";
print_r($_SERVER);
echo "<pre>";