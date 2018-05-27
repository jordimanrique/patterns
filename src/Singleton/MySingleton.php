<?php

namespace Patterns\Singleton;

class MySingleton
{
    private static $instance;

    /** @var int */
    private $field;

    private function __construct()
    {
        $this->field = 4;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getField(): int
    {
        return $this->field;
    }
}
