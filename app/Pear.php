<?php
namespace Garden;

require_once __DIR__ . "/Fruit.php";

class Pear extends Fruit {

    private string $fruitName = "pear";

    private int $weight;

    public function __construct()
    {
        $this->weight = mt_rand(130, 170);
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getFruitName(): string
    {
        return $this->fruitName;
    }
    
}