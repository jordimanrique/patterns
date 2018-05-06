<?php

namespace Tests\Strategy;

use Patterns\Strategy\Behaviours\Mute;
use Patterns\Strategy\Behaviours\Quack;
use Patterns\Strategy\DuckRed;
use PHPUnit\Framework\TestCase;

class TestStrategy extends TestCase
{
    public function testDuckSound()
    {
        $muteBehaviour = new Mute();

        $redDuck = new DuckRed($muteBehaviour);
        $redDuck->getBehaviour()->makeBehaviour();

        $quackBehaviour = new Quack();
        $redDuck->setBehaviour($quackBehaviour);

        $redDuck->getBehaviour()->makeBehaviour();

        $this->assertEquals(1,1);
    }
}
