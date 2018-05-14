<?php

namespace Patterns\Factory\Method;

class CheeseCHIPizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a CHICAGO CHEESE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a CHICAGO CHEESE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a CHICAGO CHEESE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a CHICAGO CHEESE pizza";
    }
}