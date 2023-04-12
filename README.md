<p align="center">
<a href="https://github.com/Synchro/Segment/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/actions/workflow/status/Synchro/Segment/workflows/tests.yml?branch=main?style=flat-square" alt="Build Status"/></a>
<a href="https://packagist.org/packages/synchro/segment"><img src="https://img.shields.io/packagist/dt/synchro/segment?style=flat-square" alt="Packagist Downloads"/></a>
<a href="https://github.com/Synchro/Segment/releases"><img src="https://img.shields.io/github/v/release/Synchro/Segment?display_name=tag&style=flat-square" alt="Latest Version"/></a>
</p>

This package is a [Segment](https://segment.com/) bridge for Laravel, which relies
on [Segment's own PHP library](https://packagist.org/packages/segmentio/analytics-php). This version
requires [PHP](https://php.net) 8.1 and up, and supports Laravel 9 – 10. This package was originally written by [Graham Campbell for Alt Three](https://github.com/AltThree/Segment), but was abandoned in April 2022. This fork was resurrected in April 2023 by [Marcus Bointon (@Synchro)](https://github.com/Synchro).

## Installation

Install the package using [Composer](https://getcomposer.org):

```bash
$ composer require synchro/segment:^4.0
```

Once installed, if you are not using automatic package discovery, then you need to register the  `Synchro\Segment\SegmentServiceProvider` service provider in your `config/app.php`.

## Configuration

Segment requires configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/segment.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

Once you've set your `write_key` value in the configuration, you're ready to go! For the most part you can follow [Segment's own instructions](https://segment.com/docs/libraries/php/quickstart) however, you'll want to replace the `Analytics` classname with `Segment` - plus, you don't need to call `class_alias`.

### Identify the user

```php
Segment::identify([
    'userId' => '12345abcde',
    'traits' => [
        'name' => 'James Brooks',
        'email' => 'test@test.com',
    ],
]);
```

### Track actions

```php
Segment::track([
    'userId' => '12345abcde',
    'event' => 'Did something',
    'properties' => [
        'was_awesome' => true,
    ],
]);
```

## Tests

Run tests with `./vendor.bin/phpunit` or `composer test`.

## Coding standards

Coding standards are checked and enforced using [Tighten's Duster package](https://github.com/tighten/duster) using the default Laravel coding standard. Check for coding standards issues by running `./vendor/bin/duster lint`, and apply automatic fixes using `./vendor/bin/duster fix`, or `composer cs`. These checks are also run using GitHub actions.

## Security

Our security policy is available to read [here](https://github.com/AltThree/Segment/security/policy).

## License

This library is licensed under [The MIT License (MIT)](LICENSE).
