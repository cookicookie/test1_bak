<?php

namespace App\Http\Middleware;

use Closure;

class firstmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = [
            ['name'=>'takahashi', 'mail'=>'daiki@1234'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
