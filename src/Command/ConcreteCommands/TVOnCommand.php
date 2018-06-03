<?php

namespace Patterns\Command\ConcreteCommands;

use Patterns\Command\Command;
use Patterns\Command\Receivers\TV;

class TVOnCommand extends Command
{
    /** @var TV */
    private $tv;

    protected const KEY = 'TV ON';

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->on();
        $this->tv->changeChannel(3);
    }

    public function undo()
    {
        $this->tv->off();
    }
}
