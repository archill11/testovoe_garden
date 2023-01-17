<?php

require_once __DIR__ . "/Fruit.php";

class Apple extends Fruit {

    private $fruitName = "apple";

    private $weight;

    public function __construct() {
        $this->weight = mt_rand(150, 180);
    }

    public function getWeight() {
        return $this->weight;
    }
    
}