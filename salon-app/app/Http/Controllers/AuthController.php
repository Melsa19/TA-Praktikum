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
        // Validasi inputan form
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Sementara kita pakai dd() dulu untuk memastikan data masuk ke Controller
        // Nanti ini akan diganti dengan logika pengecekan ke database
        dd($credentials);
    }

    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}