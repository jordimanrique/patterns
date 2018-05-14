<?php

namespace Patterns\Factory\Method;

abstract class PizzaStore
{
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

    }

    abstract protected function createPizza(string $type): Pizza;
}