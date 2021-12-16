<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Illuminate\Http\Request;

class Alabanza
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
        $verificar = DB::table('roles_admin')->where('roles_id', 3)->where('admin_id', auth()->user()->id)->first();
        if ($verificar == null) {
            abort(403);
        } else {
            return $next($request);
        }

    }
}
