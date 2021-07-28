<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\BannedIp;
use Illuminate\Http\Request;

class ValidateIpAddress
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
        if (BannedIp::where("ip", $request->ip())->exists())
        {
            return response()->view("errors.banned");
        }
        
        return $next($request);
    }
}
