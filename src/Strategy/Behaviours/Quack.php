<?php

namespace Patterns\Strategy\Behaviours;

use Patterns\Strategy\Behaviour;

class Quack implements Behaviour
{
    public function makeBehaviour()
    {
        echo "I'm making the regular QUACK sound because I'm a duck";
    }
}