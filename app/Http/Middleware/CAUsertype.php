<?php

namespace App\Http\Middleware;
use Auth;
use App\User;

use Closure;

class CAUsertype
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
        $userID = Auth::id();

        $user = User::select('user_type')->where('id', $userID)->first();

        if($user->user_type != 'CA'){
            return \redirect('/');
        }

        return $next($request);
    }
}
