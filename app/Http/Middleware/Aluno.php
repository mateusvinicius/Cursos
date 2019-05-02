<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Aluno
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
        if(Auth:: user()->nivel == 2){
            return $next($request);
        }else if(Auth:: user()->nivel == 1){
            return redirect()->route('index_dashboard'); 
        }

        return redirect()->route('login'); 
    }
}
