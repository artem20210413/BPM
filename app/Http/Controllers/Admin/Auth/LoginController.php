<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // если уже залогинен — сразу в админку
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login'); // AdminLTE шаблон ниже
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','string'],
            'remember' => ['nullable','boolean'],
        ]);

        $remember = (bool)($cred['remember'] ?? false);

        if (Auth::attempt(['email' => $cred['email'], 'password' => $cred['password']], $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()
            ->withErrors(['email' => 'Неверный email или пароль'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
