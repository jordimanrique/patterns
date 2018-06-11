<?php

namespace Patterns\Adapter;

class PhoneticAdapter implements Abecedary
{
    /** @var Phonetic */
    private $phonetic;

    public function __construct(Phonetic $phonetic)
    {
        $this->phonetic = $phonetic;
    }

    public function a()
    {
        $this->phonetic->ei();
    }

    public function b()
    {
        $this->phonetic->bi();
    }

    public function c()
    {
        $this->phonetic->ci();
    }
}
