<?php

namespace Patterns\Factory\Simple;

class CheesePizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a CHEESE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a CHEESE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a CHEESE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a CHEESE pizza";
    }
}