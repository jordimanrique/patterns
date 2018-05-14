<?php

namespace Patterns\Factory\Method;

class VeggieCHIPizza implements Pizza
{
    public function prepare()
    {
        echo PHP_EOL."I'm preparing a CHICAGO VEGGIE pizza";
    }

    public function bake()
    {
        echo PHP_EOL."I'm baking a CHICAGO VEGGIE pizza";
    }

    public function cut()
    {
        echo PHP_EOL."I'm cutting a CHICAGO VEGGIE pizza";
    }

    public function box()
    {
        echo PHP_EOL."I'm boxing a CHICAGO VEGGIE pizza";
    }
}