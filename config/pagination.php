<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Limit Key
    |--------------------------------------------------------------------------
    |
    | Key you use in url to set pagination limit.
    |
    */
    'limit_key' => env('PAGINATION_LIMIT_KEY', 'limit'),

    /*
    |--------------------------------------------------------------------------
    | Pagination default
    |--------------------------------------------------------------------------
    |
    | Default pagination limit, when no pagination was found in request.
    |
    */
    'per_page' => (int) env('PAGINATION_DEFAULT', 24),

    /*
    |--------------------------------------------------------------------------
    | Pagination max
    |--------------------------------------------------------------------------
    |
    | Max pagination limit.
    |
    */
    'max' => (int) env('PAGINATION_MAX', 500),

];
