<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

class Corn extends Veggie
{
    public function writeName()
    {
        echo PHP_EOL.$this->type.': Corn';
    }
}