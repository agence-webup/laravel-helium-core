# Laravel Helium Core

Laravel Admin made with Helium UI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webup/laravel-helium-core.svg?style=flat-square)](https://packagist.org/packages/webup/laravel-helium-core)
[![tests](https://github.com/agence-webup/laravel-helium-core/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/agence-webup/laravel-helium-core/actions/workflows/tests.yml)
[![pint](https://github.com/agence-webup/laravel-helium-core/actions/workflows/pint.yml/badge.svg?branch=main)](https://github.com/agence-webup/laravel-helium-core/actions/workflows/pint.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/webup/laravel-helium-core.svg?style=flat-square)](https://packagist.org/packages/webup/laravel-helium-core)

## Installation

You can install the package via composer:

```bash
composer require webup/laravel-helium-core
```

You can publish features as you go with:

```bash
php artisan helium:publish
```

This is the contents of the published config file:

```php
return [
];
```

## Features

### User

```bash
php artisan helium:migrate
> User
```

Don't forget to add the guard and provider to `config/auth.php`:
```php
<?php

return [
    ...
    'guards' => [
        ...
        'helium' => [
            'driver' => 'session',
            'provider' => 'helium_users',
        ],
    ],

    'providers' => [
        ...
        'helium_users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Helium\HeliumUser::class,
        ],
    ],
];
```
## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Agence Webup](https://github.com/agence-webup)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
