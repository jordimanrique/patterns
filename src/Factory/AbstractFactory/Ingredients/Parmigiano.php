<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Parmigiano extends Cheese
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Parmigiano';
    }
}