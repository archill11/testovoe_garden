<?php
namespace Garden\Test;

use Garden\Pear;

use PHPUnit\Framework\TestCase;

class PearTest extends TestCase {

    public function testClassConstructor()
    {
        $pear = new Pear();

        $this->assertThat($pear->getWeight(), $this->logicalAnd(
            $this->isType('int'), 
            $this->greaterThan(129),
            $this->lessThan(171)
        ));

        $this->assertSame("pear", $pear->getFruitName());
    }

}