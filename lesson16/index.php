<?php
// Цикл while

//while () { // true, false
  # code...
//}

$i = 10;

while ($i <= 20) {
  echo "$i<br>";
  $i++;
}

while (true) { // true - цикл будет безконечным
  $i++;
  // здесь будет условие выхода из цикла
  if ($i > 50) break;
  echo "$i <br>";
}





?>