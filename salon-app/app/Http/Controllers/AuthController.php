<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Fungsi untuk menampilkan halaman form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Fungsi untuk memproses data dari form login
    public function login(Request $request)
    {
        // Cek login menggunakan email atau name
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if (Auth::attempt([$loginType => $request->username, 'password' => $request->password], $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // Arahkan ke halaman utama setelah login
        }

        return back()->with('error', 'Username/Email atau Password salah!')->withInput();
    }

    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}