<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Dashboard
Route::get('/admin', function () {
    return view('pages.admin.dashboard');
})->name('admin.dashboard');

// Rute Resource User (Ini yang bikin error tadi hilang)
Route::resource('admin/users', UserController::class);
Route::resource('admin/customers', CustomerController::class);