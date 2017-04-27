<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Support\Facades\Log as Log;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission)
    {
        Log::debug("Handling a request.");

        if (Auth::guest()) {
            return redirect(url(config('backpack.base.route_prefix').'/login'));
        }

        Log::debug("Role / Permission");
        Log::debug($role);
        Log::debug($permission);

        Log::debug("User");
        Log::debug($request->user());


        if (! $request->user()->hasRole($role)) {
            abort(403);
        }

        if (! $request->user()->can($permission)) {
            abort(403);
        }

        return $next($request);
    }
}

