# Heseya Pagination Middleware
Middleware that automatically sets pagination for all endpoints.

## How it's work?
You add middleware in `App\Http\Kernel`
```php
protected $middleware = [
    ...
    Heseya\Pagination\Http\Middleware\Pagination::class,
];
```

or to specific route in `router`
```php
Route::get(...)->middleware(Pagination::class);
```

Now when you send parameter `limit`
```
/products?limit=50
```

you can use `pagination.per_page` config key to set pagination limit
```php
public function index()
{
    return Product::paginate(Config::get('pagination.per_page'));
}
```

## Installation

```
composer require heseya/laravel-pagination
```
```
php artisan vendor:publish --tag=pagination
```
