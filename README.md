# poldixd/laravel-blade-repeat

Blade directive for repeating content for laravel 9.x and PHP8.x

## Installation

```bash
composer require poldixd/laravel-blade-repeat
```

## Usage

```html
@repeat(3)
	<div>Repeat me three times.</div>
@endrepeat
```

Output:

```html
<div>Repeat me three times.</div>
<div>Repeat me three times.</div>
<div>Repeat me three times.</div>
```

You can use the `$iteration` variable inside the loop for displaying the actual iteration count:

```html
@repeat(3)
	<div>Repeat me three times. I'am number #{{ $iteration }}</div>
@endrepeat
```

Output:

```html
<div>Repeat me three times. I'am number #1</div>
<div>Repeat me three times. I'am number #2</div>
<div>Repeat me three times. I'am number #3</div>
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md).

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.