<?php

$number  = 11;
$var = 2;



echo $number ** $var;

echo 11 ** 0.5;

//Оператор Инкримента  ++ 
//Оператов Декримента  --

echo $var . "<br>";
++$var; //- префиксный инкримент!!
$var++; // - постфиксный инкримент!!
echo $var . "<br>";


$var1 = 1;
$var2 = 11;
// Префиксная форма

echo ++$var1 . "<br>"; 

// Постфиксная форма

echo $var2++ . "<br>";
echo $var2;

?>