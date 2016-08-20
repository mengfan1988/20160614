<?php

class Car {

    public $name = 'car';

    public function __clone() {
        $obj = new Car();
        $obj->name = $this->name;
    }

}

$a = new Car();
$a->name = 'new car';
$b = clone $a;
var_dump($b);
