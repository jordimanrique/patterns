<?php

namespace Patterns\Facade;

interface RemoteControl
{
    public function onWithDolby();
    public function onWithoutDolby();
    public function off();
}