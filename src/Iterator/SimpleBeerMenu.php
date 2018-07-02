<?php

namespace Patterns\Iterator;

class SimpleBeerMenu
{
    /** @var Beer[] */
    private $beers;

    public function __construct()
    {
        $this->beers = [];
    }

    public function addBeer(Beer $beer)
    {
        $this->beers[] = $beer;
    }

    public function createIterator()
    {
        return new BeerIterator($this->beers);
    }
}
