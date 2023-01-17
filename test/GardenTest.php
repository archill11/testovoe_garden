<?php
namespace Garden\Test;

use Garden\Garden;
use Garden\AppleTree;
use Garden\PearTree;
use Garden\Apple;
use Garden\Pear;

use PHPUnit\Framework\TestCase;

class GardenTest extends TestCase {

    public function testClassConstructor()
    {
        $garden = new Garden();
        $gardenTrees = $garden->getGardenTrees();

        $this->assertThat(count($gardenTrees), $this->logicalAnd(
            $this->isType('int'),
        ));

        $this->assertSame(count($gardenTrees), 25);

        $appleTree = new AppleTree();
        $pearTree = new PearTree();

        $this->assertContains(
            ($gardenTrees[0])->getProductType()->getFruitName(),
            array($appleTree->getProductType()->getFruitName(), $pearTree->getProductType()->getFruitName())
        );
    }

    public function testMethodAddTree()
    {
        $garden = new Garden();
        $gardenTrees = $garden->getGardenTrees();
        $countGardenTrees = count($gardenTrees);

        $appleTree = new AppleTree();
        $garden->addTree($appleTree );

        $this->assertSame(count($garden->getGardenTrees()), $countGardenTrees + 1);

        $gardenTreesAfterAdd = $garden->getGardenTrees();

        $this->assertSame(end($gardenTreesAfterAdd)->getProductType()->getFruitName(), $appleTree->getProductType()->getFruitName());
    }

}