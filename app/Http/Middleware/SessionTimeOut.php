<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @method reCacheAllUsersData()
 */
class SessionTimeOut
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
        if (!session()->has('lastActivityTime')) {
            session(['lastActivityTime' => now()]);
        }

        if (now()->diffInMinutes(session('lastActivityTime')) >= 45) {
            if (Auth::guard('web')->check()) {
                Auth::guard('web')->logout();
                session()->forget('lastActivityTime');
                return redirect(route('user.login'))->with('error','Session Timed Out!');
            }
        }

        session(['lastActivityTime' => now()]);
        return $next($request);
    }
}
