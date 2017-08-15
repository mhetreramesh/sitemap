<?php

use Sitemap\Reader;

class ReaderTest extends PHPUnit_Framework_TestCase
{
    private $reader;

    protected function setUp()
    {
        $this->reader = new Reader();
    }

    private function getMockSimpleXmlElement()
    {
        $mock = $this
            ->getMockBuilder('Traversable')
            ->getMock();
        return $mock;
    }

    public function testRead()
    {
        $reader = $this->getMockSimpleXmlElement();
        //$this->reader->read('sitemap.xml');
    }
}