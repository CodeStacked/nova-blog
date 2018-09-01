# Laravel Nova Blog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebase/nova-blog.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-blog)
![CircleCI branch](https://img.shields.io/circleci/project/github/CodeStacked/nova-blog/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/Stack/nova-blog/master.svg?style=flat-square)](https://travis-ci.org/Stack/nova-blog)
[![Quality Score](https://img.shields.io/scrutinizer/g/Stack/nova-blog.svg?style=flat-square)](https://scrutinizer-ci.com/g/Stack/nova-blog)
[![Total Downloads](https://img.shields.io/packagist/dt/codebase/nova-blog.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-blog)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require stack/nova-blog
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Stack\Nova\BlogTool(),
    ];
}
```

## Usage

Click on the "nova-blog" menu item in your Nova app to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email io.codestack@gmail.com instead of using the issue tracker.

## Credits

- [Carlo Rademan](https://github.com/CodeStacked)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
