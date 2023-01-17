<?php
namespace Garden;

abstract class Tree {

    private string $id;

    private $productType;
    
    abstract public function returnProducts(): array;

    public function __construct()
    {
        $this->id = uniqid();
    }

}