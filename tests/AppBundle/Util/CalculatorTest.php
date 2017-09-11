<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 11/09/17
 * Time: 21:16
 */

namespace Tests\AppBundle\Util;

use AppBundle\Util\Calculator;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}