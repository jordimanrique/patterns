<?php

namespace Patterns\Factory\Simple;

class PizzaStore
{
    /** @var PizzaSimpleFactory */
    private $pizzaFactory;

    public function __construct(PizzaSimpleFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    public function orderPizza(string $type)
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }
}
