<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Sentinel;
use Cache;
use Illuminate\Http\Request;

class LastUserActivity
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
        if (Sentinel::check()) {
            $expiresAt = Carbon::now()->addMinutes(5);
            Cache::put('user-is-online-' . Sentinel::getUser()->id, true, $expiresAt);
        }
        return $next($request);
    }
}
