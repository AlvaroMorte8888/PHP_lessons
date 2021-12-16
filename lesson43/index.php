<?php

// Метод аксессоры __get() __set()

class Accessor {
    private $one = [];

    public function __get($key) {
        if (array_key_exists($key, $this->one)) {
            return $this->one[$key];
        }else{
            return null;
        }
    }

    public function __set($key, $value) {
        $this->one[$key] = $value;
    }
}

$obj = new Accessor();

$obj->text = 'Test text <br>';
$obj->name = 'Dima<br>';
$obj->age = '25<br>';

echo "<pre>";
print_r($obj);
echo "<pre>";