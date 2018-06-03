<?php

namespace Patterns\Command\ConcreteCommands;

use Patterns\Command\Command;
use Patterns\Command\Receivers\TV;

class TVOffCommand extends Command
{
    /** @var TV */
    private $tv;

    protected const KEY = 'TV OFF';

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->off();
    }

    public function undo()
    {
        $this->tv->on();
    }
}
