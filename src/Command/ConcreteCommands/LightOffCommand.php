<?php

namespace Patterns\Command\ConcreteCommands;

use Patterns\Command\Command;
use Patterns\Command\Receivers\Light;

class LightOffCommand extends Command
{
    /** @var Light */
    private $light;

    protected const KEY = 'LIGHT OFF';

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
