<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use  DB;
class Admin
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
        $verificar=DB::table('roles_admin')->where('roles_id',1)->where('admin_id',auth()->user()->id)->first();
        if ($verificar==null) {
            abort(403);
        }else {
            return $next($request);
        }
       
    }
}
