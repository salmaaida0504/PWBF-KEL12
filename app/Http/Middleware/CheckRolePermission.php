<?php

namespace App\Http\Middleware;

// use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle($request, Closure $next, $role)
    public function handle($request, $role)
    {
        // dd('Middleware is applied');

        \Log::info('Requested Role: ' . $role);
        \Log::info('User Roles: ' . auth()->user()->roles->pluck('nama_role')->implode(', '));

        if (auth()->check() && auth()->user()->hasRole($role)) {
            return $next($request);
        }

        abort(403, 'Forbidden, you don\'t have permission to access this resource.');
    }
}
