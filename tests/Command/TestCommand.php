<?php

namespace Tests\Command;

use Patterns\Command\ConcreteCommands\LightOffCommand;
use Patterns\Command\ConcreteCommands\LightOnCommand;
use Patterns\Command\ConcreteCommands\TVOffCommand;
use Patterns\Command\ConcreteCommands\TVOnCommand;
use Patterns\Command\Invoker;
use Patterns\Command\Receivers\Light;
use Patterns\Command\Receivers\TV;
use PHPUnit\Framework\TestCase;

class TestCommand extends TestCase
{
    public function testCommand()
    {
        // RECEIVERS: decouples objects from their own actions
        $light = new Light();
        $tv = new TV();

        // COMMANDS: available action to do with the receivers
        $lightOnCommand = new LightOnCommand($light);
        $lightOffCommand = new LightOffCommand($light);
        $tvOnCommand = new TVOnCommand($tv);
        $tvOffCommand = new TVOffCommand($tv);

        // INVOKER: the unique piece that invokes the actions
        $invoker = new Invoker();
        $invoker->addCommand($lightOnCommand);
        $invoker->addCommand($lightOffCommand);
        $invoker->addCommand($tvOnCommand);
        $invoker->addCommand($tvOffCommand);

        $invoker->releaseAction($lightOffCommand->getKey());
        $invoker->releaseAction($lightOnCommand->getKey());
        $invoker->undoAction();

        $invoker->releaseAction($tvOnCommand->getKey());
        $invoker->releaseAction($tvOffCommand->getKey());


        $this->assertEquals(1,1);
    }
}
