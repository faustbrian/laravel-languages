# Laravel Languages

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-languages
```

And then include the service provider within `app/config/app.php`.

``` php
BrianFaust\Languages\LanguagesServiceProvider::class
```

To get started, you'll need to publish the vendor assets and migrate:

```bash
php artisan vendor:publish --provider="BrianFaust\Languages\LanguagesServiceProvider" && php artisan migrate
```

Now you can seed the languages into the database like this.

```bash
php artisan languages:seed
```

## Usage

``` php
...
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
