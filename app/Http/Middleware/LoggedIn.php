<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // request session ထဲမှာ login_user_id ပါရင် pass , မပါရင် login route ကိုသွားမယ်။
        if($request->session()->has('login_user_id')) return $next($request);
        return redirect()->route('shop.login_form')->withErrors(['Please, login first.']);
    }
}
