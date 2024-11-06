<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('develix::authentication.register');
    }

    public function register(Request $request)
    {
        // Validatie
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Maak een nieuwe gebruiker aan
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Versleutelen met hashing
        ]);

        // Log de gebruiker automatisch in na registratie
        Auth::attempt($request->only('email', 'password'));

        return redirect()->intended('dashboard'); // Verander naar de gewenste route
    }

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
            return redirect()->intended('dashboard'); // Verander naar de gewenste route
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
}
