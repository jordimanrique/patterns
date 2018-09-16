<?php

namespace Patterns\State;

class StateUpperCase implements State
{
    public function write(string $name)
    {
        echo PHP_EOL. strtoupper($name);
    }
}