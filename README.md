# Laravel Nova Blog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebase/nova-blog.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-blog)
[![Total Downloads](https://img.shields.io/packagist/dt/codebase/nova-blog.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-blog)


Nova Blog Tool Solution with Posts, Categories, Comments, Tags and Images. A complete solution with a modular Implementation, installs migrations, rolls back, resets and provides configuration.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require codebase/nova-blog
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Stack\Nova\Tools\BlogTool(),
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
