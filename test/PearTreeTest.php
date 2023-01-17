<?php
namespace Garden\Test;

use Garden\PearTree;
use Garden\Pear;

use PHPUnit\Framework\TestCase;

class PearTreeTest extends TestCase {

    public function testMethodReturnProducts()
    {
        $pearTree = new PearTree();
        $productList = $pearTree->returnProducts();

        $this->assertThat(count($productList), $this->logicalAnd(
            $this->isType('int'), 
            $this->greaterThan(-1),
            $this->lessThan(21)
        ));

        $pear = new Pear();

        if (count($productList) > 0) {
            $this->assertSame(($productList[0])->getFruitName(), $pear->getFruitName());
        }

    }

    public function testClassConstructor()
    {
        $pearTree = new PearTree();
        $pear = new Pear();

        $this->assertSame(($pearTree->getProductType())->getFruitName(), $pear->getFruitName());
    }

}