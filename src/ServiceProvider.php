<?php

namespace Heseya\Pagination;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pagination.php',
            'pagination',
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/pagination.php' => config_path('pagination.php'),
        ], 'pagination');
    }
}
