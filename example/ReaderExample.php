<?php

require_once '../vendor/autoload.php';

use Sitemap\Reader;

$urls = new Reader('http://www.sitemappro.com/google-sitemap.html');

print_r($urls->read());