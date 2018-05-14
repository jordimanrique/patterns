<?php

namespace Patterns\Factory\AbstractFactory;

use Patterns\Factory\AbstractFactory\Ingredients\Basil;
use Patterns\Factory\AbstractFactory\Ingredients\Cheese;
use Patterns\Factory\AbstractFactory\Ingredients\Mozzarella;
use Patterns\Factory\AbstractFactory\Ingredients\Mushroom;
use Patterns\Factory\AbstractFactory\Ingredients\Onion;

class NYCIngredientFactory implements Ingredientfactory
{
    public function createVeggies(): array
    {
        return [new Mushroom(), new Basil(), new Onion()];
    }

    public function createCheese(): Cheese
    {
        return new Mozzarella();
    }
}