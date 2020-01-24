<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
     


     // middlware serve para filtrar o que passa de dados ou nao
   
    public function handle($request, Closure $next)
    {
         // essa funcao é para liberar o CORS
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }
}

// DEPOIS PRECISA IR PARA O KERNEL.PHP PARA REGISTRAR O MIDDLWARE 