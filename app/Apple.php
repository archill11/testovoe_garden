<?php
namespace Garden;

require_once __DIR__ . "/Fruit.php";

class Apple extends Fruit {

    private string $fruitName = "apple";

    private int $weight;

    public function __construct()
    {
        $this->weight = mt_rand(150, 180);
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