<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Mushroom extends Veggie
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Mushroom';
    }
}