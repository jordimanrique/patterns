<?php

namespace Patterns\Factory\AbstractFactory;

abstract class PizzaStore
{
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
    }

    abstract protected function createPizza(string $type): Pizza;
}