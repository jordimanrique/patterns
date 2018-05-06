<?php

namespace Patterns\Strategy;

class Duck
{
    /** @var Behaviour */
    private $behaviour;

    public function __construct(Behaviour $behaviour)
    {
        $this->behaviour = $behaviour;
    }

    public function getBehaviour(): Behaviour
    {
        return $this->behaviour;
    }

    public function setBehaviour(Behaviour $behaviour)
    {
        $this->behaviour = $behaviour;
    }

}