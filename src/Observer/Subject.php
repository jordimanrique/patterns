<?php
namespace Patterns\Observer;

class Subject
{
    /** @var array */
    private $listeners;

    public function __construct()
    {
        $this->listeners = [];
    }

    public function subscribe(Listener $listener)
    {
        $this->listeners[] = $listener;
    }

    public function notify(int $number)
    {
        echo PHP_EOL."Sending message... ".$number.PHP_EOL;

        /** @var Listener $listener */
        foreach ($this->listeners as $listener) {
            $listener->listenEvent($number);
        }
    }
}