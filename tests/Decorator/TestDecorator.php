<?php

namespace Tests\Decorator;

use Patterns\Decorator\Decorators\Ruca;
use Patterns\Decorator\Decorators\Tomato;
use Patterns\Decorator\Decorators\Tuna;
use Patterns\Decorator\PlainBagel;
use Patterns\Decorator\SeedBagel;

class TestDecorator extends \PHPUnit\Framework\TestCase
{
    public function testBreakfast()
    {
        $bagel = new PlainBagel();
        $bagel = new Ruca($bagel);
        $bagel = new Tomato($bagel);

        echo "Cost: ".$bagel->getCost().PHP_EOL.$bagel->getDescription().PHP_EOL;


        $bagel = new Tuna(new Tomato(new SeedBagel()));

        echo "Cost: ".$bagel->getCost().PHP_EOL.$bagel->getDescription();

        $this->assertEquals(1,1);
    }
}
