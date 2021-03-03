<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sentinel;
use App\Models\User;

class RegisterDownload
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
        if(Sentinel::check())
        {

            User::find(Sentinel::getUser()->id)->increment('download', 1);

            return view('download');
        }
     
        return $next($request);
    }
}
