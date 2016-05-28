<?php

namespace Kw5\Math;

class CalcTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $c = new \Kw5\Math\Calc();

        $this->assertEquals(10, $c->add(3, 7));
    }

    public function testSubtract()
    {
        $c = new \Kw5\Math\Calc();

        $this->assertEquals(-4, $c->subtract(3, 7));
    }
}
