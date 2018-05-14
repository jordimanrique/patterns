<?php

namespace Patterns\Factory\Method;

class CheeseNYCPizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a NYC CHEESE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a NYC CHEESE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a NYC CHEESE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a NYC CHEESE pizza";
    }
}