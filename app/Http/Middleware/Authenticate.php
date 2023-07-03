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
            $data = request()->url();
            $data2 = explode('/', $data);
            if (isset($data2[3]) && $data2[3] == "superadmin") {
                return route('superadmin.login');
            } elseif(isset($data2[3]) && $data2[3] == "danisman"){
                return route('danisman.login');

            }
             else {

                return route('login');
            }
        }
    }
}
