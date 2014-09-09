[Delivery Auto](http://www.delivery-auto.com/ "Delivery Auto") API PHP Client
==============================

* Scrutinizer [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fre5h/delivery-auto-api-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fre5h/delivery-auto-api-php-client/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/fre5h/delivery-auto-api-php-client/badges/build.png?b=master)](https://scrutinizer-ci.com/g/fre5h/delivery-auto-api-php-client/build-status/master)
* Travis CI [![Build Status](https://secure.travis-ci.org/fre5h/delivery-auto-api-php-client.png?branch=master)](https://travis-ci.org/fre5h/delivery-auto-api-php-client)
* Packagist.org [![License](https://poser.pugx.org/fresh/delivery-auto-api-php-client/license.svg)](https://packagist.org/packages/fresh/delivery-auto-api-php-client)
[![Latest Stable Version](https://poser.pugx.org/fresh/delivery-auto-api-php-client/version.svg)](https://packagist.org/packages/fresh/delivery-auto-api-php-client)
[![Total Downloads](https://poser.pugx.org/fresh/delivery-auto-api-php-client/downloads.svg)](https://packagist.org/packages/fresh/delivery-auto-api-php-client)

Requirements
------------

* PHP 5.4 and later
* cURL PHP extension

Install via Composer
--------------------

Add the following lines to your `composer.json` file and then run php `composer.phar install` or php `composer.phar update`:

```json
{
    "require": {
        "fresh/delivery-auto-api-php-client": "dev-master"
    }
}
```

Using
-----

```php
<?php

namespace Acme;

use Fresh\DeliveryAuto\Client;

class Foo
{
    public function bar($text)
    {
        $client = new Client();
        
        // Get raw response
        $result = $client->getListOfRegions()->getRawResponse();        
        // Get raw array result
        $result = $client->getListOfRegions()->getRawArrayResult();
        // Get object mapped result
        $result = $client->getListOfRegions()->getObjectMappedResult();
    }
}
```
