<?php

namespace App\Http\Middleware;

use Closure;

class TeacherAuthenticate
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
        $user = \Illuminate\Support\Facades\Auth::user();
        if($user->role != 'teacher'){
            return response()->view('403', [], 403);
        }
        return $next($request);
    }
}
