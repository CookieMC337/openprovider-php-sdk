OpenProvider PHP API Client
=======================

[![Latest Version](https://img.shields.io/packagist/v/vexura/openprovider-sdk-client?label=version)](https://packagist.org/packages/vexura/openprovider-sdk-client/)
[![Composer Downloads](https://img.shields.io/packagist/dm/vexura/openprovider-sdk-client.svg?label=Composer%20Downloads)](https://packagist.org/packages/vexura/openprovider-sdk-client)


This **PHP 7.0+** library allows you to communicate with the OpenProvider API.

## Getting Started

Recommended installation is using **Composer**!

In the root of your project execute the following:
```sh
$ composer require vexura/openprovider-sdk-client
```
 
Or add this to your `composer.json` file:
```json 
{
    "require": {
        "vexura/openprovider-sdk-client": "^1.0"
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
$client = new OpenProvider('username', 'password');

// Then you are able to perform a request
var_dump($client->domain()->getPricelist());
?>
```