# Laravel Languages

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-languages
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    'BrianFaust\Languages\ServiceProvider'
];
```

To get started, you'll need to publish the vendor assets and migrate:

```bash
php artisan vendor:publish && php artisan migrate
```

Now you can seed the languages into the database like this.

```bash
php artisan languages:seed
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
