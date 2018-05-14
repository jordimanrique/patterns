<?php

namespace Tests\Factory;

use Patterns\Factory\Method\Pizza;
use Patterns\Factory\Method\PizzaStoreChicago;
use Patterns\Factory\Method\PizzaStoreNYC;
use PHPUnit\Framework\TestCase;

class TestSimpleFactory extends TestCase
{
    public function testMethodFactory()
    {
        $pizzaStore = new PizzaStoreChicago();
        $pizzaStore->orderPizza(Pizza::CHEESE);
        $pizzaStore->orderPizza(Pizza::VEGGIE);

        $pizzaStore = new PizzaStoreNYC();
        $pizzaStore->orderPizza(Pizza::CHEESE);
        $pizzaStore->orderPizza(Pizza::VEGGIE);

        $this->assertEquals(1,1);
    }
}
