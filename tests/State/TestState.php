<?php

namespace Tests\State;

use Patterns\State\StateLowerCase;
use Patterns\State\StateUpperCase;
use Patterns\State\Subject;
use PHPUnit\Framework\TestCase;

class TestState extends TestCase
{
    public function testState()
    {
        $context = new Subject();

        $context->writeName('Paquito');

        $context->setState(new StateUpperCase());
        $context->writeName('Paquito');

        $context->setState(new StateLowerCase());
        $context->writeName('Paquito');

        $this->assertEquals(1,1);
    }
}