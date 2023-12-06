<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
        {
            if (Auth::check()) {
                if (Auth::User()->role_id == 1) {
                    // El usuario es un administrador
                    return redirect('productos'); // O la ruta que desees para los administradores
                } else {
                    // El usuario no es un administrador
                    return redirect('perfil'); // O la ruta que desees para usuarios regulares
                }
            }

            return $next($request);
        }


    }

