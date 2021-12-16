<?php

// ООП наследование

class Base {
    protected $secret;
    public $one;
    public function __construct($secret) {
        $this->secret = $secret;
    }

    private $text; // не доступна при наследовании
    public function printer() {
        echo $this->one;
    }
    private function exe() {
        echo 'asadasd';
    }
}

class NewClass extends Base {
    public $two;

    public function __construct($secret) {
        $this->secret = $secret;
    }

    public function by() {
        echo $this->two;
    }
}

//$obj = new NewClass;
//$obj->one = 'Dima';
//$obj->two = 'Valeria';
//$obj->text = 'Text';
//$obj->exe();  // выдаст ошибку
//
//$obj->printer();
//echo '<br>';
//$obj->by();

$obj = new NewClass(11);

echo "<pre>";
print_r($obj);
echo "<pre>";