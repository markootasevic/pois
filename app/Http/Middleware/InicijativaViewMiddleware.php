<?php

namespace App\Http\Middleware;

use Closure;

class InicijativaViewMiddleware
{
    /**
     * Ovaj middleware omogucava korisnicima prvog i drugog nivoa
     * da vide sve inicijative
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
        if($user->admin == 1 || $user->admin == 2) 
            return $next($request);
        else 
            abort(404, 'No way hoze');
    }
}
