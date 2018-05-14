<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Basil extends Veggie
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Basil';
    }
}