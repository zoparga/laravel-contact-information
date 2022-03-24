# Add many address to many model with a single trait. E.g.: many shipping address for a customer.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zoparga/laravel-contact-information.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-contact-information)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-contact-information/run-tests?label=tests)](https://github.com/zoparga/laravel-contact-information/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-contact-information/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zoparga/laravel-contact-information/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zoparga/laravel-contact-information.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-contact-information)



## Installation

You can install the package via composer:

```bash
composer require zoparga/laravel-contact-information
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="zoparga\ContactInformation\ContactInformationServiceProvider" --tag="contact-information-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="zoparga\ContactInformation\ContactInformationServiceProvider" --tag="laravel-contact-information-config"
```

This is the contents of the published config file:

## Usage

- publish migration file
- migrate
- add trait to model
- use it

## Prepare model


use zoparga\ContactInformation\Traits\ContactInformationeableTrait;

class {{model}} extends Model
{
    use ContactInformationeableTrait;
}

```php

$model = \App\Models\Model::find(1);

$model->contactInformations()->create([
    'type' => 'phone',
    'information' => '+361123123',
    'primary' => 1,
]);

$model->contactInformations()->create([
    'type' => 'web',
    'information' => 'info.xyz',
    'primary' => 1,
]);

$contactInformationId = 1;

$model->updateContactInformation($contactInformationId, [
    'type' => 'phone',
    'information' => '+361123123',
    'primary' => 0,
]);


Get the addresses, order by ID - desc
Or you can limit it here
$model->getLatestContactInformationes()->get();

Or you can limit it here
$model->getLatestContactInformationes()->limit(3)->get();

Of course you can get last created address
$model->getLastContactInformation();


```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Papp Zoltán](https://github.com/zoparga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
