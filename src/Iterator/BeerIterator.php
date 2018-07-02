<?php

namespace Patterns\Iterator;

class BeerIterator implements \Iterator
{
    /** @var array */
    private $beers;

    /** @var int */
    private $currentKey;

    public function __construct(array $beers)
    {
        $this->beers = $beers;
        $this->currentKey = 0;
    }

    public function current()
    {
        return $this->beers[$this->currentKey];
    }

    public function next()
    {
        $this->currentKey++;
    }

    public function key()
    {
        return $this->currentKey;
    }

    public function valid()
    {
        return isset($this->beers[$this->currentKey]);
    }

    public function rewind()
    {
        $this->currentKey = 0;
    }
}
