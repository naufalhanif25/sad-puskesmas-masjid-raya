<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // TODO: Tambah akun disini
    if (!\App\Models\User::where('name', 'admin')->exists()) {
        \App\Models\User::create([
            'name' => 'admin',
            'nip' => '123',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);
    }

    return app(LoginController::class)->index();
})->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tv', function () {return view('tv');});
