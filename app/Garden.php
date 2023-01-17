<?php
namespace Garden;

require_once __DIR__ . "/AppleTree.php";
require_once __DIR__ . "/PearTree.php";

class Garden {

    private array $gardenTrees = [];

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) { // инициализируем 10 яблонь 
            $this->addTree( new AppleTree() );
        }

        for ($i = 0; $i < 15; $i++) { // инициализируем 15 груш 
            $this->addTree( new PearTree() );
        }
    }

    public function addTree(Tree $tree): void // метод добавляет деревья в сад;
    {
        $this->gardenTrees[] = $tree;
    }

    public function takeAllProducts(): void // метод собирает плоды со всех деревьев, добавленных в сад;
    {
        $fruitsMap = [];

        for ($i = 0; $i < count($this->gardenTrees); $i++) { 
            $list = $this->gardenTrees; // список всех деревьев в саду
            $tree = $list[$i];
            
            $products = $tree->returnProducts();

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
            $totalWeight = 0;

            foreach ($productsArr as $product) { //считаю общий вес фруктов одного вида
                $totalWeight += $product->getWeight();
            }

            echo "from {$treenName}s : -> " .  count($productsArr) . " fruits with total weight: {$totalWeight}\n\n";
        }

        file_put_contents('FruitsMap.txt', var_export($fruitsMap, true)); // мапа со всеми плодами 
    }

    public function getGardenTrees(): array
    {
        return $this->gardenTrees;
    }


}