<?php

namespace Tests\Proxy;

use Patterns\Proxy\ProxyImage;
use PHPUnit\Framework\TestCase;

class TestProxy extends TestCase
{
    public function testProxy()
    {
        $proxyImage1 = new ProxyImage('first_path');
        $proxyImage2 = new ProxyImage('second_path');

        $proxyImage1->displayImage();
        $proxyImage2->displayImage();
        $proxyImage1->displayImage();
        $proxyImage2->displayImage();


        $this->assertEquals(1,1);
    }
}
