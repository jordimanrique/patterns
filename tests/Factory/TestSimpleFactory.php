<?php

namespace Tests\Factory;

use Patterns\Factory\Simple\PizzaStore;
use Patterns\Factory\Simple\Pizza;
use Patterns\Factory\Simple\PizzaSimpleFactory;
use PHPUnit\Framework\TestCase;

class TestSimpleFactory extends TestCase
{
    public function testSimpleFactory()
    {
        $pizzaStore = new PizzaStore(new PizzaSimpleFactory());
        $pizzaStore->orderPizza(Pizza::CHEESE);


        $this->assertEquals(1,1);
    }
}
