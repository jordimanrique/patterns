<?php

namespace Patterns\State;

class StateLowerCase implements State
{
    public function write(string $name)
    {
        echo PHP_EOL. strtolower($name);
    }
}