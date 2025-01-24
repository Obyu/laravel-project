<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $auth = Session::get('auth');
        if(!$auth || ($auth['type'] === 'petugas' && $auth['level'] !== $role && $role !== 'petugas')){
            return redirect()->route('/')->with('error',  'anda tidak memiliki akses');
        }

        if(!$auth || ($auth['type'] === 'masyarakat' && $role !== 'masyarakat')){
            return redirect()->route('masyarakat.index')->with('error','anda tidak memiliki akses untuk ini');
        }
        return $next($request);
    }
}
