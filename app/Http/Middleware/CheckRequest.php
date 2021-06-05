<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
        if ($req->method() == 'POST') {
            return $next($req);
        }
        abort(403, 'У вас нет доступа');
    }
}
