<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|null)  $next
     * @param  string  ...$roles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|null
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (! Auth::check() || ! Auth::user()->hasRole($roles)) {
            abort(403); // Arrêter la requête et renvoyer une erreur 403 (accès interdit)
        }

        return $next($request);
    }
}
