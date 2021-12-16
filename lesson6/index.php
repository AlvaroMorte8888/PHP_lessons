<?php

class SomePeople {
  public $age; 
  public $name;
  public static $people = "1"; //статическая переменная класса.
}


//echo SomePeople::$people;
$tim = new SomePeople();
$time->age = 31;

echo $time->age; 

$bob = $time;
echo $bob->age; 

$fir = $sec = 3;
$fir = 4;

//echo $fir;
//echo $sec;

?>
