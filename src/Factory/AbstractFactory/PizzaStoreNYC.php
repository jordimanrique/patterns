<?php

namespace Patterns\Factory\AbstractFactory;

class PizzaStoreNYC extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $ingredientfactory = new NYCIngredientFactory();

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