# PHP Share URL
[![CI Process](https://github.com/nostadt/php-share-url/actions/workflows/default.yml/badge.svg)](https://github.com/nostadt/php-share-url/actions/workflows/default.yml)
[![packagist.org](https://img.shields.io/packagist/v/nostadt/share-url)](https://packagist.org/packages/nostadt/share-url)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/paypalme/amartinno1/5)

This PHP package provides pure classes, to generate share-urls for social networks and messengers.  
For an up-to-date list of supported targets have a look at the [src](https://github.com/nostadt/php-share-url/tree/development/src)-directory.

## Q/A

**When should I use this package?**

Use this package if you want to generate urls, to share stringable
content from your application and do not want additional JavaScript,
cookies etc. placed on your application.

**Where is social network/messenger X?**

You are invited to create an issue or pull requests with your needs.
When creating a pull request please have a look at the already existing code
and don't forget to write a unit test.

## Development

```shell
# composer
docker run --rm --interactive --tty --volume $PWD:/app composer install

# PHPUnit
docker run -it --rm --name php-share-url -v "$PWD":/app -w /app php:8.3-cli php vendor/bin/phpunit

# PHPStan
docker run -it --rm --name php-share-url -v "$PWD":/app -w /app php:8.3-cli php vendor/bin/phpstan
```