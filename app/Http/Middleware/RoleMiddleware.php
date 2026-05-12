<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // condtion  pour verfier si user est connecté et si son roll corespond ou rolle reque
        if (! $request->user() || $request->user()->role !== $role) {
            abort(403, "Accès refusé : Vous n'avez pas les permissions nécessaires.");
        }

        return $next($request);
    }
}
