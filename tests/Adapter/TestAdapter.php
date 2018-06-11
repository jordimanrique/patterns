<?php
namespace Tests\Adapter;

use Patterns\Adapter\Abecedary;
use Patterns\Adapter\Phonetic;
use Patterns\Adapter\PhoneticAdapter;
use PHPUnit\Framework\TestCase;

class TestAdapter extends TestCase
{

    public function testAdapter()
    {
        /** @var Abecedary $abecedary */
        $abecedary = new PhoneticAdapter(new Phonetic());

        $abecedary->a();
        $abecedary->b();
        $abecedary->c();

        $this->assertEquals(1,1);
    }
}
