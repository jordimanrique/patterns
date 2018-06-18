<?php

namespace Tests\TemplateMethod;

use Patterns\TemplateMethod\Cappuccino;
use Patterns\TemplateMethod\CoffeeAloneAlone;
use Patterns\TemplateMethod\RegularCoffee;
use PHPUnit\Framework\TestCase;

class TestTemplate extends TestCase
{
    public function testPattern()
    {
        $cappuccino = new Cappuccino();
        $cappuccino->prepareBeverage();

        $coffee = new CoffeeAloneAlone();
        $coffee->prepareBeverage();

        $regularCoffee = new RegularCoffee(true);
        $regularCoffee->prepareBeverage();

        $regularCoffee = new RegularCoffee(false);
        $regularCoffee->prepareBeverage();

        $this->assertEquals(1,1);
    }
}
