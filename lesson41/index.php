<?php

// Методы 

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











class Hi {
  public static function hello() { // - static  ускоряет обработку в 2 раза
    return 'Hello anybody';
  }

  public function by() {
    return 'By';
  }
}

// echo Hi::hello() . "<br>";
// echo Hi::by();

// Ключевое слово self

class Page {
  static $main = 'content' . "<br>";
  
  public static function header() {
    return "header<br>";
  }
  
  public static function footer() {
    return "footer<br>";
  }

  public static function getPage() {
    echo    self::header() . 
            self::$main . 
            self::footer();
  }
}

Page::getPage();