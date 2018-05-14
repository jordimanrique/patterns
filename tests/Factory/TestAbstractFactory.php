<?php

namespace Tests\Factory;

use Patterns\Factory\AbstractFactory\Pizza;
use Patterns\Factory\AbstractFactory\PizzaStoreCHI;
use Patterns\Factory\AbstractFactory\PizzaStoreNYC;
use PHPUnit\Framework\TestCase;

class TestSimpleFactory extends TestCase
{
    public function testAbstractFactory()
    {
        $pizzaStore = new PizzaStoreNYC();
        echo PHP_EOL.'--------    NYC    ----------'.PHP_EOL;
        $pizzaStore->orderPizza(Pizza::CHEESE);
        echo PHP_EOL.'----------------------'.PHP_EOL;
        $pizzaStore->orderPizza(Pizza::VEGGIE);


        echo PHP_EOL.'--------    CHICAGO    ----------'.PHP_EOL;
        $pizzaStore = new PizzaStoreCHI();
        $pizzaStore->orderPizza(Pizza::CHEESE);
        echo PHP_EOL.'----------------------'.PHP_EOL;
        $pizzaStore->orderPizza(Pizza::VEGGIE);


        $this->assertEquals(1,1);
    }
}
