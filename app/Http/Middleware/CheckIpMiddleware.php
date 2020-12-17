<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIpMiddleware
{
    public $whiteIp = '192.168.0.10';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!in_array($request->ip(), $this->$whiteIp)) {
    
            /*
                You can redirect to any error page. 
            */
            return abort(403);
        }
    
        return $next($request);
    }
}
