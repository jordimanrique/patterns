<?php

namespace Patterns\Factory\AbstractFactory\Ingredients;

abstract class Veggie
{
    protected $type = 'Veggie';


    public abstract function writeName();
}