<?php

namespace Patterns\Decorator\Decorators;

use Patterns\Decorator\Bagel;

class CreamCheese extends Bagel
{
    /** @var Bagel */
    private $bagel;

    public function __construct(Bagel $bagel)
    {
        $this->bagel = $bagel;
    }

    public function getCost(): float
    {
        return $this->bagel->getCost() + 0.45;
    }

    public function getDescription()
    {
        return $this->bagel->getDescription() . ", with cream cheese";
    }
}