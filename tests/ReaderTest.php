<?php

use Sitemap\Reader;

class ReaderTest extends PHPUnit_Framework_TestCase
{
    private $fileMock;

    public function readWithProperUrl()
    {
        $reader = new Reader();
        $reader->read('http://deskoffer.com/sitemap.xml');
    }
}