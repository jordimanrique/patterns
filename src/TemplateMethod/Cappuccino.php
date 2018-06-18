<?php

namespace Patterns\TemplateMethod;

class Cappuccino extends CaffeineBeverage
{
    public function brew()
    {
        echo "Brewing a cappuccino".PHP_EOL;
    }

    public function addCondiment()
    {
        echo "Adding some cocoa".PHP_EOL;
    }
}
