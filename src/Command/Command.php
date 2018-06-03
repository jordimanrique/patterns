<?php

namespace Patterns\Command;

abstract class Command
{
    protected const KEY = 'root command';

    public abstract function execute();

    public abstract function undo();

    public function getKey()
    {
        return static::KEY;
    }
}