<?php

namespace Support\app;

use Support\lib\Middleware;


class AuthMiddleware implements Middleware{

    public function handle($request, \Closure $next)
    {
        
        return $next($request);
    }
}