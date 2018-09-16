<?php

namespace Patterns\Proxy;

class ProxyImage implements Image
{
    /** @var string */
    private $fileName;
    /** @var RealImage */
    private $realImage;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function displayImage()
    {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->displayImage();
    }
}