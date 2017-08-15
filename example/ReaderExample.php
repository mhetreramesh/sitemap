<?php

require_once '../vendor/autoload.php';

use Sitemap\Reader;

$urls = new Reader();

print_r($urls->read('http://yoursite.com/sitemap.xml'));
