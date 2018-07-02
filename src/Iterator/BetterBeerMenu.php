<?php

namespace Patterns\Iterator;

use Traversable;

class BetterBeerMenu implements \IteratorAggregate
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

    public function getIterator()
    {
        return new \ArrayIterator($this->beers);
    }
}
