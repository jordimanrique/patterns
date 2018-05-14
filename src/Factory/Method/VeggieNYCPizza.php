<?php

namespace Patterns\Factory\Method;

class VeggieNYCPizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a NYC VEGGIE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a NYC VEGGIE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a NYC VEGGIE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a NYC VEGGIE pizza";
    }
}