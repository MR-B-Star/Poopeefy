<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (
            $request->email === 'admin@gmail.com' &&
            $request->password === 'admin123'
        ) {
            session([
                'is_admin' => true
            ]);

            return redirect()->route('dashboard-admin');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return redirect('/login');
    }
}
