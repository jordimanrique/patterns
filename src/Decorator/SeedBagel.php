<?php

namespace Patterns\Decorator;

class SeedBagel extends Bagel
{
    public function getCost(): float
    {
        return 3.20;
    }

    public function getDescription()
    {
        return "Seed bagel: ";
    }
}