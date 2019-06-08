<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
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
        if(!$request->session()->has("user")){
            return redirect("/")->with("msg_error","access denied");
        }
            $user = $request->session()->get("user");
            if($user->role != "admin"){
                return redirect("/")->with("msg_error","access denied");
            }

        return $next($request);
    }
}
