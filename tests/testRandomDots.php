<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */

namespace Elminson\RandomDots;

use PHPUnit\Framework\TestCase;

class testRandomDots extends TestCase
{

    /**
     *
     */
    public function testFirstTestCase()
    {
        $randomdots = new RandomDots();
        $this->assertEquals("t.e.s.t", $randomdots->placeDot("test", 3));
        $this->assertEquals("r.a.n.d.o.m", $randomdots->placeDot("random", 5));
    }

    public function testPlaceDotOnInvalidStringLength()
    {
        $randomdots = new RandomDots();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage(" String length must be greater than number of dots ");
        $randomdots->placeDot("");
    }

    public function testIndex()
    {
        $randomdots = new RandomDots();
        $this->assertEquals("index", $randomdots->index());
    }
}
