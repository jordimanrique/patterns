<?php

namespace Patterns\State;

class Subject
{
    /** @var State  */
    private $state;

    public function __construct()
    {
        $this->state = new StateLowerCase();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function writeName(string $name)
    {
        $this->state->write($name);
    }

}