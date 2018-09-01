## Nova Tool

This repo contains a skelton to easily create Nova Tool packages. It contains a few niceties not present in the default Nova Tool scaffolding.

First clone this repo to your development machine and remove the `.git` directory. Next run `git init` to create another repo. Create a new repo on GitHub (or another source control saas) and point the origin remote of your cloned repo to the one you just created. Here's an example: `git remote add origin git@github.com:CodeStacked/nova-tool.git`. Commit all files and push to master.

 Next run `composer install`, `yarn` and `yarn production`.
 
If you don't have a Nova app already head over the [nova installation instructions](https://nova.laravel.com/docs/1.0/installation.html#installing-nova).

To use your customized package in a Nova app, add this line in the `require` section of the `composer.json` file:
 
 ```
    "stack/nova-tool": "*",
```
 
 In the same `composer.json` file add a `repositiories` section with the path to your package repo:
 
 ```
     "repositories": [
         {
             "type": "path",
             "url": "../nova-tool"
         },
```
 
Now you're ready to develop your package inside a Nova app.
 
**When you are done with the steps above delete everything above!**

# Laravel Nova Tool

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebase/nova-tool.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-tool)
![CircleCI branch](https://img.shields.io/circleci/project/github/CodeStacked/nova-tool/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/Stack/nova-tool/master.svg?style=flat-square)](https://travis-ci.org/Stack/nova-tool)
[![Quality Score](https://img.shields.io/scrutinizer/g/Stack/nova-tool.svg?style=flat-square)](https://scrutinizer-ci.com/g/Stack/nova-tool)
[![Total Downloads](https://img.shields.io/packagist/dt/codebase/nova-tool.svg?style=flat-square)](https://packagist.org/packages/codebase/nova-tool)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require stack/nova-tool
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Stack\NovaTool\Tool(),
    ];
}
```

## Usage

Click on the "nova-tool" menu item in your Nova app to see the tool provided by this package.

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
