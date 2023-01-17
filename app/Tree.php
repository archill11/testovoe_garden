<?php

abstract class Tree {

    private $id;

    private $productType;
    
    abstract public function returnProducts();

    public function __construct() {
        $this->id = uniqid();
    }

}