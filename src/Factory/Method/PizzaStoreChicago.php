<?php

namespace Patterns\Factory\Method;

class PizzaStoreChicago extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch($type) {
            case Pizza::CHEESE:
                return new CheeseCHIPizza();
            case Pizza::VEGGIE:
                return new VeggieCHIPizza();
            default:
                return null;
        }
    }
}
