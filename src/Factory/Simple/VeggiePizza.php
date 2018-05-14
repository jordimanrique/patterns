<?php

namespace Patterns\Factory\Simple;

class VeggiePizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a VEGGIE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a VEGGIE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a VEGGIE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a VEGGIE pizza";
    }
}