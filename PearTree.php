<?php

require_once __DIR__ . "/Pear.php";
require_once __DIR__ . "/Tree.php";

class PearTree extends Tree {

    public $productType = "pear"; //new Pear();

    public function returnProducts() {
        $count = mt_rand(0, 2); // количесво фруктов которое вернет дерево 

        $productList = array();

        for ($i = 0; $i <= $count; $i++) {
            $productList[$i] = new Pear();
        }

        return $productList;
    }

    public function __toString() { // перезаписываю toString для того чтобы можно было положить класс в качестве ключа мапы
        return "PearTree";
    }

}