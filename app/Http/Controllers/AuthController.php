<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Metode untuk registrasi
    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login pengguna yang baru terdaftar
        Auth::login($user);

        // Arahkan ke dashboard
        return redirect()->route('login')->with('success', 'Registration successfully Please login');
    }

    // Metode untuk login
    public function login(Request $request)
    {
        // Validasi data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan ke dashboard
            return redirect()->route('book.index')->with('Login Successfully');
        }

        // Jika gagal
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    // Metode untuk logout
    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Invalidasi sesi
        $request->session()->invalidate();

        // Regenerate token
        $request->session()->regenerateToken();

        // Arahkan ke halaman utama
        return redirect()->route('login')->with('logout succes');
    }
}
