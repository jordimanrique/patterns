<?php

namespace Patterns\Observer;

interface Listener
{
    public function listenEvent(int $number);
}