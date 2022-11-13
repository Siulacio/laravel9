<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
           'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        /**
         * attempt verifica la existencia de un registro con el email y el password entregados como argumento
         * el segundo parametro debe ser booleaano y sirve para indicar si desemos que se recuerde la sesion o no
         */

        if ( ! Auth::attempt($credentials, $request->boolean('remember')) ) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        /**
         * método intended nos redirecciona a la url que deseabamos ingresar justo antes de ser redireccionados al login
         */
        return redirect()->intended()->with('status', 'You are logged in');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'You are logged out!');
    }
}
