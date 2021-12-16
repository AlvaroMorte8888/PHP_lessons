<?php


class Consted {
  private $y;
  private $x;

  public function __construct($x) {
    echo "Отработал конструктор (метод)" . "<br>";
    $this->y = 22;
    $this->x = $x;
  }

  public function __destruct() {
      echo "Отработал деструктор (метод)" . "<br>";
      $this->y = 0;
  }
  public function getY(){
      return $this->y;
  }

    public function getX(){
        return $this->x;
    }
}

$obj = new Consted(10);

//echo $obj->getY();
//echo $obj->getX();