# TurboHX

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inmanturbo/turbohx.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/turbohx)[![Total Downloads](https://img.shields.io/packagist/dt/inmanturbo/turbohx.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/turbohx)

Allows you to send `HTTP` `POST`, `PATCH`,`PUT` and `DELETE` requests to your [laravel/folio](https://github.com/laravel/folio) routes.

## Installation

First install [laravel/folio](https://laravel.com/docs/10.x/folio#installation)

```bash
composer require laravel folio
```

```bash
composer php artisan folio:install
```

Then install this package

```bash
composer require inmanturbo/turbohx
```

That's it! Now you can send all types of `HTMX` and `ajax` requests to your [laravel/folio](https://github.com/laravel/folio) routes and handle them directly with your blade files.

## Usage

This package extends [laravel/folio](https://github.com/laravel/folio) to add some extra features like allowing `POST`, `PATCH`,`PUT` and `DELETE` `HTTP` methods, mostly to support using [htmx](https://github.com/bigskysoftware/htmx) or perhaps [alpine](https://github.com/alpinejs/alpine) with a few ajax calls. See <https://github.com/laravel/folio/issues/106>

Also allows for a wilcard file to work in place of an `index.blade.php` file as described here: <https://github.com/laravel/folio/pull/119>

> [!CAUTION]
> This allows all `HTTP` methods on all folio routes!

`Folio` uses the default `Rout::fallback` method which only supports get requests. This just replaces it with `Route::any` method. May be improved in the future to allow more granular control, such as a function similiar to the `name()` function available in folio. `PR`'s welcome!

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

- [inmanturbo](https://github.com/inmanturbo)
- [laravel/folio](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
