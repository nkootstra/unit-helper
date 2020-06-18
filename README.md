# Unit helper

![Tests](https://github.com/nkootstra/unit-helper/workflows/run-tests/badge.svg)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/nkootstra/unit-helper.svg?style=flat-square)](https://packagist.org/packages/nkootstra/unit-helper)
[![Quality Score](https://img.shields.io/scrutinizer/g/nkootstra/unit-helper.svg?style=flat-square)](https://scrutinizer-ci.com/g/nkootstra/unit-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/nkootstra/unit-helper.svg?style=flat-square)](https://packagist.org/packages/nkootstra/unit-helper)

This package helps you by taking care of guessing the correct unit of a given string.

## Installation

You can install the package via composer:

```bash
composer require nkootstra/unit-helper
```

## Usage

``` php
$guess = new UnitGuess("2 x 2 l");
$unit = $guess->guess(\Nkootstra\UnitConversion\Units\Base\Piece::class);
$unit->getQuantity() // 4
$unit->getName() // Liter
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email niels.kootstra@pm.me instead of using the issue tracker.

## Credits

- [Niels Kootstra](https://github.com/nkootstra)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
