<?php

namespace Patterns\TemplateMethod;

class CoffeeAloneAlone extends CaffeineBeverage
{
    public function brew()
    {
        echo "Brewing a coffee".PHP_EOL;
    }

    public function addCondiment()
    {
    }
}