<?php

namespace Baleethai\NovaPermissions\Http\Middleware;

use Baleethai\NovaPermissions\NovaPermissions;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaPermissions::class)->authorize($request) ? $next($request) : abort(403);
    }
}
