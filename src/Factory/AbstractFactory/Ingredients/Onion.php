<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Onion extends Veggie
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Onion';
    }
}