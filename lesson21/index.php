<?php

// Разные полезные возможности с массивами
// Слияние массивов

//$arr = ['my', 'text'];
//$arr1 = [ 2 => 'our', 3 => 'some'];
//$sum = $arr + $arr1;

// Второй способ слияния массива
$arr = ['my', 'text'];
$arr1 = [ 2 => 'our', 3 => 'some'];
$sum = array_merge($arr, $arr1);


echo "<pre>";
print_r($sum);
echo "</pre>" . "<br>";



// Cравнение массивов
$a1 = [1, 3, 5, 7, 9];
$a2 = [1, 3, 5, 7, 9];
$a3 = [1, 3, 5, 7];
$a4 = [1, 3, 4, 7, 9];

if ($a1 == $a2) {
  echo "Массивы у нас равны <br>";
}else{
  echo "Массивы не равны <br>";
}

if ($a1 == $a3) {
  echo "Массивы у нас равны <br>";
}else{
  echo "Массивы не равны <br>";
}



// ===
$arr11 = [0 => 1, 1 => 2];
$arr22 = [0 => 1, 1 => '2'];

if ($arr11 === $arr22) {
  echo "Массивы у нас равны <br>";
}else{
  echo "Массивы не равны <br>";
}



// Существование массива
// isset()
for ($i=0; $i <= 6; $i++) { 
  if(isset($arr11[$i])) {
    echo " Елемент массива \$arr11[$i] существует <br>";
  }else{
    echo " Елемент массива \$arr11[$i] не существует <br>";  
  }
}



// is_array()
if (is_array($arr22)) {
  echo " переменная \$arr11 является массивом" . "<br>";
}else{
  echo " переменная \$arr22 не является массивом" . "<br>";
}




// in_array() - значение массива на совпадение
if (in_array(7, $a2)) {
  echo "цифра 7 существет внутри массива";
}else{
  echo "цифра 7 не существет внутри массива";
}

//array_key_exists(key, array)

// Удаление елементов массива unset()
// unset($a2) - Удаляет весь массив

//unset($a2);

echo "<pre>";
print_r($a2);
echo "</pre>";


// Удаляет определенный елемент в массиве
unset($a2[2]);

echo "<pre>";
print_r($a2);
echo "</pre>";
