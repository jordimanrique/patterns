<?php

namespace Patterns\TemplateMethod;

abstract class CaffeineBeverage
{
    public final function prepareBeverage()
    {
        echo ' BEGIN THE PROCESS.....'.PHP_EOL;
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiment()) {
            $this->addCondiment();
        }
    }

    public function boilWater()
    {
        echo "I'm boiling some water".PHP_EOL;
    }

    public function pourInCup()
    {
        echo "I'm pouring in a specific cup".PHP_EOL;
    }

    public function customerWantsCondiment(): bool
    {
        return true;
    }

    abstract public function brew();

    abstract public function addCondiment();
}
