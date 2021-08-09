<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = \Auth::user();
        if ($user->hasRole('cliente') || $user->hasRole('admin')) {
            return $next($request);
        }
        return redirect('/');
    }
}
