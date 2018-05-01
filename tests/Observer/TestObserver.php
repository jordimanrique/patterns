<?php

namespace Tests\Observer;

use Patterns\Observer\Listener1;
use Patterns\Observer\Subject;

class TestObserver extends \PHPUnit\Framework\TestCase
{
    public function testObserver()
    {
        $subject = new Subject();

        $listener1 = new Listener1($subject);
        $listener2 = new Listener1($subject);

        $subject->notify(4);

        $this->assertEquals(1,1);
    }
}