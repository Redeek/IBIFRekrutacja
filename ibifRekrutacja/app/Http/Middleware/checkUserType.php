<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkUserType
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
        if(Auth::check()) {
            $user = Auth::user();

            if($user->usertype == 'admin' && $request->route()->getName() !== 'admin.dashboard'){
                return redirect('/admin/dashboard');
            }elseif($user->usertype == 'user' && $request->route()->getName() !== 'user.dashboard'){
                return redirect('/dashboard');
            }
        }
        return $next($request);
    }
}
