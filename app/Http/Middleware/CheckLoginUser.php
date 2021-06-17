<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request,\Closure $next)
    {
        if(get_data_user('web')){
            return $next($request);
        }
        return redirect()->route('get.login');
    }
}
