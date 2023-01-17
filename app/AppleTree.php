<?php
namespace Garden;

require_once __DIR__ . "/Apple.php";
require_once __DIR__ . "/Tree.php";

class AppleTree extends Tree {

    private Apple $productType;

    public function __construct()
    {
        $this->productType = new Apple();
    }

    public function returnProducts(): array
    {
        $count = mt_rand(40, 50); // количесво фруктов которое вернет дерево

        $productList = array();

        for ($i = 0; $i < $count; $i++) {
            $productList[$i] = new Apple();
        }

        return $productList;
    }

    public function __toString() // перезаписываю toString для того чтобы можно было положить класс в качестве ключа мапы
    {
        return "AppleTree";
    }

    public function getProductType(): Apple
    {
        return $this->productType;
    }
}