<?php

require_once __DIR__ . "/AppleTree.php";
require_once __DIR__ . "/PearTree.php";

class Garden {

    private $gardenTrees = [];

    public function __construct() {
        for ($i = 0; $i <= 2; $i++) { // инициализируем 10 яблонь 
            $this->addTree( new AppleTree() );
        }

        for ($i = 0; $i <= 3; $i++) { // инициализируем 15 груш 
            $this->addTree( new PearTree() );
        }
    }

    public function addTree($tree) { // метод добавляет деревья в сад;
        $this->gardenTrees[] = $tree;
    }

    public function takeAllProducts() { // метод собирает плоды со всех деревьев, добавленных в сад;
        $fruitsMap = [];

        // echo 555;
        // file_put_contents('testCount.txt', var_export( count($this->gardenTrees) ), true);

        for ($i = 0; $i < count($this->gardenTrees); $i++) { 
            $list = $this->gardenTrees;
            $tree = $list[$i];
            
            $products = $tree->returnProducts();
            // file_put_contents('testList.txt', var_export($list, true));

            $type = $tree->__toString();
            if (array_key_exists($type , $fruitsMap)) { // если ключ с именем объекта уже есть в мапе , добавляем к знаеченям все собранные продукты 
                for ($i = 0; $i < count($products); $i++) {
                    $value = $fruitsMap[$type];
                    $value[] = $products[$i];
                }
            } else {
                $fruitsMap[$type] = $products;
            }

        }

        foreach ($fruitsMap as $treenName => $productsArr) { // вывожу в кончоль количество плодов для каждого дерева
            echo "from {$treenName}s : -> " .  count($productsArr) . " fruits\n\n";
        }

        file_put_contents('FruitsMap.txt', var_export($fruitsMap, true)); // мапа со всеми плодами 
    }


}