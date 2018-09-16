<?php

namespace Patterns\State;

interface State
{
    public function write(string $name);
}