# Laravel Route Helpers

Add a simple Route::when macro to conditionally register routes.

## Installation

```bash
composer require dartmoon/laravel-route-helpers
```

## Usage
When the condition is true the route will be registered, otherwise it will be ignored.

```php
Route::when($condition, function () {
    Route::get('/registered/only/when/condition/is/true', fn () => 'Hello World');
});
```

For example you can register routes base on app locale.

```php
Route::when(app()->getLocale() == 'en', function () {
    Route::get('about', fn () => 'English');
});

Route::when(app()->getLocale() == 'it', function () {
    Route::get('about', fn () => 'Italiano');
});
```

## License

This project is licensed under the MIT License - see the LICENSE.md file for details