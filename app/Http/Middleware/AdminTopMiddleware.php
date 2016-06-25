<?php

namespace App\Http\Middleware;

use Closure;

class AdminTopMiddleware
{
    /**
     * Ovaj middleware omogucava da korisnici prvog nivoa mogu dodavati nove naloge.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if($user == null)
            abort(404, 'No way hoze');
        if($user->admin == 1) 
            return $next($request);
        else 
            abort(404, 'No way hoze');

    }
}
