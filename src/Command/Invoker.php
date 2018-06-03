<?php

namespace Patterns\Command;

class Invoker
{
    /** @var Command[]  */
    private $commands;

    /** @var Command */
    private $undoCommand;

    public function __construct()
    {
        $this->commands = [];
    }

    public function addCommand(Command $command)
    {
        $this->commands[$command->getKey()] = $command;
    }

    public function releaseAction(string $keyOrder)
    {
        $this->commands[$keyOrder]->execute();
        $this->undoCommand = $this->commands[$keyOrder];
    }

    public function undoAction()
    {
        $this->undoCommand->undo();
    }
}
