<?php

namespace Patterns\Factory\Simple;

class PizzaSimpleFactory
{
    public static function createPizza(string $type): Pizza
    {
        switch($type) {
            case Pizza::CHEESE:
                return new CheesePizza();
            case Pizza::VEGGIE:
                return new VeggiePizza();
            default:
                return null;
        }
    }
}
