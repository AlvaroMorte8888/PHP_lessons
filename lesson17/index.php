<?php

// Цикл do while и for

$i = 0;

do {
  echo "$i <br>";
} while (++$i <= 10);

for ($i = 0; $i <= 20; $i++) { 
  echo "$i <br>";
}

$x = 0;    
$y = 100; 

for($i = 0; $i <= 10; $i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x = $y;       
    $y = $z;     
}   

//Число Фибоначчи















