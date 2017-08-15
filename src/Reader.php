<?php

namespace Sitemap;

class Reader
{
    private $sitemapUrl;

    /*
     * Reader constructor. Accepts the sitemap url to read.
     *
     * @param $sitemapUrl
     */
    function __construct($sitemapUrl = '')
    {
        $this->sitemapUrl = $sitemapUrl;
    }

    /*
     * Read the sitemap function.
     *
     * @param $sitemapUrl pass the url to read the sitemap.
     */

    public function read($sitemapUrl = '')
    {
        if(!empty($sitemapUrl)) $this->sitemapUrl = $sitemapUrl;
        $xmlData = new \SimpleXMLElement($this->sitemapUrl, 0 , 1);
        $urls = [];
        if(!empty($xmlData->url)) {
            foreach ($xmlData->url as $url) {
                $urls[] = (string) $url->loc;
            }
        } elseif(!empty($xmlData->sitemap)) {
            foreach ($xmlData->sitemap as $url) {
                $urls[] = (string) $url->loc;
            }
        }
        return $urls;
    }
}