<?php

namespace Patterns\Factory\AbstractFactory;

use Patterns\Factory\AbstractFactory\Ingredients\Corn;
use Patterns\Factory\AbstractFactory\Ingredients\Onion;
use Patterns\Factory\AbstractFactory\Ingredients\Parmigiano;
use Patterns\Factory\AbstractFactory\Ingredients\Cheese;

class CHIIngredientFactory implements Ingredientfactory
{
    public function createVeggies(): array
    {
        return [new Onion(), new Corn()];
    }

    public function createCheese(): Cheese
    {
        return new Parmigiano();
    }
}
