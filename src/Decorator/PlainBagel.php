<?php

namespace Patterns\Decorator;

class PlainBagel extends Bagel
{
    public function getCost(): float
    {
        return 2.80;
    }

    public function getDescription()
    {
        return "Plain bagel: ";
    }
}