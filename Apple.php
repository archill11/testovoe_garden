<?php

require_once __DIR__ . "/Fruit.php";

class Apple extends Fruit {

    public $fruitName = "apple";

    public $weight;

    public function __construct() {
        $this->weight = mt_rand(150, 180);
    }
    
}