<?php

namespace Patterns\Factory\Method;

class PizzaStoreNYC extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch($type) {
            case Pizza::CHEESE:
                return new CheeseNYCPizza();
            case Pizza::VEGGIE:
                return new VeggieNYCPizza();
            default:
                return null;
        }
    }
}
