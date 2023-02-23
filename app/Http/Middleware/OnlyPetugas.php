<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyPetugas
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
        //
        // if (Auth::user()->petugas->user_id != [4,6]) {
        //     abort(404);
        //   }
        //   return $next($request);
        //  return redirect(‘/’);
        if (Auth::user() && Auth::user()->petugas == true) {
            return $next($request);
       }

       return back()->with('error','Opps, You\'re not Admin');
    }
}
