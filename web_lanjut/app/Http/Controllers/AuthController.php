<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function simpan_register(Request $request) {
        // Gabung nama depan dan belakang
        $name = $request->first_name . ' ' . $request->last_name;

        User::create([
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function proses_login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        }
        return back()->with('error', 'Login Gagal!');
    }
}