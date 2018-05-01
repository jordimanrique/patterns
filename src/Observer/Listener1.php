<?php

namespace Patterns\Observer;

class Listener1 implements Listener
{
    public function __construct(Subject $subject)
    {
        $subject->subscribe($this);
    }

    public function listenEvent(int $number)
    {
        echo PHP_EOL."Listening.... ".$number.PHP_EOL;
    }
}