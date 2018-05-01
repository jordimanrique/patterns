<?php

namespace Patterns\Decorator;

abstract class Bagel
{
    public abstract function getCost(): float;

    public function getDescription()
    {
        return "Just a simple Bagel";
    }
}