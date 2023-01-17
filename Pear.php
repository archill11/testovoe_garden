<?php

require_once __DIR__ . "/Fruit.php";

class Pear extends Fruit {

    public $fruitName = "pear";

    public $weight;

    public function __construct() {
        $this->weight = mt_rand(130, 170);
    }
    
}