<?php

namespace Patterns\Factory\AbstractFactory;

class PizzaStoreCHI extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $ingredientfactory = new CHIIngredientFactory();

        switch ($type) {
            case Pizza::CHEESE:
                $pizza = new CheesePizza($ingredientfactory);
                break;
            case Pizza::VEGGIE:
                $pizza = new VeggiePizza($ingredientfactory);
                break;
            default:
                $pizza = null;
                break;
        }

        return $pizza;
    }
}