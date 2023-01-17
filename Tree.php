<?php

abstract class Tree {

    public $id;

    public $productType;
    
    abstract public function returnProducts();

    public function __construct() {
        $this->id = uniqid();
    }

}