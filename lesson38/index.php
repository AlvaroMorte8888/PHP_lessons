<?php
session_start();
$_SESSION['name'] = 'Dima';
$_SESSION['arr'] = [1, '2', 'test'];

if (ini_get("session.use_cookies")) {   // удаляет cookie которые находятся в сессии
  $params = session_get_cookie_params();
  setcookie(session_name(),'',time() -42000,
    $params["path"], $params["domaine"],
    $params["secure"], $params["httponly"]
  );   
}

echo "Session";

echo "<pre>";
print_r($_SESSION);
echo "<pre>";
//session.save_path

//unset($_SESSION['name']); // удаление name  в сессии
//session_destroy(); // удаляет сессию но при этом данные остаются

$_SESSION = [];


echo "<pre>";
print_r($_SESSION);
echo "<pre>";
var_dump(session_destroy());