<p align="center">
    <img src="https://banners.beyondco.de/Blade%20FontAudio%20Icons.png?theme=light&packageManager=composer+require&packageName=codeat3%2Fblade-fontaudio&pattern=architect&style=style_1&description=A+package+to+use+FontAudio+Icons+in+your+Laravel+Blade+views&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="1280" title="Social Card Blade FontAudio Icons">
</p>

# Blade FontAudio Icons

<a href="https://github.com/codeat3/blade-fontaudio/actions?query=workflow%3ATests">
    <img src="https://github.com/codeat3/blade-fontaudio/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/codeat3/blade-fontaudio">
    <img src="https://img.shields.io/packagist/v/codeat3/blade-fontaudio" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/codeat3/blade-fontaudio">
    <img src="https://img.shields.io/packagist/dt/codeat3/blade-fontaudio" alt="Total Downloads">
</a>

A package to easily make use of [Font Audio Icons](https://github.com/fefanto/fontaudio) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require codeat3/blade-fontaudio
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-fontaudio-bluetooth/>
```

You can also pass classes to your icon components:

```blade
<x-fontaudio-bluetooth class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-fontaudio-bluetooth style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-fontaudio --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-fontaudio/bluetooth.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade FontAudio Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade FontAudio Icons is developed and maintained by [Swapnil Sarwe](https://swapnilsarwe.com).

## License

Blade FontAudio Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
