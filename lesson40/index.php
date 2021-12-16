<?php

// Методы - это функция которая находится внутри класса!!

class Hi {
  public function hello() {
    return 'Hello anybody';
  }

  public function by() {
    return 'By';
  }
}

$obj = new Hi;

echo $obj->hello() . "<br>";
echo $obj->by() . "<br>";


class Family {
  private $boy;
  private $girl;

  public function setNameBoy($boy) {
    $this->boy  = $boy;
  }

  public function setNameGirl($girl) {
    $this->girl  = $girl;
  }

  public function getNameBoy() {
    return $this->boy;
  }

  public function getNameGirl() {
    return $this->girl;
  }

  public function friend() {
    return $this->getNameBoy() . " и " . $this->getNameGirl() . " Семья";
  }
}

$family = new Family;

$family->setNameBoy('Dima');
$family->setNameGirl('Valeria');

echo $family->friend();