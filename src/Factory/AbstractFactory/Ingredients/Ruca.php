<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Ruca extends Veggie
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Ruca';
    }
}