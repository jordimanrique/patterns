<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Mozzarella extends Cheese
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Mozzarella';
    }
}