<?php
namespace Garden\Test;

use Garden\AppleTree;
use Garden\Apple;

use PHPUnit\Framework\TestCase;

class AppleTreeTest extends TestCase {

    public function testMethodReturnProducts()
    {
        $appleTree = new AppleTree();
        $productList = $appleTree->returnProducts();

        $this->assertThat(count($productList), $this->logicalAnd(
            $this->isType('int'), 
            $this->greaterThan(39),
            $this->lessThan(51)
        ));

        $apple = new Apple();

        $this->assertSame(($productList[0])->getFruitName(), $apple->getFruitName());
    }

    public function testClassConstructor()
    {
        $appleTree = new AppleTree();
        $apple = new Apple();

        $this->assertSame(($appleTree->getProductType())->getFruitName(), $apple->getFruitName());
    }

}