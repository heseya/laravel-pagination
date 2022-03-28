<?php

declare(strict_types=1);

namespace Heseya\Pagination\Http\Middleware;

use App\Exceptions\StoreException;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class Pagination
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $limit = Config::get('limit_key');

        if ($request->exists($limit)) {
            $validator = Validator::make($request->only($limit), [
                $limit => ['integer', 'min:1', 'max:' . Config::get('pagination.max')],
            ]);

            if ($validator->fails()) {
                throw new StoreException($validator->errors()->first());
            }

            Config::set('pagination.per_page', (int) $request->input($limit));
        }

        return $next($request);
    }
}
