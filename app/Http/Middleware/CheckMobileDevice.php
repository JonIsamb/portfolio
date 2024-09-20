<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class CheckMobileDevice
{
    public function handle($request, Closure $next)
    {
        $agent = new Agent();
        
        // Check if the user is on a mobile device
        if ($agent->isMobile()) {
            // Redirect the user to a mobile-specific route or page
            return response()->view('mobile');
        }

        return $next($request);
    }
}
