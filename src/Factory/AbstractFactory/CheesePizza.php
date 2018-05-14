<?php

namespace Patterns\Factory\AbstractFactory;

class CheesePizza extends Pizza
{
    /** @var Ingredientfactory */
    private $ingredientfactory;

    public function __construct(Ingredientfactory $ingredientfactory)
    {
        $this->ingredientfactory = $ingredientfactory;
    }

    public function prepare()
    {
        $cheese = $this->ingredientfactory->createCheese();

        echo PHP_EOL."I'm preparing a CHEESE PIZZA: ".$cheese->writeName();

        $this->bake();
        $this->cut();
        $this->cut();
    }
}
