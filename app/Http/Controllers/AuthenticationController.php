<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    // menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('registrasi');
    }

    // proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    // menampilkan form login

    public function showLoginForm()
    {
        return view('login');
    }

    // proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'login_error' => 'Email atau Password anda salah',
        ])->withInput([]);
    }

    // proses logout (masih proses)
}
