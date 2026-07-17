<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 1. FUNGSI INDEX: Untuk menampilkan TABEL DATA
    public function index()
    {
        // Mengambil semua data user dari database
        $users = User::all(); 
        
        // Mengirim data ke file user_index.blade.php
        return view('pages.admin.user_index', compact('users'));
    }

    // 2. FUNGSI CREATE: Untuk menampilkan FORM INPUT
    public function create()
    {
        // Menampilkan halaman form input data
        return view('pages.admin.user_create'); 
    }

    // 3. FUNGSI STORE: Untuk MENYIMPAN data dari form ke database
    public function store(Request $request)
    {
        // Validasi agar inputan tidak kosong/salah
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role'     => 'required'
        ]);

        // Proses simpan ke Tabel Users
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        // Setelah sukses, arahkan kembali ke halaman TABEL (index)
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function destroy(User $user) {
    $user->delete();
    return back()->with('success', 'User berhasil dihapus');
}

    public function edit(User $user) {
        return view('pages.admin.user_edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Data diperbarui');
}



}