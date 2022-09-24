# Laravel  Shortner Link  Package 

## Shorten Long Urls Using Bitly Api.

## INSTALLATION

Install the package through [Composer](http://getcomposer.org/).

`composer require kerodev/short-link`

## CONFIGURATION

Required configuration file (.env) file
``` php 
// add token inside env.php

SHORTEN_TOKEN=""
SHORTEN_URL="https://api-ssl.bitly.com/v4/shorten"

```
Optional configuration file (useful if you plan to have full control)

```php
php artisan vendor:publish --tag="shortconfig"
```

## HOW TO USE

-   [Quick Usage](#quick)
-   [Credits](#credits)
-   [License](#license)

## Quick Usage

```php
// In your controller
// Use The Helper class Bitly to shorten urls
use Shorter;

return Shorter::shorten('https://www.youtube.com');

// get link only
$short = Shorter::shorten('https://www.youtube.com');
return $short->link;
```

## Credits

- [Keroles  Atef](https://github.com/keroles19)

## License

The Http Client Package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
