<?php

require_once __DIR__ . "/Fruit.php";

class Pear extends Fruit {

    private $fruitName = "pear";

    private $weight;

    public function __construct() {
        $this->weight = mt_rand(130, 170);
    }

    public function getWeight() {
        return $this->weight;
    }
    
}