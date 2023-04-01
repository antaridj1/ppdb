<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->route()->named('admin.*')) {
                return route('admin.login');
            } else {
                return route('login');
            }
            if ($request->route()->named('siswa.*')) {
                return route('ppdb');
            } else {
                return route('ppdb');
            }
        }
    }
}
