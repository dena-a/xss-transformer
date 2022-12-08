# XssTransformer

a PHP and Laravel package to transform strings to prevent xss injection

[![Latest Stable Version](https://poser.pugx.org/dena-a/xss-transformer/v)](https://packagist.org/packages/dena-a/xss-transformer)
[![Total Downloads](https://poser.pugx.org/dena-a/xss-transformer/downloads)](https://packagist.org/packages/dena-a/xss-transformer)
[![Latest Unstable Version](https://poser.pugx.org/dena-a/xss-transformer/v/unstable)](https://packagist.org/packages/dena-a/xss-transformer)
[![License](https://poser.pugx.org/dena-a/xss-transformer/license)](https://packagist.org/packages/dena-a/xss-transformer)

## Requirements
asdasd
* PHP >= 7.4

## Installation
1. Add the package to your composer file via the `composer require` command:
   
   ```bash
   $ composer require dena-a/xss-transformer:^0.1
   ```
   
   Or add it to `composer.json` manually:
   
   ```json
   "require": {
       "dena-a/xss-transformer": "^0.1"
   }
   ```

2. XssTransformer's service providers will be automatically registered using Laravel's auto-discovery feature.

    > Note: For Lumen you have to add the XssTransformer service provider manually to: `bootstrap/app.php` :

    ```php
   $app->register(Dena\XssTransformer\Laravel\XssTransformerServiceProvider::class);
    ```

3. Publish the config-file with:
    ```bash
    php artisan vendor:publish --provider="Dena\XssTransformer\Laravel\XssTransformerServiceProvider"
    ```

## Usage
TODO:

## Contribute

Contributions are always welcome!

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/dena-a/xss-transformer/issues),
or better yet, fork the library and submit a pull request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
