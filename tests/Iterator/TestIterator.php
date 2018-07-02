<?php

namespace Tests\Iterator;

use Patterns\Iterator\Beer;
use Patterns\Iterator\BetterBeerMenu;
use Patterns\Iterator\SimpleBeerMenu;
use PHPUnit\Framework\TestCase;

class TestIterator extends TestCase
{
    public function testSimpleIterator()
    {
        $beerMenu = new SimpleBeerMenu();
        $beerMenu->addBeer(new Beer('Turia', 'brown ale'));
        $beerMenu->addBeer(new Beer('Moritz', 'pale ale'));

        $beerIterator = $beerMenu->createIterator();

        /** @var Beer $beer */
        foreach ($beerIterator as $beer) {
            echo $beer->getType().': '.$beer->getBrand().PHP_EOL;
        }

        $this->assertEquals(1,1);
    }

    public function testBetterIterator()
    {
        $beerMenu = new BetterBeerMenu();
        $beerMenu->addBeer(new Beer('Turia', 'brown ale'));
        $beerMenu->addBeer(new Beer('Moritz', 'pale ale'));

        $beerIterator = $beerMenu->getIterator();

        /** @var Beer $beer */
        foreach ($beerIterator as $beer) {
            echo $beer->getType().': '.$beer->getBrand().PHP_EOL;
        }

        $this->assertEquals(1,1);
    }
}

