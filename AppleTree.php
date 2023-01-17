<?php

require_once __DIR__ . "/Apple.php";
require_once __DIR__ . "/Tree.php";

class AppleTree extends Tree {

    public $productType = "apple"; //(new Apple())->$fruitName

    public function returnProducts() {
        $count = mt_rand(4, 5); // количесво фруктов которое вернет дерево

        $productList = array();

        for ($i = 0; $i <= $count; $i++) {
            $productList[$i] = new Apple();
        }

        return $productList;
    }

    public function __toString() { // перезаписываю toString для того чтобы можно было положить класс в качестве ключа мапы
        return "AppleTree";
    }

}