<?php

namespace Patterns\Factory\Simple;

interface Pizza
{
    const CHEESE = 'cheese';
    const VEGGIE = 'veggie';

    public function prepare();
    public function bake();
    public function cut();
    public function box();
}
