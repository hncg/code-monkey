<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use Request;
use Route;
class OldMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = Route::input('id');
        if($id <10 )
        {
            return Response::json('heh',401);
        }
        else
        {
        return $next($request);
        }
        // echo "1";
        // return response('Unauthorized!', 401);
        // return Response::redirectGuest('/cgindex2',302);
    }
}
