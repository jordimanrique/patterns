<?php

namespace Patterns\Factory\AbstractFactory;

abstract class Pizza
{
    const CHEESE = 'cheese';
    const VEGGIE = 'veggie';

    public abstract function prepare();

    protected function bake()
    {
        echo PHP_EOL."I'm baking the pizza";
    }
    protected function cut()
    {
        echo PHP_EOL."I'm cutting the pizza";
    }
    protected function box()
    {
        echo PHP_EOL."I'm boxing the pizza";
    }
}
