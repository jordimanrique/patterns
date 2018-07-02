<?php

namespace Patterns\Iterator;

class Beer
{
    /** @var string */
    private $brand;
    /** @var string */
    private $type;

    public function __construct(string $brand, string $type)
    {
        $this->brand = $brand;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
}
