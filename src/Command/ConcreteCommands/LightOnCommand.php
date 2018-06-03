<?php

namespace Patterns\Command\ConcreteCommands;

use Patterns\Command\Command;
use Patterns\Command\Receivers\Light;

class LightOnCommand extends Command
{
    /** @var Light */
    private $light;

    protected const KEY = 'LIGHT ON';

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}
