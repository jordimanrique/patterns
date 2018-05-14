<?php

namespace Patterns\Factory\AbstractFactory;

use Patterns\Factory\AbstractFactory\Ingredients\Cheese;

interface Ingredientfactory
{
    public function createVeggies(): array;
    public function createCheese(): Cheese;
}
