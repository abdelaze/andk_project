<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        $lang    = App::getLocale();
        if ($request->is($lang.'/admin') || $request->is($lang.'/admin/*')) {
            return redirect()->route('get.admin.login');
        }else {
            //return route('login');
            return $request->expectsJson() ? null : route('login');
        }
    }
}
