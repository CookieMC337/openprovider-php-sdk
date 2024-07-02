Vexura PHP API Client
=======================

[![Latest Version](https://img.shields.io/packagist/v/Vexura/Vexura-php-sdk?label=version)](https://packagist.org/packages/Vexura/Vexura-php-sdk/)
[![Composer Downloads](https://img.shields.io/packagist/dm/Vexura/Vexura-php-sdk.svg?label=Composer%20Downloads)](https://packagist.org/packages/Vexura/Vexura-php-sdk)


This **PHP 7.0+** library allows you to communicate with the Vexura API.

## Getting Started

Recommended installation is using **Composer**!

In the root of your project execute the following:
```sh
$ composer require Vexura/Vexura-php-sdk
```
 
Or add this to your `composer.json` file:
```json 
{
    "require": {
        "Vexura/Vexura-php-sdk": "^1.0"
    }
}
```

Then perform the installation:
```sh
$ composer install --no-dev
```

### Examples

Get Domain Pricelist
```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';

// Use the library namespace
use Vexura/OpenProvider;

// Then simply pass your OpenProvider-Token when creating the OpenProvider client object.
$client = new OpenProvider('OpenProvider-Token');

// Then you are able to perform a request
var_dump($client->domain()->getPricelist());
?>
```