<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPremiumSubscription
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
        if (auth()->check() && auth()->user()->hasActivePremiumSubscription()) {
            view()->share('isPremium', true);
        } else {
            view()->share('isPremium', false);
        }
        
        return $next($request);
    }
}
