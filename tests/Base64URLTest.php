<?php

namespace Tests;

use Sasaya\Base64URL;

class Base64URLTest extends TestCase
{
    public function testEncode()
    {
        $this->assertEquals('Pj4-Pz8_Pw', Base64URL::encode('>>>????'));
        $this->assertEquals('WyI-Pj4iLCI_Pz8iXQ', Base64URL::encode(['>>>', '???']));
        $this->assertEquals('', Base64URL::encode([]));
    }

    public function testDecode()
    {
        $this->assertEquals('>>>????', Base64URL::decode('Pj4-Pz8_Pw'));
        $this->assertEquals(['>>>', '???'], Base64URL::decode('WyI-Pj4iLCI_Pz8iXQ'));
        $this->assertEquals([], Base64URL::decode(''));
    }
}
