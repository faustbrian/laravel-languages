# Laravel Languages

[![Build Status](https://img.shields.io/travis/artisanry/Languages/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Languages)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/languages.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Languages.svg?style=flat-square)](https://github.com/artisanry/Languages/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Languages.svg?style=flat-square)](https://packagist.org/packages/artisanry/Languages)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/languages
```

To get started, you'll need to publish the vendor assets and migrate:

```bash
php artisan vendor:publish --provider="Artisanry\Languages\LanguagesServiceProvider" && php artisan migrate
```

Now you can seed the languages into the database like this.

```bash
php artisan languages:seed
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
