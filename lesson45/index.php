<?php

// Перезагрузка методов

class Base {
    public function start() {
        echo "я метод родительского класса";
    }
}

class Second extends Base {
    public function start() {
    parent::start() . "<br>";
        echo "Я метод дочернего класса";
    }
}
$obj = new Second();

$obj->start();
