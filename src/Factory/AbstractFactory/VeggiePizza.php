<?php

namespace Patterns\Factory\AbstractFactory;

use Patterns\Factory\AbstractFactory\Ingredients\Veggie;

class VeggiePizza extends Pizza
{
    /** @var Ingredientfactory */
    private $ingredientfactory;

    public function __construct(Ingredientfactory $ingredientfactory)
    {
        $this->ingredientfactory = $ingredientfactory;
    }

    public function prepare()
    {
        $veggies = $this->ingredientfactory->createVeggies();

        echo PHP_EOL."I'm preparing a VEGGIE PIZZA: ".array_walk(
            $veggies,
            function(Veggie $veggie) {
                echo $veggie->writeName().', ';
            });

        $this->bake();
        $this->cut();
        $this->cut();
    }
}
