<?php
namespace Garden\Test;

use Garden\Apple;

use PHPUnit\Framework\TestCase;

class AppleTest extends TestCase {

    public function testClassConstructor()
    {
        $pear = new Apple();

        $this->assertThat($pear->getWeight(), $this->logicalAnd(
            $this->isType('int'), 
            $this->greaterThan(149),
            $this->lessThan(181)
        ));

        $this->assertSame("apple", $pear->getFruitName());
    }

}