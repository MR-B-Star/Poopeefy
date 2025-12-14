<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // 🔥 ADMIN HARD-CODE CHECK
    if (
        $request->email === 'admin@gmail.com' &&
        $request->password === 'admin123'
    ) {
        // optional: set session flag biar keliatan "login"
        session(['is_admin' => true]);

        return redirect('/dashboard-admin');
    }

    // LOGIN NORMAL (USER BIASA)
    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

}
