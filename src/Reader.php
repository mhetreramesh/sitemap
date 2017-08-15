<?php

namespace Sitemap;

class Reader
{
    private $sitemapUrl;

    function __construct($sitemapUrl = '')
    {
        $this->sitemapUrl = $sitemapUrl;
    }

    public function read($sitemapUrl = '')
    {
        if(!empty($sitemapUrl)) $this->sitemapUrl = $sitemapUrl;
        return $this->sitemapUrl;
    }
}