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
        if (!$request->expectsJson()) {
            if ($request->routeIs('home.*', 'auth.*')) {
                session()->flash('fail', 'You must sign in first!');
                return route('auth.login');
            }
        }
        session()->flash('fail', 'You must login first!');
        return route('auth.login');
    }
}
