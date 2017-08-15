## Sitemap Operations in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gliterd/sitemap.svg?style=flat-square)](https://packagist.org/packages/gliterd/sitemap)
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://img.shields.io/travis/gliterd/sitemap/master.svg?style=flat-square)](https://travis-ci.org/gliterd/sitemap)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads](https://img.shields.io/packagist/dt/gliterd/sitemap.svg?style=flat-square)](https://packagist.org/packages/gliterd/sitemap)

`sitemap` is a package to read and write sitemap in php.

## Install

Via Composer

``` bash
$ composer require gliterd/sitemap
```

## Usage

``` php
use Sitemap\Reader;

$sitemapUrls = new Reader('http://xyz.com/sitemap.xml');
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

```bash
$ vendor/bin/phpunit
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mhetreramesh@gmail.com instead of using the issue tracker.

## Credits

- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/gliterd/sitemap.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/gliterd/sitemap/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/gliterd/sitemap.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/gliterd/sitemap.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gliterd/sitemap.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gliterd/sitemap
[link-travis]: https://travis-ci.org/gliterd/sitemap
[link-scrutinizer]: https://scrutinizer-ci.com/g/gliterd/sitemap/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/gliterd/sitemap
[link-downloads]: https://packagist.org/packages/gliterd/sitemap
[link-author]: https://github.com/gliterd
[link-contributors]: ../../contributors