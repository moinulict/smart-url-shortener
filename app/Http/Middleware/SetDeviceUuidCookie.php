<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SetDeviceUuidCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->hasCookie('SmartURLShortenerUUID')) {
            $uuid = Str::uuid()->toString();
            $response = $next($request);
            $response->cookie('SmartURLShortenerUUID', $uuid, 60 * 24 * 365);

            return $response;
        }

        return $next($request);
    }
}
