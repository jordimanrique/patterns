<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

abstract class Cheese
{
    protected $type = 'Cheese';

    abstract function writeName();
}