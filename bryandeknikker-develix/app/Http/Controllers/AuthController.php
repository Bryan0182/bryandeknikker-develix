<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('develix::authentication.login');
    }

    public function login(Request $request)
    {
        // Validatie
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Probeer in te loggen
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'De opgegeven gegevens komen niet overeen met onze gegevens.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }

    public function getLogout()
    {
        return $this->logout(request());
    }
}
