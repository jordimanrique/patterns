<?php

namespace Patterns\Proxy;

class RealImage implements Image
{
    /** @var string */
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->doSomething();
    }

    private function doSomething()
    {
        echo PHP_EOL.'Doing something a little bit strange ...';
    }

    public function displayImage()
    {
        echo PHP_EOL.' Displaying the image ... '. $this->fileName;
    }
}
