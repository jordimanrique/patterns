<?php

namespace Patterns\TemplateMethod;

class RegularCoffee extends CaffeineBeverage
{
    /** @var bool */
    private $addCondiment;

    public function __construct(bool $addCondiment)
    {
        $this->addCondiment = $addCondiment;
    }

    public function brew()
    {
        echo "Brewing a coffee".PHP_EOL;
    }

    public function addCondiment()
    {
        echo "Adding some sugar".PHP_EOL;
    }

    public function customerWantsCondiment(): bool
    {
        return $this->addCondiment;
    }
}